<?php

function ldap_login($username, $password) {
$ldapServer = "ldap.iitm.ac.in";
$ldapPort = 389;
$ldapDn = "cn=students,ou=bind,dc=ldap,dc=iitm,dc=ac,dc=in";
$ldapPass = "rE11Bg_oO~iC";
$ldapConn = ldap_connect($ldapServer, $ldapPort) or die("Could not connect to LDAP server.");
echo $ldapConn;
$studentUser = $username;
$studentPass = $password;

if($ldapConn) {
	$ldapBind = @ldap_bind($ldapConn, $ldapDn, $ldapPass);
	if($ldapBind){
        $filter = "(&(objectclass=*)(uid=".$studentUser."))";
		$ldapDn = "dc=ldap,dc=iitm,dc=ac,dc=in";
    	$result = @ldap_search($ldapConn, $ldapDn, $filter) or die ("Error in search query: ".ldap_error($ldapConn));   
    	$entries = @ldap_get_entries($ldapConn, $result);
		foreach($entries as $values => $values1){
			$logindn = $values1['dn'];
		}
		$loginbind = @ldap_bind($ldapConn, $logindn, $studentPass);
		if ($loginbind){
			return 1;
    	}
	}
}
@ldap_unbind($ldapConn);
return 0;
}

<?php

/***** Variables *****/
#The username and password used by the updater to send the request.
#HTTP Basic authentication
$php_auth_user='CHOOSEAUSERNAME';
$php_auth_pw='CHOOSEAPASSWORD';

#The url of the cpanel server
$dyndnsCpanel = 'https://example.com:2083';

#username and password used to login to cpanel
$dyndnsCpanelUser = 'CPANELUSERNAMEHERE';
$dyndnsCpanelPass = 'CPANELPASSWORDHERE';

#the main domain name of the account on cpanel
$dyndnsDomain = 'example.com';

#the base domain of which the subdomain has a dynamic ip
$dyndnsRemoteHostDomain = '.example.com.';

$dyndnsServiceName = 'DynDyns Service';

#Pushover
$enablepushover = true;
$userkey = 'USERKEYHERE';
$appkey = 'APPKEYHERE';
$priority = '-2';

?>

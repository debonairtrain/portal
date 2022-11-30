<!--
@company - SystemSpecs
@product - Remita
@author - Oshadami Mike
-->

<?php

//tHIS IS CREATED FOR SCHOOL FEE PAYMENTS
// THERE WASNT TIME TO FLIP THROUGH THE SERVICE TYPES PROGRAMMATICALLY HENCE THE NEW PAGE
define("MERCHANTID", "8677657740"); //"2547916"
define("SERVICETYPEID","9415845447"); // "4430731"
define("APIKEY", "ZW75STHN"); //1946"
define("GATEWAYURL", "https://login.remita.net/remita/ecomm/split/init.reg");
define("GATEWAYRRRPAYMENTURL", "https://login.remita.net/remita/ecomm/finalize.reg");
define("CHECKSTATUSURL", "https://login.remita.net/remita/ecomm");
define("PATH", 'https://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));
?>



<?php /*?><?php ## demo credentials

define("MERCHANTID", "2547916");
define("SERVICETYPEID", "4430731");
define("APIKEY", "1946");
define("GATEWAYURL", "http://www.remitademo.net/remita/ecomm/v2/init.reg");
define("GATEWAYRRRPAYMENTURL", "http://www.remitademo.net/remita/ecomm/finalize.reg");
define("CHECKSTATUSURL", "http://www.remitademo.net/remita/ecomm");
define("PATH", 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));
?><?php */?>

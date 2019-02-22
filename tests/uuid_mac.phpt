--TEST--
uuid_mac() function
--SKIPIF--
<?php 


if(!extension_loaded('uuid')) die('skip ');


if(!function_exists('uuid_mac')) die('skip not compiled in (HAVE_UUID_MAC)');


 ?>
--FILE--
<?php
var_dump(uuid_mac("b691c99c-7fc5-11d8-9fa8-00065b896488"));
var_dump(uuid_mac("878b258c-a9f1-467c-8e1d-47d79ca2c01b"));


?>
--EXPECT--
string(12) "00065b896488"
bool(false)

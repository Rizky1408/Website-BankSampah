<?php
$DB_host = "sql205.epizy.com";
$DB_user = "epiz_28488795";
$DB_pass = "PwhPsVFZpqK";
$DB_name = "epiz_28488795_bsk09";

try
{
	$db = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $message)
{
	echo $message->getMessage();
}
?>

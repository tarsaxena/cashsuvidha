<?php
@session_start();
require_once("includes/function/autoload.php");

$conRegister = new Manage_Member();
//print_r($_GET);die;
$result=$conRegister->Confirmmember($_GET['uid'],$_GET['passkey']);

?>

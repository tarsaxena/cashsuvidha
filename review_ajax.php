<?php

include_once 'config/configure.php';
ob_start();
error_reporting(0);
//
//session_start();
//
//print_r($_POST);
mysql_connect("localhost","cashsuvidbadmin","Pass@csdbadmin");
mysql_select_db("cashsuvidhadb");

$date = date("Y-m-d");
 $sql ="insert into user_review(name,review,rating,created_date,status) values('".$_POST['user_name']."','".$_POST['user_review']."','".$_POST['star']."','".$date."','Pending')";
$rs=mysql_query($sql);

if($rs){
    echo "Data Successfully Submitted";
	}




 
  
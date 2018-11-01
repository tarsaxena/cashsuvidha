<?php
@session_start();
require_once('includes/function/autoload.php');
require_once('config/configure.php');
 $action = $_REQUEST['action'];
$mode = $_REQUEST['mode'];
 $type = $_REQUEST['type'];
$block = $_REQUEST['block'];


if($action=='Country')
{
      $stateObj=new ManageUser();
      if($type == 'SelectState'){
      $stateID= $_POST[stateID];
      $stateObj->StateDropdown($stateID);
      }
      if($type=='checkemail'){
      echo $stateObj->checkUseridExsitence($_POST['email']);
      }

      if($type=='checkaffliateemail'){
      echo $stateObj->checkAffliateEmailExsitence($_POST['email']);
      }
}


if($_REQUEST["registration_form"]) {
  $menObj=new Manage_Member();

 echo $menObj->addNewUser($_REQUEST);

}

if ($action == "registration") {
$LoginObj = new Manage_Member;
if($type=="loginvalue"){
$email=$_POST['userid'];
$password=$_POST['pass'];
echo $LoginObj->userLoginCheck($email,$password);
}
//forgetpassword
if($type=="forgetUserPass"){
$email=$_POST['userid'];
echo $LoginObj->forgetPassword($email);
}

}

?>
<?php

session_start();
ob_start();
class model {

  public function insert_OTP($mobile, $otp) {
    //echo "INSERT INTO wl_users_otp (phone,otp) VALUES($mobile,$otp)";exit;
    $query = mysql_query("INSERT INTO wl_users_otp (phone,otp) VALUES($mobile,$otp)");
    if ($query) {
      return TRUE;
    } else {
      return 0;
    }
  }

  public function get_OTP($mobile, $otp) {

    $query = mysql_query("SELECT * FROM wl_users_otp WHERE phone='$mobile' AND otp='$otp' AND status='0'");
    //print_r($query);
    $data = mysql_fetch_assoc($query);
    if ($data != NULL) {
      //echo "here";exit;
      return $data;
    } else {
      //echo "here in else";exit;
      return 0;
    }
  }

  public function update_OTP($data) {
    // echo "UPDATE wl_users_otp SET status = '1' WHERE mobile='".$data[1]."' AND otp='".$data[2]."'";exit;
    $query = mysql_query("UPDATE wl_users_otp SET status = '1' WHERE phone='" . $data['phone'] . "' AND otp='" . $data['otp'] . "'");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function count_userdata($email, $mobile) {
    //echo "SELECT COUNT(*) FROM users WHERE email='$email' AND mobile='$mobile'";
    $query = mysql_query("SELECT COUNT(*) FROM manage_users WHERE email='$email' AND phone='$mobile'");

    $data = mysql_fetch_row($query);
    // print_r($data);exit;
    if ($data[0] > 0) {
      //echo "in if";exit;
      return $data;
    } else {
      //echo "in else";exit;
      //echo mysql_error();exit;
      return 0;
    }
  }

  public function count_userdataWithMobile($mobile) {
    //echo "SELECT COUNT(*) FROM users WHERE email='$email' AND mobile='$mobile'";
    $query = mysql_query("SELECT COUNT(*) FROM manage_users WHERE phone='$mobile'");

    $data = mysql_fetch_row($query);
    // print_r($data);exit;
    if ($data[0] > 0) {
      //echo "in if";exit;
      return $data;
    } else {
      //echo "in else";exit;
      //echo mysql_error();exit;
      return 0;
    }
  }

  public function count_userdataWithEmail($email) {
    //echo "SELECT COUNT(*) FROM users WHERE email='$email' AND mobile='$mobile'";
    $query = mysql_query("SELECT COUNT(*) FROM manage_users WHERE email='$email'");

    $data = mysql_fetch_row($query);
    // print_r($data);exit;
    if ($data[0] > 0) {
      //echo "in if";exit;
      return $data;
    } else {
      //echo "in else";exit;
      //echo mysql_error();exit;
      return 0;
    }
  }

  public function create_user_json($postData) {

//        echo "<br>";
//        echo "<pre>";
//        print_r($postData);echo "<br>";
//        echo "INSERT INTO manage_users (fname,email,password,city,phone,comfirm,created_date,lat,long) VALUES('".$postData['fname']."','".$postData['email']."','".$postData['password']."','".$postData['city']."','".$postData['phone']."','".$postData['comfirm']."','".date('Y-m-d H:i:s')."','".$postData['lat']."','".$postData['longi']."')";
//        exit;
      if(isset($postData['created_from']) &&  ((int)$postData['created_from']!="")){
          $created_from = (int)$postData['created_from'];
      }else{
          $created_from = 1;
      }
    $query = mysql_query("INSERT INTO manage_users (fname,email,password,city,phone,comfirm,created_date,lat,longi,created_from) VALUES('" . $postData['fname'] . "','" . $postData['email'] . "','" . $postData['password'] . "','" . $postData['city'] . "','" . $postData['phone'] . "','" . $postData['comfirm'] . "','" . date('Y-m-d H:i:s') . "','" . $postData['lat'] . "','" . $postData['longi'] . "','" . $created_from . "')");

    if ($query > 0) {
      $userdata = mysql_query("SELECT * FROM manage_users ORDER BY user_id DESC");
      $userdata = mysql_fetch_assoc($userdata);
      
      return $userdata;
    } else {
      return FALSE;
    }

    //print_r($userdata);exit;
  }

  public function get_content() {

    $query = mysql_query("SELECT * FROM manage_mail_setting WHERE id='1'");

    $Content = mysql_fetch_object($query);
    return $Content;
  }

  public function login($mobile) {
    $query = mysql_query("SELECT * FROM manage_users WHERE phone='" . $mobile . "'");
    $data = mysql_fetch_assoc($query);
    if ($data) {
      return $data;
    } else {
      return 0;
    }
  }

  public function chk_registered_user($mobile) {

    $query = mysql_query("SELECT COUNT(*) FROM manage_users WHERE phone=$mobile");
    $data = mysql_fetch_row($query);
    //print_r($data);exit;
    if ($data[0] > 0) {
      return $data;
    } else {
      return 0;
    }
  }

  public function update_lat_long($mobile, $lat, $long) {


    $query = mysql_query("UPDATE manage_users SET lat='" . $lat . "',longi='" . $long . "' WHERE phone=$mobile");


    if ($query > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  //For Upload Document
  public function updateLatLong($custid, $lat, $long) {


    $query = mysql_query("UPDATE manage_users SET lat='" . $lat . "',longi='" . $long . "' WHERE user_id=$custid");


    if ($query > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function insertSMS($sms, $custId) {
   //echo "<pre>";print_r($sms);die();
    $mil = $sms->Time;
    $seconds = $mil / 1000;
    $msg_time= date("Y-m-d H:i:s", $seconds);
	//echo $msg_time;die();
	$qry = mysql_query("Select * from manage_users_sms where custId='$custId' and dateTime='$msg_time' ");
     //echo "<pre>";print_r($qry);die(); 
      if(mysql_num_rows($qry) > 0){
		  
		$query = mysql_query("UPDATE manage_users_sms SET message='" . $sms->message . "',ContactNo='" . $sms->ContactNo. "' WHERE custId='$custId' and dateTime='$msg_time'");  
		//$query = mysql_query("INSERT INTO manage_users_sms (custId,message,ContactNo,dateTime) VALUES('" . $custId . "','" . $sms->message . "','" . $sms->ContactNo . "','" . date("Y-m-d H:i:s") . "')");
		//echo "mohit";die();
	  }
	  else{
    $query = mysql_query("INSERT INTO manage_users_sms (custId,message,ContactNo,dateTime) VALUES('" . $custId . "','" . $sms->message . "','" . $sms->ContactNo . "','" .  date("Y-m-d H:i:s", strtotime($sms->Time)) . "')");
	  }
	  
    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function insertContact($Contact, $custId) {

    $query = mysql_query("INSERT INTO manage_users_contact (custId,ContactNo,ContactName) VALUES('" . $custId . "','" . $Contact->ContactNo . "','" . $Contact->ContactName . "')");
    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function insertCallHistory($CalHis, $custId) {

    $query = mysql_query("INSERT INTO manage_users_callhistory(custId,ContactNo,dateTime,DeviceId)VALUES('" . $custId . "','" . $CalHis->ContactNo . "','" .  date("Y-m-d H:i:s", strtotime($CalHis->Time)) . "','" . $CalHis->DeviceId . "')");
	
    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
  
    public function insertCallHistory_new($CalHis, $custId) {
        $qry_str = "INSERT INTO users_call_history (custId,number,callDate,callType,callDuration) VALUES('" . $custId . "','" . $CalHis->number . "','" . date("Y-m-d H:i:s", strtotime($CalHis->callDate)) . "','" . $CalHis->callType . "','" . $CalHis->callDuration . "')";
    $query = mysql_query($qry_str);
    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
  
  public function insertDeviceInfo($DevInfo) {

    $qry = mysql_query("Select * from manage_users_device_info where custId='$DevInfo->custId'");
     
      if(mysql_num_rows($qry) > 0){
		  mysql_query("delete from manage_users_device_info where custId='$DevInfo->custId'");
    $query = mysql_query("INSERT INTO manage_users_device_info (custId,serialno,modelno,deviceid,manufacturer,versioncode,IMEI) VALUES('" . $DevInfo->custId . "','" . $DevInfo->serialno . "','" . $DevInfo->modelno . "','" . $DevInfo->deviceid . "','" . $DevInfo->manufacturer . "','" . $DevInfo->versioncode . "','" . $DevInfo->IMEI . "')");
	  }
	  else{
		     $query = mysql_query("INSERT INTO manage_users_device_info (custId,serialno,modelno,deviceid,manufacturer,versioncode,IMEI) VALUES('" . $DevInfo->custId . "','" . $DevInfo->serialno . "','" . $DevInfo->modelno . "','" . $DevInfo->deviceid . "','" . $DevInfo->manufacturer . "','" . $DevInfo->versioncode . "','" . $DevInfo->IMEI . "')");
	  }
    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function getBestLoans() {

    $query = mysql_query("SELECT * FROM bestloans");

    $data = mysql_fetch_assoc($query);
    if ($data) {
      return $data;
    } else {
      return 0;
    }
  }

  public function get_Cities() {
    $query = mysql_query("SELECT * FROM manage_city");
    while ($row = mysql_fetch_assoc($query)) {
      $data[] = $row;
    }
    if ($data) {
      return $data;
    } else {
      return 0;
    }
  }

  //Upload Functions Starts Here
  public function uploadPAN($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_pancard (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadAddress($file, $cust_id) {
    $query = mysql_query("INSERT INTO users_company_address_prof (image,mem_id) VALUES('" . $file . "','" . $cust_id . "')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  //Vicky

  public function update_user_loan($postData) {

    $query = mysql_query("INSERT INTO manage_upload_data (cust_id,user_pan_card,userEmail,user_aadhar_card,loan_type,user_step,date) VALUES('" . $postData['cust_id'] . "','" . $postData['cust_pan_no'] . "','" . $postData['userEmail'] . "','" . $postData['cust_aadhar_no'] . "','" . $postData['loan_type'] . "','1','" . date('Y-m-d H:i:s') . "')");
    $_SESSION['loan_type'] = $postData['loan_type'];
    if ($query) {
      return TRUE;
    } else {
      return FALSE;
      //echo mysql_error();
      //exit;
    }
  }

  public function updateAdhar($file, $cust_id) {
    $query = mysql_query("UPDATE manage_upload_data SET adhar_number = '" . $file . "' WHERE cust_id = '" . $cust_id . "' AND id = '" . $_SESSION['loan_id'] . "'");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function save_personal_web() {
    $query = mysql_query("UPDATE manage_upload_data SET userCompletePerAddress = '" . $_POST['userCompletePerAddress'] . "', userCompleteResAddress='" . $_POST['userCompleteResAddress'] . "', userDOB='" . $_POST['userCompletePerAddress'] . "', userGender='" . $_POST['gender'] . "', userEmail='" . $_POST['email'] . "', userName = '" . $_POST['name'] . "', userDOB = '" . $_POST['dob'] . "', user_step = '2' WHERE cust_id = '" . $_SESSION['user_id'] . "' AND id = '" . $_SESSION['loan_id'] . "'");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function save_gernal_web() {
    $query = mysql_query("UPDATE manage_upload_data SET loan_type = '" . $_POST['loan_type'] . "', loan_amount='" . $_POST['loan_amount'] . "', promo_code='" . $_POST['promo_code'] . "', user_step = '3' WHERE cust_id = '" . $_SESSION['user_id'] . "' AND id = '" . $_SESSION['loan_id'] . "'");
    $_SESSION['loan_type'] = $_POST['loan_type'];

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function save_employer_web() {
    $query = mysql_query("UPDATE manage_upload_data SET org_name = '" . $_POST['org_name'] . "', designation='" . $_POST['designation'] . "', office_add='" . $_POST['office_add'] . "', no_of_year = '" . $_POST['no_of_year'] . "', total_exp = '" . $_POST['total_exp'] . "', monthly_income = '" . $_POST['monthly_income'] . "', user_step = '4' WHERE cust_id = '" . $_SESSION['user_id'] . "' AND id = '" . $_SESSION['loan_id'] . "'");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function save_business_web() {
    $query = mysql_query("UPDATE manage_upload_data SET business_pan_no = '" . $_POST['business_pan_no'] . "', entity_type='" . $_POST['entity_type'] . "', business_turnover='" . $_POST['business_turnover'] . "', business_entity_name = '" . $_POST['business_entity_name'] . "', business_address = '" . $_POST['business_address'] . "', reg_address = '" . $_POST['reg_address'] . "', user_step = '4' WHERE cust_id = '" . $_SESSION['user_id'] . "' AND id = '" . $_SESSION['loan_id'] . "'");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function update_user_step() {
    $query = mysql_query("UPDATE manage_upload_data SET user_step = '0' WHERE cust_id = '" . $_SESSION['user_id'] . "' AND id = '" . $_SESSION['loan_id'] . "'");
    $_SESSION['user_step'] = 0;
    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function getloanDets($cust_id) {
    $query = mysql_query("SELECT id, loan_type, user_step FROM manage_upload_data WHERE cust_id='" . $cust_id . "' order by id desc limit 0,1");
    $data = mysql_fetch_assoc($query);
    if ($data) {
      return $data;
    } else {
      return 0;
    }
  }

  //End

  public function uploadBusPAN($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_company_pan_card (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadSanction($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_sanction_letters (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadCertificate($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_certificate_incorporation (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadVAT($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_vat_returns (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadElecBill($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_electricity_bill (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadSalary($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_salary_slip (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadRental($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_rental_agreement (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadTTR($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_ttr (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadForm16($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_form16 (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadBankState($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_bank_statements (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadITR($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_itr (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadBalanceSheet($file, $cust_id,$loan_id) {
	
    $query = mysql_query("INSERT INTO users_balance_sheet set image = '".$file."',mem_id = '" . $cust_id . "',loan_id = '".$loan_id."'");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadPL($file, $cust_id, $loan_id) {
    $query = mysql_query("INSERT INTO users_pl (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadComputation($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_computation (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function uploadBusBank($file, $cust_id,$loan_id) {
    $query = mysql_query("INSERT INTO users_business_bank_statement (image,mem_id,loan_id) VALUES('" . $file . "','" . $cust_id . "','".$loan_id."')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  //Upload Function Ends Here

  public function GetMonthly_Income() {

    $query = mysql_query("SELECT * FROM manage_monthly_income");

    while ($row = mysql_fetch_assoc($query)) {
      $data[] = $row;
    }
    return $data;
  }

  public function getTotal_Exp() {

    $query = mysql_query("SELECT * FROM manage_total_experience");

    while ($row = mysql_fetch_assoc($query)) {
      $data[] = $row;
    }
    return $data;
  }

  public function get_Turnover() {

    $query = mysql_query("SELECT * FROM manage_company_trunover");

    while ($row = mysql_fetch_assoc($query)) {
      $data[] = $row;
    }
    return $data;
  }

  public function get_CurrentEmpYear() {

    $query = mysql_query("SELECT * FROM manage_current_employment_year");

    while ($row = mysql_fetch_array($query)) {
      $data[] = $row;
    }
    return $data;
  }

  public function get_Entities() {

    $query = mysql_query("SELECT * FROM manage_entities");

    while ($row = mysql_fetch_assoc($query)) {
      $data[] = $row;
    }
    return $data;
  }

  public function get_LoanType($cust_id) {

    $query = mysql_query("SELECT * FROM manage_loan_type");

    while ($row = mysql_fetch_assoc($query)) {

      $getloan_record = mysql_query("SELECT COUNT(*) FROM manage_upload_data WHERE cust_id='" . $cust_id . "' AND loan_type='" . $row['id'] . "'");
      $record = mysql_fetch_row($getloan_record);

      if ($record[0] > 0) {
        $row['cust_loan'] = TRUE;
      } else {
        $row['cust_loan'] = FALSE;
      }
      $data[] = $row;
    }
    return $data;
  }

  public function check_user_with_loan_type($cust_id, $loan_type) {
    $query = mysql_query("SELECT COUNT(*) FROM manage_upload_data WHERE cust_id='" . $cust_id . "' AND loan_type='" . $loan_type . "'");
    $data = mysql_fetch_row($query);
    if ($data[0] > 0) {
      return TRUE;
    } else {
      return 0;
    }
  }

//    public function manage_users_api($postData){
//        
//        $query = mysql_query("INSERT INTO manage_upload_data (cust_id,user_pan_card,user_aadhar_card,date,loan_amount,loan_type,org_name,designation,office_add,no_of_year,total_exp,monthly_income,business_pan_no,entity_type,business_turnover,business_entity_name,business_address,reg_address) VALUES('".$postData['cust_id']."','".$postData['cust_pan_no']."','".$postData['cust_aadhar_no']."','".date('Y-m-d H:i:s',strtotime($postData['date']))."','".$postData['loan_amount']."','".$postData['loan_type']."','".$postData['organisation_name']."','".$postData['designation']."','".$postData['office_add']."','".$postData['no_of_year']."','".$postData['total_exp']."','".$postData['monthly_income']."','".$postData['business_pan_no']."','".$postData['entity_type']."','".$postData['business_turnover']."','".$postData['business_entity_name']."','".$postData['business_address']."','".$postData['reg_address']."')");
//       
//        if($query){
//            return TRUE;
//        }else{
//            return FALSE;
//        }
//        
//    }
 public function manage_users_personal($postData) {
      $user_dob = date('Y-m-d', strtotime($postData['userDOB']));
      $apply_date = date('Y-m-d H:i:s');
    $query = mysql_query("INSERT INTO manage_upload_data (cust_id,user_pan_card,userName,userGender,userDOB,userEmail,userCompleteResAddress,userCompletePerAddress,user_aadhar_card,loan_amount,loan_type,org_name,designation,office_add,no_of_year,total_exp,monthly_income,created_date) VALUES('" . $postData['cust_id'] . "','" . $postData['cust_pan_no'] . "','" . $postData['userName'] . "','" . $postData['userGender'] . "','" . $user_dob . "','" . $postData['userEmail'] . "','" . $postData['userCompleteResAddress'] . "','" . $postData['userCompletePerAddress'] . "','" . $postData['cust_aadhar_no'] . "','" . $postData['loan_amount'] . "','" . $postData['loan_type'] . "','" . $postData['organisation_name'] . "','" . $postData['designation'] . "','" . $postData['office_add'] . "','" . $postData['no_of_year'] . "','" . $postData['total_exp'] . "','" . $postData['monthly_income'] . "','".$apply_date."')");
	$id = mysql_insert_id();
    if ($query) {
      return $id;
    } else {
      return FALSE;
    }
  }

  public function manage_users_business($postData) {
      $user_dob = date('Y-m-d', strtotime($postData['userDOB']));
      $apply_date = date('Y-m-d H:i:s');
    $query = mysql_query("INSERT INTO manage_upload_data (cust_id,user_pan_card,userName,userGender,userDOB,userEmail,userCompleteResAddress,userCompletePerAddress,user_aadhar_card,loan_amount,loan_type,business_pan_no,entity_type,business_turnover,business_entity_name,business_address,reg_address,created_date) VALUES('" . $postData['cust_id'] . "','" . $postData['cust_pan_no'] . "','" . $postData['userName'] . "','" . $postData['userGender'] . "','" . $user_dob . "','" . $postData['userEmail'] . "','" . $postData['userCompleteResAddress'] . "','" . $postData['userCompletePerAddress'] . "','" . $postData['cust_aadhar_no'] . "','" . $postData['loan_amount'] . "','" . $postData['loan_type'] . "','" . $postData['business_pan_no'] . "','" . $postData['entity_type'] . "','" . $postData['business_turnover'] . "','" . $postData['business_entity_name'] . "','" . $postData['business_address'] . "','" . $postData['reg_address'] . "','".$apply_date."')");
	$id = mysql_insert_id();
    if ($query) {
      return $id;
    } else {
      return FALSE;
    }
  }

  public function city_exists($city_name) {

    $query = mysql_query("SELECT * FROM manage_city WHERE name LIKE '%$city_name%'");
    $result = mysql_fetch_assoc($query);

    if ($result > 0) {
      return $result;
    } else {
      return FALSE;
    }
  }

  public function add_new_city($city_name) {

    $query = mysql_query("INSERT INTO manage_city (name) VALUES('$city_name')");
    $query1 = mysql_query("SELECT * FROM manage_city WHERE name=$city_name");
    $row = mysql_num_rows($query1);
    $result = mysql_fetch_assoc($query1);

    if ($row > 0) {
      return $result;
    } else {
      return FALSE;
    }
  }

  public function manage_payu_data($postData) {

    $query = mysql_query("INSERT INTO manage_payu_company_info (ca_id,loan_request_number,rating,personal_email,vintage,operating_since,vintage_total,biz_address,biz_pincode,incorporation_date,biz_contact_no,office_ownership,biz_pan,sme_display_name,type_of_business,vat_tin,business_city,warehouse_ownership,mobile,house_ownership,partner_type,nature_of_business,sme_bank_acc_no,biz_kyc_doc,in_principal_approval_callback_url,post_approval_callback_url,disbursement_details) VALUES('" . $postData['ca_id'] . "','" . $postData['loan_request_number'] . "','" . $postData['rating'] . "','" . $postData['personal_email'] . "','" . $postData['vintage'] . "','" . $postData['operating_since'] . "','" . $postData['vintage_total'] . "','" . $postData['biz_address'] . "','" . $postData['biz_pincode'] . "','" . $postData['incorporation_date'] . "','" . $postData['biz_contact_no'] . "','" . $postData['office_ownership'] . "','" . $postData['biz_pan'] . "','" . $postData['sme_display_name'] . "','" . $postData['type_of_business'] . "','" . $postData['vat_tin'] . "','" . $postData['business_city'] . "','" . $postData['warehouse_ownership'] . "','" . $postData['mobile'] . "','" . $postData['house_ownership'] . "','" . $postData['partner_type'] . "','" . $postData['nature_of_business'] . "','" . $postData['sme_bank_acc_no'] . "','" . $postData['biz_kyc_doc'] . "','" . $postData['in_principal_approval_callback_url'][0] . "','" . $postData['post_approval_callback_url'][0] . "','" . $postData['disbursement_details'][0] . "')");

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function manage_payu_applicant_data($postData) {

    $query = mysql_query("INSERT INTO manage_payu_applicants (applicant_name,personal_email,mobile,pan_no,residenceownership,city,pincode,ownership_partner,res_address_partner,state,dob,aadhar_id) VALUES('" . $postData->applicant_name . "','" . $postData->personal_email . "','" . $postData->mobile . "','" . $postData->pan_no . "','" . $postData->residenceownership . "','" . $postData->city_key . "','" . $postData->pincode_key . "','" . $postData->ownership_partner . "','" . $postData->res_address_partner . "','" . $postData->state_key . "','" . $postData->dob . "','" . $postData->aadhaar_id . "')");

    $query1 = mysql_query("SELECT * FROM manage_payu_applicants ORDER BY user_id DESC");
    $result = mysql_fetch_assoc($query1);
    if ($result) {
      return $result;
    } else {
      return FALSE;
    }
  }

  public function get_payu_applicant($email, $mobile) {

    $query = mysql_query("SELECT * FROM manage_payu_applicants WHERE personal_email='" . $email . "' AND mobile='$mobile'");
    $result = mysql_fetch_assoc($query);
    if ($result > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function manage_last_tweleve_months_payment_sale($postData, $user_id) {

    for ($i = 0; $i < count($postData); $i++) {
      mysql_query("INSERT INTO last_twelve_months_payment_sale (period,amount,cust_id) VALUES('" . $postData[$i]->period . "','" . $postData[$i]->amount . "','" . $user_id . "')");
    }
  }

  public function getScores($userID) {
    $query = mysql_query("SELECT * FROM manage_socialScore WHERE custId='" . $userID . "'");
    $result = mysql_fetch_assoc($query);
    if ($result > 0) {
      return $result;
    } else {
      return $result;
    }
  }
  public function getTotalScores($userID) {
    $query = mysql_query("SELECT * FROM manage_SocialScore WHERE custId='" . $userID . "'");
    if(mysql_num_rows($query) > 0){
        $result = mysql_fetch_assoc($query);
        $total = $result['facebook']+$result['linkedin']+$result['twitter']+$result['google']+$result['pinterest']+$result['instagram'];
        return "$total";
    }else {
      return "";
    }
  }

  public function getSocialScore($postData) {

    $query = mysql_query("SELECT * FROM manage_SocialScore WHERE custId='" . $postData['custId'] . "'");
    $result = mysql_fetch_assoc($query);
    //print_r($result);exit;
    if ($result > 0) {
      if ($postData['score_for'] == 1) {
        $update_query = mysql_query("UPDATE manage_SocialScore SET facebook='" . $postData['score'] . "' WHERE custId='" . $postData['custId'] . "'");
      }
      if ($postData['score_for'] == 2) {
        $update_query = mysql_query("UPDATE manage_SocialScore SET linkedin='" . $postData['score'] . "' WHERE custId='" . $postData['custId'] . "'");
      }
      if ($postData['score_for'] == 3) {
        $update_query = mysql_query("UPDATE manage_SocialScore SET twitter='" . $postData['score'] . "' WHERE custId='" . $postData['custId'] . "'");
      }
      if ($postData['score_for'] == 4) {
        $update_query = mysql_query("UPDATE manage_SocialScore SET google='" . $postData['score'] . "' WHERE custId='" . $postData['custId'] . "'");
      }
      if ($postData['score_for'] == 5) {
        $update_query = mysql_query("UPDATE manage_SocialScore SET pinterest='" . $postData['score'] . "' WHERE custId='" . $postData['custId'] . "'");
      }
      if ($postData['score_for'] == 6) {
        $update_query = mysql_query("UPDATE manage_SocialScore SET instagram='" . $postData['score'] . "' WHERE custId='" . $postData['custId'] . "'");
      }
      $query = mysql_query("SELECT * FROM manage_SocialScore WHERE custId='" . $postData['custId'] . "'");
      $result = mysql_fetch_assoc($query);
      if ($result > 0) {
        return $result;
      } else {
        return 0;
      }
    } else {

      if ($postData['score_for'] == 1) {
        $query = mysql_query("INSERT INTO manage_SocialScore (facebook,custId,status) VALUES('" . $postData['score'] . "','" . $postData['custId'] . "','1')");
      }
      if ($postData['score_for'] == 2) {
        $query = mysql_query("INSERT INTO manage_SocialScore (linkedin,custId,status) VALUES('" . $postData['score'] . "','" . $postData['custId'] . "','1')");
      }
      if ($postData['score_for'] == 3) {
        $query = mysql_query("INSERT INTO manage_SocialScore (twitter,custId,status) VALUES('" . $postData['score'] . "','" . $postData['custId'] . "','1')");
      }
      if ($postData['score_for'] == 4) {
        $query = mysql_query("INSERT INTO manage_SocialScore (google,custId,status) VALUES('" . $postData['score'] . "','" . $postData['custId'] . "','1')");
      }
      if ($postData['score_for'] == 5) {
        $query = mysql_query("INSERT INTO manage_SocialScore (pinterest,custId,status) VALUES('" . $postData['score'] . "','" . $postData['custId'] . "','1')");
      }
      if ($postData['score_for'] == 6) {
        $query = mysql_query("INSERT INTO manage_SocialScore (instagram,custId,status) VALUES('" . $postData['score'] . "','" . $postData['custId'] . "','1')");
      }
      $query1 = mysql_query("SELECT * FROM manage_SocialScore WHERE custId='" . $postData['custId'] . "' AND status='1'");
      $result = mysql_fetch_assoc($query1);
      if ($result > 0) {
        return $result;
      } else {
        return 0;
      }
    }
  }
  
  function sendNotification($deviceId,$title,$message) {
//      return "Here";
        $fcmApiKey = 'AAAAMqAjgbw:APA91bFfQbpbTbk763dOF0sFN3ZEsoxjj99yNfjQ3KUrdMNyvQmWpem4uH1lGICVhmuqC3zi8pTjny3cfu06ua68zTzhkugsK_iA1IYgwzl5kBqkaLvP7GPWaatY58LcbZWYTxFN5z6b';
        $url = 'https://fcm.googleapis.com/fcm/send';//Google URL
        $curr_time = date('Y-m-d H:i:s');
        $fields = array(
            'to' => $deviceId,
            'priority' => 'high',
            'notification' => array(
                'title' => $title,
                'text' => $message
//                'sound' => 'default'
                )
        );
        
        $headers = array(
            'Authorization: key=' . $fcmApiKey,
            'Content-Type: application/json'
        );
        
        
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, $url );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode($fields));
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            return false;
        }else{
            return true;
        }
        curl_close($ch);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


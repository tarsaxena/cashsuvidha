<?php

include_once("connection.php");
include_once('credentials.php');
//session_start();

//$_SESSION['cibil_mem_id'] = $_SESSION['user_id'];


/**********************Form Data came from Mudra Home for getting the credit report from Equifax*************** */

$mudraQuery ="select * from mudrahome_admin";
$mudraRecord = mysqli_query($conn, $mudraQuery);

while($adminData = mysqli_fetch_assoc($mudraRecord)){
    $adminEmail = $adminData['admin_email'];
    $productKey = $adminData['product_key'];
    $adminKey = $adminData['admin_key'];
    //print_r($adminData);
 }
//exit();

$msg = array();

//Getting values from header.....
$headers = apache_request_headers();        

$headers['Product-Key'];

 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    /**********************Validating Key*********************************************** */
    if (!empty($_POST) && isset($_POST) && !empty($_POST['key']) && isset($_POST['key']) && $_POST['key'] != '') {

        if ($_POST['key'] != $adminKey) {
            $msg['key'] = "Your key does not match";
        }
        else{
            $key = mysqli_real_escape_string($conn , $_POST['key']);
        }
    }
    else{
        $msg['key'] = "Your key Field is empty";
    }
    /**********************Validating Product Key*********************************************** */
    if (!empty($headers['Product-Key']) && isset($headers['Product-Key']) && !empty($headers['Product-Key']) && isset($headers['Product-Key']) && $headers['Product-Key'] != '') {

        if ($headers['Product-Key'] != $headers['Product-Key']) {
            $msg['product_key'] = "Your key does not match";
        }
        else{
            $key = mysqli_real_escape_string($conn , $headers['Product-Key']);
        }
    }
    else{
        $msg['product_key'] = "Your key Field is empty";
    }
    /**********************Validating Email*********************************************** */
    if (!empty($_POST['email']) && isset($_POST['email']) && $_POST['email'] != '') {
        if ($_POST['email'] != $adminEmail) {
            $msg['email'] = "Your email does not exist";
        }
        else{
            $email = mysqli_real_escape_string($conn , $_POST['email']);
        }
    }
    else{
    
        $msg['email'] = "Your Email Field is Empty";
    }

    /**********************Validating Full Name*********************************************** */
    if (!empty($_POST['full_name']) && isset($_POST['full_name']) && $_POST['full_name'] != '') {

        $full_name = mysqli_real_escape_string($conn , $_POST['full_name']);
    } else {
        $msg['full_name'] = "Full Name is Missing";
    }

    /************************Validating First Name*********************************************** */
    if (!empty($_POST['first_name']) && isset($_POST['first_name']) && $_POST['first_name'] != '') {

        $first_name = mysqli_real_escape_string($conn , $_POST['first_name']);
    } else {
        $msg['first_name'] = "First Name is Missing";
    }

    /**********************Validating Middle Name*********************************************** */
    if (!empty($_POST['middle_name']) && isset($_POST['middle_name']) && $_POST['middle_name'] != '') {

        $middle_name = mysqli_real_escape_string($conn , $_POST['middle_name']);
    } else {

        $middle_name = '';
    }

    /**********************Validating Last Name*********************************************** */
    if (!empty($_POST['last_name']) && isset($_POST['last_name']) && $_POST['last_name'] != '') {

        $last_name = mysqli_real_escape_string($conn , $_POST['last_name']);
    } else {

        $last_name = '';
    }

    /**********************Validating Gender*********************************************** */
    if (!empty($_POST['gender']) && isset($_POST['gender']) && $_POST['gender'] != '') {

        $gender = mysqli_real_escape_string($conn , $_POST['gender']);
    } else {

        $msg['gender'] = "User Gender is Missing";
    }

    /**********************Validating City*********************************************** */
    if (!empty($_POST['city']) && isset($_POST['city']) && $_POST['city'] != '') {

        $city = mysqli_real_escape_string($conn , $_POST['city']);
    } else {

        $msg['city'] = "User City is Missing";
    }
    
    /**********************Validating State*********************************************** */
    if (!empty($_POST['state']) && isset($_POST['state']) && $_POST['state'] != '') {

        //$state = mysqli_real_escape_string($conn , $_POST['state']);
        $state = mysqli_real_escape_string($conn , $_POST['state']);
    } else {

        $msg['state'] = "User State is Missing";
    }
    
    
    /**********************Validating City*********************************************** */
    if (!empty($_POST['postal']) && isset($_POST['postal']) && $_POST['postal'] != '') {

        $postal = mysqli_real_escape_string($conn , $_POST['postal']);
    } else {

        $msg['postal'] = "User Postal is Missing";
    }
    
    /**********************Validating User Address*********************************************** */
    if (!empty($_POST['user_addr']) && isset($_POST['user_addr']) && $_POST['user_addr'] != '') {

        $inquiry_address1 = mysqli_real_escape_string($conn , $_POST['user_addr']);
    } else {

        $inquiry_address1 =' ';
    }
    
    /**********************Validating User Phone*********************************************** */
    if (!empty($_POST['phone']) && isset($_POST['phone']) && $_POST['phone'] != '') {

        $inquiry_phone = mysqli_real_escape_string($conn , $_POST['phone']);
    } else {

        $inquiry_phone =' ';
    }
    
    /**********************Validating User Date of Birth*********************************************** */
    if (!empty($_POST['dob']) && isset($_POST['dob']) && $_POST['dob'] != '') {

        $dob = mysqli_real_escape_string($conn , $_POST['dob']);
        
        //var_dump(validateDate($dob));
        
        if(!validateDate($dob)){
            
            $msg['dob'] = "Invalid Date of birth Format!";
        }
        
    } else {

        $msg['dob'] = "User Date of Birth is Missing!";
    }
    
    
    /**********************Validating User Inquiry Address*********************************************** */
    if (!empty($_POST['inquiry_address']) && isset($_POST['inquiry_address']) && $_POST['inquiry_address'] != '') {

        $inquiry_address = mysqli_real_escape_string($conn , $_POST['inquiry_address']);
    } else {

        $inquiry_address =' ';
    }
    /**********************Validating User Second Phone Number*********************************************** */
    if (!empty($_POST['phone_sec']) && isset($_POST['phone_sec']) && $_POST['phone_sec'] != '') {

        $inquiry_phones = mysqli_real_escape_string($conn , $_POST['phone_sec']);
    } else {

        $inquiry_phones =' ';
    }
    
    /**********************Validating User Marital Status*********************************************** */
    if (!empty($_POST['marital_status']) && isset($_POST['marital_status']) && $_POST['marital_status'] != '') {

        $marital_status = mysqli_real_escape_string($conn , $_POST['marital_status']);
    } else {

        $marital_status =' ';
    }
    
    /**********************Validating User National ID Card also called Adhar Card*********************************** */
    if (!empty($_POST['national_id_card']) && isset($_POST['national_id_card']) && $_POST['national_id_card'] != '') {

        $national_id_card = mysqli_real_escape_string($conn , $_POST['national_id_card']);
    } else {

        $national_id_card =' ';
    }
    
    /**********************Validating User Ration Card*********************************** */
    if (!empty($_POST['rationcard']) && isset($_POST['rationcard']) && $_POST['rationcard'] != '') {

        $rationcard = mysqli_real_escape_string($conn , $_POST['rationcard']);
    } else {

        $rationcard =' ';
    }
    
     /**********************Validating User PAN Card*********************************** */
    if (!empty($_POST['pan_id']) && isset($_POST['pan_id']) && $_POST['pan_id'] != '') {

        $pan_id = mysqli_real_escape_string($conn , $_POST['pan_id']);
    } else {

        $pan_id =' ';
    }
    
    /**********************Validating User Passpord ID*********************************** */
    if (!empty($_POST['passport_id']) && isset($_POST['passport_id']) && $_POST['passport_id'] != '') {

        $passport_id = mysqli_real_escape_string($conn , $_POST['passport_id']);
    } else {

        $passport_id =' ';
    }
    
    /**********************Validating Voter ID*********************************** */
    if (!empty($_POST['voter_id']) && isset($_POST['voter_id']) && $_POST['voter_id'] != '') {

        $voter_id = mysqli_real_escape_string($conn , $_POST['voter_id']);
    } else {

        $voter_id =' ';
    }
    
    /**********************Validating Driver License*********************************** */
    if (!empty($_POST['driverlicense']) && isset($_POST['driverlicense']) && $_POST['driverlicense'] != '') {

        $driverlicense = mysqli_real_escape_string($conn , $_POST['driverlicense']);
    } else {

        $driverlicense =' ';
    }
}
/**********************if statement ends here*********************************************** */
else{
    $message['status']= "'You are not allowed to use another method except POST method'";
    print_r($message);
    exit();
}

function validateDate($dob, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $dob);
    return $d && $d->format($format) == $dob;
}

    if (!empty($msg) && isset($msg)) {
    //echo $msg['errorMsg'];
    print_r($msg);
    
    return false;
}


//$data = array(
//    "full_name" => $full_name, 
//    "first_name" => $first_name, 
//    "middle_name" => $middle_name,
//    "last_name" => $last_name,
//    "gender" => $gender,
//    "state" => "DL",
//    "city" => $city,
//    "postal" => $postal,
//    "inquiry_address1" => $inquiry_address1,
//    "dob" => $dob,
//    "inquiry_address" => $inquiry_address,
//    "inquiry_phones" => $inquiry_phones,
//    "marital_status" => $marital_status,
//    "national_id_card" => $national_id_card,
//    "rationcard" => $rationcard,
//    "pan_id" => $pan_id,
//    "passport_id" => $passport_id,
//    "voter_id" => $voter_id,
//    "driverlicense" => $driverlicense
//    );
////echo "Data is completed";
//print_r($data);
//exit();
/******************************Form Data for getting the credit report from Equifax***************************** */

$soap_request = "<?xml version='1.0' encoding='UTF-8'?>";

$soap_request .= '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns="http://services.equifax.com/eport/ws/schemas/1.0">';
$soap_request .= "  <soapenv:Header/>";
$soap_request .= "    <soapenv:Body>";
$soap_request .= "      <ns:InquiryRequest>";
$soap_request .= "        <ns:RequestHeader>";
$soap_request .= "          <ns:CustomerId>" . $customer_id . "</ns:CustomerId>";
$soap_request .= "          <ns:UserId>" . $user_id . "</ns:UserId>";
$soap_request .= "          <ns:Password>" . $password . "</ns:Password>";
$soap_request .= "          <ns:MemberNumber>" . $member_number . "</ns:MemberNumber>";
$soap_request .= "          <ns:SecurityCode>" . $sec_digit . "</ns:SecurityCode>";
$soap_request .= "          <ns:ProductCode>" . $product . "</ns:ProductCode>";
$soap_request .= "          <ns:ProductVersion>1.0</ns:ProductVersion>";
$soap_request .= "          <ns:ReportFormat>JSON</ns:ReportFormat>";
$soap_request .= "          <ns:CustRefField>" . $cust_ref_field . "</ns:CustRefField>";
$soap_request .= "        </ns:RequestHeader>";
$soap_request .= "        <ns:InquiryCommonAccountDetails>";
$soap_request .= '          <ns:InquiryAccount seq="1">';
$soap_request .= "            <ns:AccountNumber>" . $account_number . "</ns:AccountNumber>";
$soap_request .= "          </ns:InquiryAccount>";
$soap_request .= "        </ns:InquiryCommonAccountDetails>";
$soap_request .= "        <ns:RequestBody>";
$soap_request .= "           <ns:InquiryPurpose>02</ns:InquiryPurpose>";
$soap_request .= "           <ns:FullName>" . $full_name . "</ns:FullName>";
$soap_request .= "           <ns:FirstName>" . $first_name . "</ns:FirstName>";
$soap_request .= "           <ns:LastName>" . $last_name . "</ns:LastName>";
$soap_request .= "           <ns:MiddleName>" . $middle_name . "</ns:MiddleName>";
$soap_request .= "           <ns:InquiryAddresses>";
$soap_request .= '             <ns:InquiryAddress seq="1">';
$soap_request .= "                <ns:AddressLine>" . $inquiry_address1 . "</ns:AddressLine>";
$soap_request .= "                <ns:State>" . $state . "</ns:State>";
$soap_request .= "                <ns:City>" . $city . "</ns:City>";
$soap_request .= "                <ns:Postal>" . $postal . "</ns:Postal>";
$soap_request .= "             </ns:InquiryAddress>";
$soap_request .= '             <ns:InquiryAddress seq="2">';
$soap_request .= "                <ns:State>" . $state . "</ns:State>";
$soap_request .= "                <ns:City>" . $city . "</ns:City>";
$soap_request .= "                <ns:Postal>" . $postal . "</ns:Postal>";
$soap_request .= "             </ns:InquiryAddress>";
$soap_request .= '             <ns:InquiryAddress seq="3">';
$soap_request .= "                <ns:AddressLine>" . $inquiry_address . "</ns:AddressLine>";
$soap_request .= "                <ns:State>" . $state . "</ns:State>";
$soap_request .= "                <ns:City>" . $city . "</ns:City>";
$soap_request .= "                <ns:Postal>" . $postal . "</ns:Postal>";
$soap_request .= "             </ns:InquiryAddress>";
$soap_request .= "           </ns:InquiryAddresses>";
$soap_request .= "           <ns:InquiryPhones>";
$soap_request .= '              <ns:InquiryPhone seq="1">';
$soap_request .= "                <ns:Number>" . $inquiry_phones . "</ns:Number>";
$soap_request .= "              </ns:InquiryPhone>";
$soap_request .= "           </ns:InquiryPhones>";
$soap_request .= "           <ns:InquiryPhones>";
$soap_request .= '              <ns:InquiryPhone seq="2">';
$soap_request .= "                <ns:Number>" . $inquiry_phones . "</ns:Number>";
$soap_request .= "              </ns:InquiryPhone>";
$soap_request .= "           </ns:InquiryPhones>";
$soap_request .= "           <ns:InquiryPhones>";
$soap_request .= '              <ns:InquiryPhone seq="3">';
$soap_request .= "                <ns:Number>" . $inquiry_phones . "</ns:Number>";
$soap_request .= "              </ns:InquiryPhone>";
$soap_request .= "           </ns:InquiryPhones>";
$soap_request .= "           <ns:DOB>" . $dob . "</ns:DOB>";
$soap_request .= "           <ns:MaritalStatus>" . $marital_status . "</ns:MaritalStatus>";
$soap_request .= "           <ns:Gender>" . $gender . "</ns:Gender>";
$soap_request .= "           <ns:NationalIdCard>" . $national_id_card . "</ns:NationalIdCard>";
$soap_request .= "           <ns:RationCard>" . $rationcard . "</ns:RationCard>";
$soap_request .= "           <ns:PANId>" . $pan_id . "</ns:PANId>";
$soap_request .= "           <ns:PassportId>" . $passport_id . "</ns:PassportId>";
$soap_request .= "           <ns:VoterId>" . $voter_id . "</ns:VoterId>";
$soap_request .= "           <ns:DriverLicense>" . $driverlicense . "</ns:DriverLicense>";
$soap_request .= "           <ns:MobilePhone>" . $inquiry_phone . "</ns:MobilePhone>";
$soap_request .= "        </ns:RequestBody>";
$soap_request .= "      </ns:InquiryRequest>";
$soap_request .= "  </soapenv:Body>";
$soap_request .= "</soapenv:Envelope>";

//exit();

$headers_data = array(
    "Content-type: text/xml;charset=utf-8",
    "Accept: text/xml",
    "Cache-Control: no-cache",
    "SOAPAction: http://services.equifax.com/CreditReportWS/CreditReportWSInquiry/1.0",
    "Pragma: no-cache",
    "Content-length: " . strlen($soap_request),
); //SOAPAction: your op URL

$url = "https://ists.equifax.co.in/creditreportws/CreditReportWSInquiry/v1.0";

// PHP cURL  for https connection with auth
$ch = curl_init();
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $soap_request); // the SOAP request
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers_data);

// converting
$response = curl_exec($ch);
curl_close($ch);

$xmlString = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $response);

$xml_result = SimpleXML_Load_String($xmlString);
//$json_result = json_encode($xml_result);

//$result_xml = (json_decode($json_result));


//print_r($result_xml);
//exit();
//echo "<pre>";

if(json_encode($xml_result) !='NULL'){

    header('Content-type: application/json');
    echo json_encode($xml_result);
    exit();
}



//echo $_SESSION['cibil_mem_id'];
//exit();
?>
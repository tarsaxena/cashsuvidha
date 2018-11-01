<?
require_once("includes/function/autoload.php");
$mem_user=new Manage_Member();

if($_POST['submit']=='SendEnquiry'){
$messageval = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject2 = $_POST['subject'];
$admin_det =mysql_fetch_array(mysql_query("SELECT * FROM ".ADMIN_TBL." WHERE `admin_id` = '1'"));
$to="reach@cashsuvidha.com";
//$to=$admin_det['admin_email'];
$subject = "New  Contact Us Request";
  $result2 = mysql_query("SELECT * FROM ".MAIL_SETTING." WHERE `id` = '5'");
  $query = mysql_fetch_array($result2);

  $LOGO=BASE_URL_SITE."assets/images/logo-web.png";
  $query['message']=str_replace("[LOGO]",$LOGO,$query['message']);
  $query['message']=str_replace("[username]",$admin_det['admin_name'],$query['message']);
  $query['message']=str_replace("[user_id]",$name,$query['message']);
  $query['message']=str_replace("[email]",$email,$query['message']);
  $query['message']=str_replace("[Mobile]",$phone,$query['message']);
  $query['message']=str_replace("[subject]",$subject2,$query['message']);
  $query['message']=str_replace("[Message]",$messageval,$query['message']);
  $message = htmlspecialchars_decode(stripslashes($query['message'])) ;
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "FROM: Cash Suvidha <reach@cashsuvidha.com>\r\n";
 @mail($to,$subject,$message,$headers);
echo '<script language="javascript">';
echo 'alert("Thank for send contact us... We will contact you shortly.")';
echo '</script>';
}
?>
<?php include 'header.php'; ?>
<!--<script type='text/javascript' src="<?=$basrURL?>assets/js/extra/validation.js"></script>-->
 <script src="assets/js/extra/contact_us.js"></script>
<body>

<!-- header start -->
<?php include 'top.php'; ?>
<!-- header start -->

<div class="item no-margins" >
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28007.832706477144!2d77.30731291154417!3d28.66034480366689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb6b69cc5cab%3A0xd8a4443d6356f641!2sCash+Suvidha!5e0!3m2!1sen!2sin!4v1469606181308" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  <div class="container"> </div>
  <!-- /.container --> 
  
</div>
<div class="item common-inner-sec">
  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        <h2 class="section-title-white">Contact Us</h2>
        <h3 class="section-subtitle-white">Need assistance? You can also reach us by filling the form below.</h3>
      </div>
      <!-- /col-md-8 --> 
      
    </div>
    <!-- /.row --> 
    
  </div>
  <!-- /.container --> 
  
</div>

<style>
.valid-asr{ font-size:16px !important; color:#F63; margin-left:2px;}
</style>

<div class="item contact-secion">
  <div class="container no-padding-lftrft">
    <div class="col-md-7 col-sm-7 cus-form">
      <form name="contactUsForm" id="contactUsForm" action="" method="post" autocomplete="off" onSubmit="return member_contactUs()">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="Name">Name <span class="valid-asr">*</span></label>
              <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text"  name="name" id="m_name" class="form-control" maxlength="20"  onkeyup="if(!isCharter(this.value)) this.value='';">
              </div>
              <span id="name_error" style="color: red; display: none;"></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="EmailAddress">Email Address <span class="valid-asr">*</span></label>
              <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="email"  name="email" id="email"  class="form-control" autocomplete="off">

              </div>
              <span id="email_id__error" style="color: red; display: none;"></span>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="InputSubject">Mobile <span class="valid-asr">*</span></label>
              <div class="input-group"> <span id="basic-addon4" class="input-group-addon"><i class="fa fa-mobile"></i></span>
                <input type="phone"  id="mobile" name="phone"  class="form-control" maxlength="10" onKeyUp="if(!isNum(this.value)) this.value='';" autocomplete="off">
              </div>
               <span id="con_phone_error" style="color: red; display: none;"></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="InputSubject">Subject <span class="valid-asr">*</span></label>
              <div class="input-group"> <span id="basic-addon4" class="input-group-addon"><i class="fa fa-edit"></i></span>
                <input type="text" id="subject" name="subject"  class="form-control" autocomplete="off" maxlength="20">
              </div>
              <span id="subject_error" style="color: red; display: none;"></span>
            </div>
          </div>
               <div class="clearfix"></div> 

          <div class="col-md-12">
            <div class="form-group">
              <label for="Message">Message <span class="valid-asr">*</span></label>
              <div class="input-group"> <span id="basic-addon5" class="input-group-addon" style="height:134px;"><i class="fa fa-comments-o"></i></span>
                <textarea  name="message" id="message" rows="6" class="form-control" autocomplete="off" style="height:134px; margin:0px;"></textarea>
              </div>
              <span id="message_error" style="color: red; display: none;"></span>
            </div>
          </div>
          <button type="submit" value="SendEnquiry" name="submit" class="btn custom-sub-btn" ><i class="fa fa-send"></i> Send</button>
          <a href="contact.php"><button type="reset" name="reset" class="btn custom-sub-btn custom-cancel-btn"><i class="fa fa-refresh"></i> Refresh</button></a>
        </div>
      </form>
    </div>
    <!-- /.container -->
    
    
    <div class="col-md-1"></div>
   
    <div itemscope="address" itemtype="http://schema.org/PostalAddress" class="col-md-4 col-sm-4">
        <p class="LargeBlack"><strong>Mailing Address</strong></p><br />
        <p itemprop="name"><strong>Cash Suvidha</strong></p>
        <p itemprop="streetAddress" class="fa fa-map-marker"> 117, Second Floor, Ram Vihar</p>
        <p itemprop="addressLocality" class="fa fa-map-marker"> New Delhi</p>
        <p itemprop="postalCode" class="fa fa-map-marker"> 110092</p><br />
        <p class="fa fa-mobile"> 1800 120 4847</p><br />
        <p itemprop="telephone" class="fa fa-phone"> 011- 49576046</p><br />
        <p itemprop="email" class="fa fa-envelope-o"> <a href="mailto:reach@cashsuvidha.com" target="_blank">reach@cashsuvidha.com</a></p>
        <div class="clearfix"></div>
    </div>
    
    
  </div>
</div>
<hr>
<script>
    $(document).ready(function () {
        $("#contactUsForm").validationEngine({
            scroll: false,
        });
    });
</script>
<?php include 'bottom.php'; ?>
<?php include 'footer.php'; ?>

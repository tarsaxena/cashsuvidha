<?
  require_once('includes/function/autoload.php');
  $menObj = new Manage_Member(); 
  error_reporting(E_ALL);
?>
  <script src="assets/js/extra/registration.js"></script>
 <style>
 .clear{ clear: both;}
 </style>
<div class="container-fluid">
  <div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form name="userLogin" id="userLogin" class="" onSubmit="javascript: return ForgetPassword(this);">

      <div class="modal-dialog" style="max-width:500px !important;">

        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myModalLabel" class="modal-title">Forgot Password</h4>
          </div>

          <div class="modal-body">
          <div id="forsuccessmess" style="padding-left: 1%"> </div>
            <div class="control-group"></div>
            <div class="row" style="margin-top:8px">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="Password">Enter your Email</label>
                  <div class="input-group"> <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="text"  name="email" id="m__emailID" class="form-control" >
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12"> <a href="javascript: void();" style="float:right;" onclick="$('#pwdModal').modal('hide');
                                            $('#myLogin').modal('show');" data-toggle="modal">Back to Login</a> </div>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Submit" name="submit" />
            <input  type="button"  data-dismiss="modal" aria-hidden="true"  class="btn btn-default" value="Cancel"/>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Forgot passpopup --> 

<!-- Login Model popup -->
<div class="modal fade  custom-modal-pop" id="myLogin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="col-lg-4 cust-pop-lft-sec hidden-sm hidden-xs hidden-md">
        <h5>&nbsp; </h5>
        <div class="col-md-12 left-info-icon"> <span class="icon"><i class="fa fa-credit-card"></i></span>
          <h5>Your Account</h5>
        </div>
        <div class="col-md-12 left-info-icon"> <span class="icon"><i class="fa fa-credit-card"></i></span>
          <h5>Make a New loan Request</h5>
        </div>
        <div class="col-md-12 left-info-icon"> <span class="icon"><i class="fa fa-file-text-o"></i></span>
          <h5>Extend / Foreclose Loan account</h5>
        </div>
		</div>
      <div class="col-lg-8 contact-secion">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">Member Login </h4>
        </div>
        <div class="modal-body">
          <div class="col-md-12 col-sm-12 cus-form" style="padding:0px; margin-bottom:25px;">
            <form class="form-horizontal"    name="log_form" id="log_form"  autocomplete="off" onsubmit="javascript: return LoginUser(this);">
            <div id="invlaidUserid" style="padding-left: 1%"> </div>
            <div class="row">
                <div class="col-md-12" style="margin:15px 0px; text-align:center;"> <b><!--Already member login here--></b> </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="EmailAddress">Email Address or Phone Number</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                      <input type="text"  placeholder="Email Address or Phone Number" name="email" id="m__email_id" class="form-control" >
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="Password">Password</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="password"  placeholder="Enter Password" name="password" id="m__Password" class="form-control" >
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <input type="hidden" name="homeLogin" id="homeLogin" value="homeLogin"/>
                <button type="submit" name="submit" class="btn login-btn">Login </button>&nbsp;&nbsp;
				
				
				<a href="facebook/fbconfig.php" style="color:blue;">Login With Facebook</a>&nbsp;&nbsp;
				
				
                <!--<a href="members/index.php" class="btn login-btn">Login</a> -->
                Forgot <a href="#" onclick="$('#myLogin').modal('hide');
                                          $('#pwdModal').modal('show');" style="color : blue ;"> Password? &nbsp;&nbsp;</a><br>
				 
                </br>
                <hr>
                <div class="col-md-12 " style="margin:20px 0px; text-align:center;"> New to Cash Suvidha? <a href="#" onclick="$('#myLogin').modal('hide');
                                            $('#myModal').modal('show');">SIGNUP</a> </div>
                <div class="row"> * Loan @ sole discretion of Cash Suvidha, A trade name of Usha Financial Services Pvt. Ltd. </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!-- Login Model poup End -->



<!-- Model Apply poup -->
<div class="modal fade bs-example-modal-lg custom-modal-pop" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="col-lg-12 contact-secion">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">Sign up with us to get started</h4>
        </div>
         <div class="modal-body popup-m-t-30" style="padding:10px !important;display:none;" id="showregisterForm" >
          <div class="col-md-12 col-sm-12 cus-form" style="margin-bottom:25px; ">
           <div  style="padding-left:0; font-size: 24px;"> <b>Thank You!</b></div>
           <div  style=" color: rgb(0, 130, 205); font-weight: 300 !important;padding-left: 0px; padding-top: 40px; padding-bottom: 15px;"> <b>Your registration was successful</b></div>
           <div  style="padding-left: 0;margin-bottom : 20px;"> Please check your <strong>SMS</strong> Inbox or <strong>Email</strong> Inbox (<strong>or Spam</strong> Folder) for the application link.</div>
           <div  style="padding-left: 0;">Click on the <strong>Begin Application</strong> button in the <strong>Email</strong> or Verification Link in <strong>SMS</strong> to start your application process.</div>
          </div>
          <p>&nbsp;&nbsp;&nbsp;</p>
          <p>&nbsp;&nbsp;&nbsp;</p>
          <p>&nbsp;&nbsp;&nbsp;</p>
          <p>&nbsp;&nbsp;&nbsp;</p>
          <p>&nbsp;&nbsp;&nbsp;</p>
          </div>

        <div class="modal-body popup-m-t-30" style="padding:10px !important;" id="registerForm">
          <div class="col-md-12 col-sm-12 cus-form" style="margin-bottom:25px; ">

            <form class="form-horizontal" name="reg_form" id="reg_form" method="post" autocomplete="off" onSubmit="return member_signup()">
              <div id="successmess" style="padding-left: 1%"> </div>
              <input type="hidden" name="registration_form" id="m__registration_form" value="registration_form" />
             <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group" >
                    <label for="Name">FULL NAME</label>
                    <div class="input-group" style="width: 100% !important;">
                    <!--<span class="input-group-addon"><i class="fa fa-user"></i></span>   -->
                      <input type="text"  placeholder="" name="fname" id="m__full_name" class="form-control m-b" onkeyup="if(!isCharter(this.value)) this.value='';">
                        <span id="user_name_error" style="color: red; display: none;"></span>
                     </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="EmailAddress">EMAIL ADDRESS</label>
                    <div class="input-group" style="width: 100% !important;">
                      <input type="text"  name="email" id="m__email" class="form-control" >
                      <span id="email_error" style="color: red; display: none;"></span>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group" >
                    <label for="">PHONE NUMBER</label>
                    <div class="input-group" style="width: 100% !important;">
                      <input type="text"  name="phone" id="m__phone" class="form-control" maxlength="10" onkeyup="if(!isNum(this.value)) this.value='';" >
                    <span id="phone_error" style="color: red; display: none;"></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group" >
                    <label for="">CITY</label>
                    <div class="input-group" style="width: 100% !important;">
                     <?php //echo getDropDownType(MANAGE_CITY_TBL,'m__city','city','Select city')?>
                     <span id="city_error" style="color: red; display: none;"></span>
                    </div>
                  </div>
                </div>
                
                <div class="clearfix"></div>
              </div>



              
              <div>
              <input type="checkbox" name="about_info" id="about_info" checked="checked" />   The information provided above is correct and I authorize a Cash Suvidha Customer Service Representative to contact me.
              <span id="check_error" style="color: red; display: none;"></span>
               </div>
              <div style="margin-top:15px;"><button type="submit" name="submit" class="btn login-btn"> Register Now </button></div>
              
              <div class="row">
                <div class="col-md-12 " style="margin:20px 0px; text-align:left;"> Already a member with us? <a href="#" onclick="$('#myModal').modal('hide');
                                            $('#myLogin').modal('show');">Login</a> </div>
              </div>
            </form>
          </div>
          
        </div>




      </div>
    </div>
  </div>
</div>
<!-- Model poup --> 


<!-- Model1 Apply poup -->
<div class="modal fade bs-example-modal-lg custom-modal-pop" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="col-lg-12 contact-secion">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel">Sign up with us to get started</h4>
        </div>
         <div class="modal-body popup-m-t-30" style="padding:10px !important;display:none;" id="showregisterForm" >
          <div class="col-md-12 col-sm-12 cus-form" style="margin-bottom:25px; ">
           <div  style="padding-left:0; font-size: 24px;"> <b>Thank You!</b></div>
           <div  style=" color: rgb(0, 130, 205); font-weight: 300 !important;padding-left: 0px; padding-top: 40px; padding-bottom: 15px;"> <b>Your registration was successful</b></div>
           <div  style="padding-left: 0;margin-bottom : 20px;"> Please check your <strong>SMS</strong> Inbox or <strong>Email</strong> Inbox (<strong>or Spam</strong> Folder) for the application link.</div>
           <div  style="padding-left: 0;">Click on the <strong>Begin Application</strong> button in the <strong>Email</strong> or Verification Link in <strong>SMS</strong> to start your application process.</div>
          </div>
          <p>&nbsp;&nbsp;&nbsp;</p>
          <p>&nbsp;&nbsp;&nbsp;</p>
          <p>&nbsp;&nbsp;&nbsp;</p>
          <p>&nbsp;&nbsp;&nbsp;</p>
          <p>&nbsp;&nbsp;&nbsp;</p>
          </div>

        <div class="modal-body popup-m-t-30" style="padding:10px !important;" id="registerForm">
          <div class="col-md-12 col-sm-12 cus-form" style="margin-bottom:25px; ">

            <form class="form-horizontal" name="reg_form" id="reg_form" method="post" autocomplete="off" onSubmit="return member_signup()">
              <div id="successmess" style="padding-left: 1%"> </div>
              <input type="hidden" name="registration_form" id="m__registration_form" value="registration_form" />
             <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group" >
                    <label for="Name">USER NAME</label>
                    <div class="input-group" style="width: 100% !important;">
                    <!--<span class="input-group-addon"><i class="fa fa-user"></i></span>   -->
                      <input type="text"  placeholder="" name="fname" id="m__full_name" class="form-control m-b" onkeyup="if(!isCharter(this.value)) this.value='';">
                        <span id="user_name_error" style="color: red; display: none;"></span>
                     </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="EmailAddress">PASSWORD</label>
                    <div class="input-group" style="width: 100% !important;">
                      <input type="password"  name="pass" id="pass" class="form-control" >
                      <span id="email_error" style="color: red; display: none;"></span>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group" >
                    <label for="">PHONE NUMBER</label>
                    <div class="input-group" style="width: 100% !important;">
                      <input type="text"  name="phone" id="m__phone" class="form-control" maxlength="10" onkeyup="if(!isNum(this.value)) this.value='';" >
                    <span id="phone_error" style="color: red; display: none;"></span>
                    </div>
                  </div>
                </div> */ -->
                <div class="col-sm-12 col-md-6 col-lg-6" sty>
                  <div class="form-group" >
                    <label for="">Select anyone social media!</label>
                    <div class="input-group" style="width: 100% !important;">
                     <!--<?php //echo getDropDownType(MANAGE_CITY_TBL,'m__city','city','Select city')?> -->
<!--					 <select name="social" value="select">
					 <option value="facebook">FACEBOOK</option>
					 <option value="twitter">TWITTER</option>
					 <option value="linkedin">LINKEDIN</option>
					 <option value="instagram">INSTAGRAM</option>
					 <option value="pinterest">PINTEREST</option>
					 </select>-->
                     <span id="city_error" style="color: red; display: none;"></span>
                    </div>
                  </div>
                </div>
                
                <div class="clearfix"></div>
              </div>

              <div>
              <input type="checkbox" name="about_info" id="about_info" checked="checked" />   The information provided above is correct and I authorize a Cash Suvidha Customer Service Representative to contact me.
              <span id="check_error" style="color: red; display: none;"></span>
               </div>
              <div style="margin-top:15px;"><button type="submit" name="submit" class="btn login-btn"> Submit </button></div>
              
              <div class="row">
                <div class="col-md-12 " style="margin:20px 0px; text-align:left;"> Already a member with us? <a href="#" onclick="$('#myModal').modal('hide');
                                            $('#myLogin').modal('show');">Login</a> </div>
              </div>
            </form>
          </div>
          
        </div>




      </div>
    </div>
  </div>
</div>
<!-- Model1 poup --> 


<!-- Model Know Suvidha Score -->
<div class="modal fade bs-example-modal-lg custom-modal-pop" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="text-align:center; width:60%; margin:auto; margin-top:120px;">
      <div class="col-lg-12 contact-section">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="exampleModalLabel"><b>Know Your Suvidha Score Here</b></h4>
        </div>
             <div class="row" style="margin-top:20px; margin-bottom:30px;">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <!--<a href="facebook/index.php"><img src='hybridauth/facebook.png'></img></a> <br><br>-->
                  </div>
                </div>
				<div class="col-sm-12 col-md-12 col-lg-12" >
                  <div class="form-group">
                   <div class="divider">
                     <hr class="left" />OR<hr class="right" />
                    </div>
                  </div>
                </div>
               <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <!--<a href="linkedin/index.php"><img src='hybridauth/linkedin.png'></img></a> <br><br>-->
                  </div>
                </div> 
				
				<div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <div class="divider">
                     <hr class="left" />OR<hr class="right" />
                    </div>
                  </div>
                </div> 
				<div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <!--<a href="google/index.php"><img src='hybridauth/google+.png'></img></a> <br><br>-->
                  </div>
                </div> 
                
				<div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <div class="divider">
                     <hr class="left" />OR<hr class="right" />
                    </div>
                  </div>
                </div>
               
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" >
                    <!--<a href="twitter/index.php"><img src='hybridauth/twitter.png'></img></a><br><br>-->
                  </div>
				  </div>
				  
				  <div class="col-sm-12 col-md-12 col-lg-12">
                   <div class="form-group">
                    <div class="divider">
                     <hr class="left" />OR<hr class="right" />
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" >
                    <!--<a href="pinterest/index.php"><img src='hybridauth/pinterest.png'></img></a></br>-->
                </div>
              </div>
			  <!--
			  <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:15px;">
                  <div class="form-group">
                    <div class="divider">
                     <hr class="left" />OR<hr class="right" />
                    </div>
                  </div>
                </div> 
				<div class="col-sm-12 col-md-12 col-lg-12" >
				  <div class="form-group" >
                    <a href="hybridauth/login-with.php?provider=Instagram"><img src='hybridauth/instagram.png'></img></a></br>
                 </div>  
              </div>
			  
			  </div> 
			  -->
			  </div>

      </div>
    </div>
  </div>
<!-- Model poup --> 

  <script>
function LoginUser(){

    var type="loginvalue";
    var email=document.getElementById("m__email_id").value;
    var password=document.getElementById("m__Password").value;

    if(email!='' && email.length>4 && password!=''){
    $.post("pass.php?action=registration&type="+type,{userid:email,pass:password},function(data){
      var res = data.split("@@@@@");
    if(res[0]==1){
    window.location.href=res[1];
    }
    else{
    document.getElementById("invlaidUserid").innerHTML  = '<p class="message invalid" id="errordiv">&nbsp;&nbsp;&nbsp;Invalid Email id OR Password!!!  <span class="close" onclick=hideErrorDiv()>X</span></p>';
    }
    });
    } else {
    document.getElementById("invlaidUserid").innerHTML  = '<p class="message invalid" id="errordiv">Please fill email address and password.<span class="close" onclick=hideErrorDiv()>X</span></p>';
    }
    return false;
    }



function ForgetPassword(){

  var type="forgetUserPass";

    var email=document.getElementById("m__emailID").value;

    if(email!='' && email.length>9){
    $.post("pass.php?action=registration&type="+type,{userid:email},function(data){
    if(data==1){
    document.getElementById("forsuccessmess").innerHTML  = '<p class="message valid" id="errordiv">Password has been sent to your registered email id and mobile no<span class="close" onclick=hideErrorDiv()>X</span></p>';
    }
    else{
    document.getElementById("forsuccessmess").innerHTML  = '<p class="message invalid" id="errordiv">This email id is not exist.<span class="close" onclick=hideErrorDiv()>X</span></p>';
    }
    });
    } else {
    document.getElementById("forsuccessmess").innerHTML  = '<p class="message invalid" id="errordiv">Please fill email id.<span class="close" onclick=hideErrorDiv()>X</span></p>';
    }
   return false;

}
    </script>
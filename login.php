<?
  require_once('includes/function/autoload.php');
  $memObj = new Manage_Member();
  if($_POST['submit']=="submit"){
  $memObj->userLogin($_POST);
  }
//$pageDet=getTableId(MANAGE_PAGE_CONTENT_TBL,4,'pageid','*');

?>

<?php include 'header.php'; ?>
<script type='text/javascript' src="<?=$basrURL?>assets/js/extra/validation.js"></script>
<body>

<!-- header start -->
<?php include 'top.php'; ?>
<!-- header start -->

<div class="item no-margins" >

  <div class="container"> </div>
  <!-- /.container --> 
  
</div>
<div class="item common-inner-sec">
  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        <h3 class="section-title-white">Login To Cash Suvidha Account</h3>

      </div>
      <!-- /col-md-8 --> 
      
    </div>
    <!-- /.row --> 
    
  </div>
  <!-- /.container --> 
  
</div>
<div class="item contact-secion">
  <div class="container no-padding-lftrft" style="max-width:450px; margin:0 auto; padding:0 10px;">
    <div class="cus-form">

      <form  name="login_form" id="login_form" action="" method="post"  autocomplete="off" >
       <?=$_SESSION['LENDER_MSG'];unset($_SESSION['LENDER_MSG']);?>
        <div class="row">
       
          <div class="col-md-12">
            <div class="form-group">
              <label for="Name">Email Address or Phone Number</label>
              <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text"  name="email" id="memail" class="form-control" placeholder="Email Address or Phone Number" autocomplete="off" required>
              </div>
            </div>
          </div>
         </div>
		 
         
          <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="EmailAddress">Password</label>
              <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="password"  name="password" id="mpassword" placeholder="Enter Password" class="form-control" autocomplete="off" required>
              </div>
            </div>
          </div>
		  
		  
		  
		  
		  
		    
		  <?php
		  if (isset($_SESSION['First_Login']))
		  {
			  if ($_SESSION['First_Login']==true)
			  {
		  ?>
		  
		  
			  <div class="col-md-12">
            <div class="form-group">
              <label for="EmailAddress">New Password</label>
              <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="password"  name="new_password" id="new_password" class="form-control" autocomplete="off" required>
              </div>
            </div>
          </div>
		  
		  <div class="col-md-12">
            <div class="form-group">
              <label for="EmailAddress">Confirm New Password</label>
              <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="password" name="conf_new_password" id="conf_new_password" class="form-control" autocomplete="off" required>
              </div>
            </div>
          </div>
		
			<?php
		  }
		  }
		  ?>

          <div class="clearfix"></div>

          <button type="submit" name="submit" value="submit" class="btn login-btn" ><i class="fa fa-send"></i> Login</button>

        </div>
         
      </form>
	  
	  <!--- form validation ----------->
	    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
		
		  <script type='text/javascript'>
		  $("#login_form").validate({
			rules: {
               new_password: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   conf_new_password: { 
                    equalTo: "#new_password",
					required: true,
                     minlength: 6,
                     maxlength: 10
               }
           },
		messages:{
         new_password: { 
                 required:"New Password and Confirm Password must be the same"
               }
			}
			
			
			});

		  
		  /*
		  $("#login_form").validate({
           rules: {
               new_password: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   conf_new_password: { 
                    equalTo: "#new_password",
                     minlength: 6,
                     maxlength: 10
               }
           },
		messages:{
         new_password: { 
                 required:"New Password and Confirm Password are required and they should be same"
               }
			}
			});*/
		  </script>
	  <!-- form validation ends here -------->
	  
	  
	  
    </div>
    <!-- /.container -->
    

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

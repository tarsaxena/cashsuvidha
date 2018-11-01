
<?php include 'header.php'; ?>
<script src="assets/js/feedback.js"></script>
<link rel="stylesheet" href="assets/css/feedback.css" /> 
<body>
<!-- header start -->
<?php include 'top.php'; ?>
<!-- header start -->
<div id="feedback">
		<div id="feedback-form" style='display:none;' class="col-xs-4 col-md-4 panel panel-default">
                    <h3 align="center">Enquire Now</h3>
			<form method="POST" action="/feedback" class="form panel-body" role="form">
				<div class="form-group">
					<input class="form-control" name="email" autofocus placeholder="Enter Your Name" type="email" />
				</div>
				<div class="form-group">
					<input class="form-control" name="email" autofocus placeholder="Enter Your Phone" type="email" />
				</div>
				<div class="form-group">
					<input class="form-control" name="email" autofocus placeholder="Enter Your Email" type="email" />
				</div>
				
				<button class="btn btn-primary pull-right" type="submit">Send</button>
			</form>
		</div>
		<div id="feedback-tab" style="float:right;">Enquire Now</div>
	</div>

 <!--<img src="assets/images/borrow-banner.jpg" class="img-responsive" alt="">--> 
<!--banner section -->


    <div class="container">
        <div class="row">
            <section class="margin-t-80 col-md-10 col-md-offset-1">
                <h2 class="h2-text-center" style="color : #ff0000 ;">OOPS !!! 
				<br /> 404 Error </h2>
                <p class="para_desc_left font-18px" style="text-align:center !important;"> <strong>Something gone wrong or the page not found.</strong> 
				<br />Please keep browsing our site for other available options..</p>
            </section>
        </div>
    </div>    
  <p>&nbsp;  </p>
  <div class="text-center get_start_div" id="get_start_div">
        <h2 class="h2-text-center">Get a Business Loan in 3 Days </h2>
        <a class="outlined-button" href="https://www.cashsuvidha.com/applyNow/" data-toggle="modal" data-target="#">APPLY NOW</a>
    </div>
<?php include 'testimonials.php'; ?>

<hr>
<?php include 'strip.php'; ?>

<?php include 'bottom.php'; ?>
<?php /*?><?php include 'social_button.php' ; ?><?php */?>

<!--footer bottom link --> 
<script src="<?=$basrURL?>assets/js/jquery.fitvids.js"></script> 
<script src="<?=$basrURL?>assets/js/jquery.bxslider.js"></script> 
<script>
    function getValIntoReg() {
        var amount_borrowing_home = $("#amount_borrowing_home").val();
        var tenure_home = $("#tenure_home").val();
        var loan_purpose_home = $("#loan_purpose_home").val();

        $("#amount_borrowing_reg").val(amount_borrowing_home);
        $("#tenure_reg").val(tenure_home);
        $("#loan_purpose_reg").val(loan_purpose_home);

        $.ajax(
                {
                    url: '',
                    dataType: 'html',
                    cache: true,
                    type: 'get',
                    async: false,
                    data: {"mode": "putLoanVal", "amount_borrowing_home": amount_borrowing_home, "tenure_home": tenure_home, "loan_purpose_home": loan_purpose_home},
                    success: function (resp) {
                        if ($.trim(resp) == "true") {
                        }
                    },
                    error: function () {
                    }
                }
        );
    }
    $(document).ready(function () {
        var onFormSuccess = function () {
            getValIntoReg();
            $("#myModal").modal('show');
        }
        $.validationEngine.defaults.scroll = false;
        $.validationEngine.defaults.onFormSuccess = true;

        $("#home_loan_form").validationEngine({
            scroll: false,
            onFormSuccess: onFormSuccess
        });
    });
</script>


<!--footer bottom link --> 
<?php include 'popup_section.php'; ?>
<!--footer bottom link --> 


<!-- Load JS here for greater good =============================--> 
<script src="<?=$basrURL?>assets/js/bootstrap.min.js"></script> 
<script src="<?=$basrURL?>assets/js/bootstrap-select.js"></script> 
<script src="<?=$basrURL?>assets/js/bootstrap-switch.js"></script> 
<script src="<?=$basrURL?>assets/js/responsiveslides.min.js"></script> 
<script src="<?=$basrURL?>assets/js/smoothscroll.js"></script> 
<script src="<?=$basrURL?>assets/js/jquery.nav.js"></script> 
<script src="<?=$basrURL?>assets/js/jquery.magnific-popup.min.js"></script> 
<script src="<?=$basrURL?>assets/js/custom.js"></script> 

<!-- begin layerslider script--> 
<script src="<?=$basrURL?>assets/js/greensock.js"></script> 
<script src="<?=$basrURL?>assets/js/layerslider.transitions.js"></script> 
<script src="<?=$basrURL?>assets/js/layerslider.kreaturamedia.jquery.js"></script> 
<script>
$(document).ready(function () {
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			600: {
				items: 3,
				nav: false
			},
			1000: {
				items: 5,
				nav: true,
				loop: false,
				margin: 20
			}
		}
	});
	$("#home_reg_form").validationEngine({
		scroll: false,
	});
	$("#home_login_form").validationEngine({
		scroll: false,
	});
})
</script>





<!--Start of Zopim Live Chat Script-->
<!--<script type="text/javascript">
    window.$zopim || (function (d, s) {
        var z = $zopim = function (c) {
            z._.push(c)
        }, $ = z.s =
                d.createElement(s), e = d.getElementsByTagName(s)[0];
        z.set = function (o) {
            z.set.
                    _.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "//v2.zopim.com/?3TlC9C3VcpwSI7U5k2UcLBef5riB0oct";
        z.t = +new Date;
        $.
                type = "text/javascript";
        e.parentNode.insertBefore($, e)
    })(document, "script");
</script>-->
<!--End of Zopim Live Chat Script-->
<script>
 $('.bxslider').bxSlider({
  video: true,
  useCSS: false
});
</script>




<!-- Google Code for Premium Leads Conversion Page -->

<!---


<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 879864096;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "xHWyCKXp6GgQoNLGowM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/879864096/?label=xHWyCKXp6GgQoNLGowM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>

-->



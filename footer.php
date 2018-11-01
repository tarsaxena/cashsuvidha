
<!--footer bottom link --> 
<?php include 'sticky/sticky_enq.php'; ?>
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
<?php //include 'popup_section.php'; ?>
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

<script type="text/javascript">
_linkedin_data_partner_id = "37569";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
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
</body>
</html>
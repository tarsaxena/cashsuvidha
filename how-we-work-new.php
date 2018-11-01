<?php include 'header.php'; ?>
<link href="https://www.cashsuvidha.com/assets/css/app_user.css" rel="stylesheet">
<body>

<style>
.how_div h4 {color: #333 !important;}

    @media only screen 
    and (max-width : 767px){
        .item.header,.footerDiv{display: none !important;}    
        .banner_div{margin-top: 0 !important;height: 150px;}
        .margin-t-80{margin-top: 0 !important;}
    }
</style>
<!-- header start -->
<?php include 'top.php'; ?>
<!-- header start -->


 <!--<img src="assets/images/borrow-banner.jpg" class="img-responsive" alt="Banner">--> 
<div class="banner_div how_banner_div"></div>
<!--banner section -->

<div class="container margin-t-80 sdfsdfd">
        <div class="row">
            <h1 class="h2-text-center">Our Process</h1>
            
             <div class="row">
                <div class="col-xs-12 col-sm-3 how_div">
                    <img src="assets/images/apply.png" class="hiw-process-img" alt="Apply">
                    <h4>Apply Any Time</h4>
                    <p class="para_desc_center width70 autoMargin min-90">5-minute online application form</p>
                </div>
                <div class="col-xs-12 col-sm-3 how_div">
                    <img src="assets/images/upload.png" class="hiw-process-img" alt="Upload">
                    <h4>Upload</h4>
                    <p class="para_desc_center width70 autoMargin min-90">Digitally upload all required documents</p>
                </div>
                <div class="col-xs-12 col-sm-3 how_div">
                    <img src="assets/images/approved.png" class="hiw-process-img" alt="Approved">
                    <h4>Quick Approval</h4>
                    <p class="para_desc_center width70 autoMargin min-90">Receive instant pre approval in minutes</p>
                </div>
                <div class="col-xs-12 col-sm-3 how_div">
                    <img src="assets/images/drawdown.png" class="hiw-process-img" alt="Drawdown">
                    <h4>Disbursal</h4>
                    <p class="para_desc_center width70 autoMargin min-90">Loan amount disbursed within 72 hours</p>
                </div>
            </div>
            <!-- ./row -->
            <p align="center" style="margin-top:30px; font-style:italic; margin-bottom:30px;">Our lending process starts with the determination of loan likelihood. We, at Cash Suvidha, set the limit of loan prospect on a dynamic cut, called as Suvidha Score. Our lending department defines this score on the basis of six elementary factors which are listed below.</p>
<ul style="margin-top:30px; font-style:normal; margin-bottom:30px; text-align:center;">
<li>1. Social Graph, 2. Data & Human Behavior Analysis, 3. Document Verification</li>
<li>4. Business Performance, 5. Credit Check by CIBIL, 6. Financial Data</li>
</ul>
<p align="center">Score improvement is directly proportional to the loan likeliness which doesn't require any unbending science - your willingness can bring it up. Unlike the other lending providers we are not just dependent only one factor i.e. CIBIL score. You may still be eligible for a loan even if your CIBIL score is not good while the combination of all of above factors determining your Suvidha Score is good or at least satisfactory.</p>

<p align="center">In association with the advisory club, our lending team adds its complete knowledge and involves great effort in maximizing the Suvidha Scores of our respected clients. Hundreds of examples are there where this score is gradually improving.</p>
            
        </div>
    </div>
  
  <div>
  
  <img src="assets/images/tree.jpg" alt="Suvidha Score" class="img-responsive" width="700" style="width:700px; margin:0 auto;"/>
  </div>
<script type="text/javascript">
        $(document).ready(function(){
            activeThis('fast');
        });

        function activeThis(id){
            $("#desktop-users .compare_inner_div").removeClass("active_compare");
            $("#desktop-users #"+id).addClass("active_compare");

            $("#desktop-users .comp_outer_div").addClass("dispNone");
            $("#desktop-users #"+id+"_table").removeClass("dispNone");
        }
    </script>
<?php include 'testimonials.php'; ?>

<hr>
<?php include 'strip.php'; ?>

<?php include 'bottom.php'; ?>
<?php include 'footer.php'; ?>

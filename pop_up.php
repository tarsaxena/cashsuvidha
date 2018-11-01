<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<!--<button class="pop">toggle popup</button>-->

<div class="popup">
  <div class="band"><img src="asset/images/cross.png" style="height:20px"/></div>
    <span style="padding-left:15px">Top suggestions</span>
 <hr/>
 
 <div id="img"><img src="assets/images/4.jpg" style="height:150px;width:400px;margin-top: -10px;"/></div>
 <ol>
 <li><a  onclick="ques1()" id="qu1">What are the Documents Required to Process a Loan?</a></li><br/>
  <div style="display:none; padding-right:20px; text-align:justify;width:300px;height:100%;overflow:scroll;" id="myDIV">
       <ol>
	     <li>Our process is completely online. Click on www.cashsuvidha.com to check your eligibility and submit your application thereon.</li>
		 <li>We are in requisite of following documents to favor you loan.</li>
		 <ul style="list-style-type: square;">
		   <li><b>FOR PERSONAL LOANS</b></li>
		     <ul type="disc">
			  <li>Pan Card</li>
              <li>Aadhar card (for address proof).</li>
              <li>Bank statement for period of 12 months preceding this month (in which salary credit).</li>
              <li>Latest 3 salary slips.</li>
              <li>Rent agreement ( in case of rented house and minimum 6 month residency over there is required).</li>
			  <li>In case of self owned house electricity bills.</li>
             </ul>
			 <li><b>FOR PERSONAL LOAN</b></li>
		     <ul type="disc">
			  <li>Pan Card</li>
              <li>Aadhar card (for address proof).</li>
              <li>Bank statements for a period of 6 months preceding this month (bank account of business i.e current account)</li>
              <li>ITR (of preceding 2 year).</li>
              <li>Income statement(P&L) , Computation of income certificate, balance sheet [ preceding 2 year statements duly attested by CA].</li>
			  <li>Business proof ( VAT registration/ MCD Certificate/ telephone bill of office).</li>
			  <li>Sale summary and VAT returns ( if applicable).</li>
			  <li>Running or previous loan sanction letter.</li>
			</ul>
		  </ul>
		</ol>
		<p>After evaluation we will update you the status of your loan request.</p>
		<br><br>
  </div>
 
 
<li><a onclick="ques2()" id="qu2">Types of LOAN We Provide</a></li>
 <div style="display:none; padding-right:20px; text-align:justify;width:300px;height:100%;overflow:scroll;" id="myDIV2">
      
	   <p>We deal in short term loans for your personal purposes as well as offer small and medium enterprise loans.</p>
        <b>LOAN AMOUNT, INTEREST RATE & DURATION</b>
          <ul style="list-style-type: square;">
		   <li><b>FOR PERSONAL LOANS</b></li>
		     <ul type="disc">
			  <li>We offer unsecured personal loan</li>
              <li>Minimum amount of Rs25000 and maximum of Rs200000.</li>
              <li>Our rate of interest would be ranging from 22 to 28% that solely depends on your credentials and as per analysis made by our credit department. We also charge processing fees over our rate of interest that would be 2 to 3% (plus service tax ) and there is also a company policy for insurance(depending on your age and loan amount).</li>
             </ul>
			 <li><b>FOR SME LOANS</b></li>
		     <ul type="disc">
			  <li>We offer unsecured loan of minimum amount of Rs 50000 and maximum of Rs 3lakh</li>
              <li>And to lend more than Rs 3lakh up to Rs 20lakh we need an asset as collateral of double amount</li>
              <li>Tenure of our loan would range for a minimum period of 1 year and maximum 2 year, however we can also lend for 3 years provided your loan is secured by an asset.</li>
              <li>Our rate of interest would be ranging from 22 to 28% (for women 21-24%) that solely depends on your credentials and as per analysis made by our credit department. We also charge processing fees over our rate of interest that would be 3% (plus service tax) and there is also a company policy forinsurance (depending on your age and loan amount).</li>
			</ul>
		  </ul>
		  <p>On successful evaluation of your documents you will know the exact interest rate, amount & duration of loan.</p>
		  <br><br><br/>
  </div>
  
 
 
<script>
function ques1() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
   document.getElementById('myDIV2').style.display='none';
   document.getElementById('img').style.display='none';
	
    } else {
        x.style.display = 'none';
		document.getElementById('img').style.display='block';
		
    }
}


function ques2() {
    var x = document.getElementById('myDIV2');
    if (x.style.display === 'none') {
        x.style.display = 'block';
		document.getElementById('img').style.display='none';
	
    } else {
        x.style.display = 'none';
			document.getElementById('img').style.display='block';
		
    }
}
</script>
 
 <script type="text/jscript">
 $(window).load(function() {
 //$('.pop').click(function() {
  $('.popup').toggleClass("open");
});

$('.band').click(function() {
  $('.popup').toggleClass("open");
});
 </script>

 
 <style>
.popup {
height: 300px;
width: 400px;
background:#FFFFFF;
bottom: -300px;
right: 20px;
border: 1px solid;
position: absolute;
transition: all 0.8s;
padding-top: 25px;
border-radius: 13px;
vertical-align: top;
}
.open {
  bottom: 0;
}
body {
  overflow: hidden;
 
}
.band {
  position: absolute;
  top: 0;
  width: 100%;
  height: 20px;
  background: rgba(0, 0, 0, 0.2);
  text-align: right;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  /*transition: all 0.8s;*/
}
.popup:hover {
  box-shadow: inset 0 0 15px black;
}
.band:hover {
   background: rgba(0, 0, 0, 0.2);
}
html,
body {
}




body {
   /*counter-reset: item;*/
 }
 ol {
   list-style: block;
  /* margin-left:-25px;*/
 }
 li {
   counter-increment: item;
   margin-bottom: 5px;
 }
 li:before {
   margin-right: 10px;
  /* content: counter(item);*/
   background: lightblue;
   border-radius: 100%;
   color: white;
   width: 1.2em;
   text-align: center;
   display: inline-block;
 }
 
 ol li a {
     text-decoration: none;
	 color:#326586;
}

ol li a:hover {
color:#0033FF;
text-decoration:underline;
}


</style>
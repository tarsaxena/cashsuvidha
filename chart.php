<?php
	
	session_start();
	include("src/jpgraph.php"); 
	include("src/jpgraph_pie.php"); 
	include("src/jpgraph_pie3d.php"); 
	include("src/jpg-config.inc.php");
	
	
	
	/*******for facebook slice*******/
	if($_SESSION['score_of_fb']) {
		$fb_slice = $_SESSION['score_of_fb'];
	}
	else{
	    $fb_slice = 0;
	}  		
	
	/*******for LinkedIn slice********/
	if($_SESSION['score_of_lin']) {
		$lin_slice = $_SESSION['score_of_lin'];
	}
	else{
	   $lin_score = 0;
	}
	
	/******for Google Plus*******/
	if($_SESSION['score_of_gp']){
	   $gp_slice = $_SESSION['score_of_gp'];
	}
	else{
	   $gp_slice = 0;
	}
	
	/*******for Twitter*********/
	if($_SESSION['score_of_tw']){
	   $tw_slice = $_SESSION['score_of_tw'];
	}
	else{
	  $tw_slice = 0;
	}
	
	/********for Pinterest*******/
	if($_SESSION['score_of_pin']){
	   $pin_slice = $_SESSION['score_of_pin'];
	}
	else{
	  $pin_slice = 0;
	}
	
	//Browser usage statistics, %
	$data = array($fb_slice, $lin_slice, $gp_slice, $tw_slice, $pin_slice, 10); 
	$legends = array( 
	'FACEBOOK', 
	'LINKEDIN', 
	'GOOGLE PLUS', 
	'TWITTER', 
	'PINTEREST', 
	'INSTAGRAM',
	); 
	
	
	// Creating a new graphic 
	$graph = new PieGraph(700, 350); 
	$graph->SetMarginColor('gray');
	$graph->SetShadow(false); 
	$graph->ClearTheme();
	
	
	// Naming the graphic
	$graph->title->Set('SUVIDHA SCORE'); 
	$graph->title->SetFont(FF_VERDANA, FS_BOLD, 10); 
	
	// Legend positioning (%/100) 
	$graph->legend->Pos(0.01, 0.07); 
	
	$graph->legend->SetFont(FF_VERDANA, FS_BOLD, 10);
	// Creating a 3D pie graphic 
	$p1 = new PiePlot3d($data); 
	
$p1->SetTheme("earth");

$p1->SetSliceColors(array('#3b5998','#0077B5','#d34836','#0084b4','#c8232c','#fb3958'));

// Setting the graphic center (%/100) 
$p1->SetCenter(0.45, 0.5); 

// Setting the ancle 
$p1->SetAngle(50); 

// Choosing the type 
$p1->value->SetFont(FF_ARIAL, FS_NORMAL, 18); 

// Setting legends for graphic segments
$p1->SetLegends($legends); 

// Adding the diagram to the graphic

$graph->Add($p1); 
// Showing graphic

$graph->Stroke(); 

?>
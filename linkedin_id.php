<?php 
	
	session_start();
	include_once('session_id.php');
	if(!isset($_SESSION['suvidha_score_id'])) {
	      $_SESSION['linkedin_id'] = $_SESSION['suvidha_score_id'];
	}
	
	//echo $linkedin_id;
	
	?>
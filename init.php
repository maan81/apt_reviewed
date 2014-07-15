<?php

	session_start();


	$isEditor = isset($_SESSION['isEditor'])?$_SESSION['isEditor']:false;

	if($_POST){

		include('save_page.php');
	}
	

	if($isEditor){
		$logout_link = '<a href="logout.php" style="position: absolute;">Logout</a>';
	}else{
		$logout_link = '';
	}

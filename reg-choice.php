<?php
	$Client = $_POST['client'];
	$servicePR = $_POST['servicePR'];
	$select = $_POST['rdbtn'];

	if(isset($_POST['submit'])){
		$selected = $_POST['RegChoice'];

		if($selected == 1){
			include 'registration-client.php';
		}

		else{
			include 'registration-servicePR.php';
		}
	}
?>
<?php 
	include 'registrationConnection.php';
	
	$action = $_GET['action'];

	///////////////////////////////////////// GET ALL THE USERNAME /////////////////////////////////////////////////
	if($action == "getUsername1")
	{
		$user = trim($_POST['uname']);
		
		if(validateUsername($user) == true)
		{
			echo true;
		}
		else
		{
			echo false;
		}
		
	}
	///////////////////////// GET ALL USERNAME EXCEPT ORIGINAL FOR CLIENT UPDATE ///////////////////////////////////////
	else if($action == "getUsernameforUpdate")
	{
		$user = trim($_POST['uname']);
		
		if(validateUsernameForUpdate($user) == true)
		{
			echo true;
		}
		else
		{
			echo false;
		}
		
	}	
	//////////////////////////////////////// CHECK CLIENT PASSWORD ////////////////////////////////////////////////////////
	else if($action == "checkClientPassword") 
	{
		if(checkClientPassword(trim($_POST['cpold'])) == true)
		{
			echo true;
		}
		else
		{
			echo false;
		}
	}
	//////////////////////////////////////// UPDATE CLIENT PASSWORD ////////////////////////////////////////////////
	elseif ($action == "clientUpdatePassword") 
	{
		$password = trim($_POST['cpconew']);
		$result = clientUpdatePassword($password);
		echo $result;
	}
	///////////////////////////////////////// CLIENT REGISTRATION ///////////////////////////////////////////////////
	else if($action == "clientregister")
	{
		$data['reg_first_name'] = ucfirst(trim($_POST['reg_first_name']));
		$data['reg_last_name'] = ucfirst(trim($_POST['reg_last_name']));
		$data['reg_email'] = trim($_POST['reg_email']);
		$data['reg_username'] = trim($_POST['reg_username']);
		$data['reg_password'] = trim($_POST['reg_password']);
		$data['reg_bdate'] = trim($_POST['reg_bdate']);
		$data['reg_address'] = ucfirst(trim($_POST['reg_address']));
		$data['reg_mobile'] = trim($_POST['reg_mobile']);
		$result = newClient($data);
		echo $result;
	}
	/////////////////////////////////////////// UPDATE CLIENT PROFILE //////////////////////////////////////////////
	elseif ($action =="updateClientProfile") 
		{
			$data['ce_fname'] = ucfirst(trim($_POST['ce_fname']));
			$data['ce_lname'] = ucfirst(trim($_POST['ce_lname']));
			$data['ce_address'] = ucfirst(trim($_POST['ce_address']));
			$data['ce_email'] = trim($_POST['ce_email']);
			$data['ce_uname'] = trim($_POST['ce_uname']);
			$data['ce_contact'] = trim($_POST['ce_contact']);
			$result = updateClientProfile($data);
			echo $result;
		}
	//////////////////////////////////////////// USER LOGIN ////////////////////////////////////////////////////////
	else if($action == "userlogin")
	{
		$data['user_login_username'] = trim($_POST['user_login_username']);
		$data['user_login_password'] = trim($_POST['user_login_password']);
		$result = userLogin($data);
		if($result)
		{
			echo $result;
		}
	}
	//////////////////////////////////////////// GET Client DETAILS /////////////////////////////////////////////////
	elseif ($action == "getClientProfile")
	{
		$result = getClientProfile();
		header('content-type: application/json');
		echo json_encode($result);
	}
	
	//////////////////////////////////////////// LOGOUT //////////////////////////////////////////////////////////
	elseif ($action == "clientLogout") 
	{
		clientLogout();
	}
	////////////////////////// SERVICE PROVIDER REGISTRATION /////////////////////////////////////////	
	else if($action == "serviceProvregistration")
	{
		$data['own_reg_first_name'] = ucfirst(trim($_POST['own_reg_first_name']));
		$data['own_reg_club_name'] = ucfirst(trim($_POST['own_reg_club_name']));
		$data['own_reg_address'] = ucfirst(trim($_POST['own_reg_address']));
		$data['own_reg_email'] = trim($_POST['own_reg_email']);
		$data['own_reg_type'] = trim($_POST['own_reg_type']);
		$data['own_reg_username'] = trim($_POST['own_reg_username']);
		$data['own_reg_password'] = trim($_POST['own_reg_password']);
		$data['own_reg_telephone'] = trim($_POST['own_reg_telephone']);
		$data['own_reg_phone'] = trim($_POST['own_reg_phone']);
		$result = serviceProviderRegistration($data);
		echo $result;
	}
	elseif ($action == "editSProviderDetails") 
	{
		$data['espname'] = ucfirst(trim($_POST['espname']));
		$data['espusername'] = ucfirst(trim($_POST['espusername']));
		$data['espaddress'] = ucfirst(trim($_POST['espaddress']));
		$data['espowner'] = ucfirst(trim($_POST['espowner']));
		$data['espmobile'] = ucfirst(trim($_POST['espmobile']));
		$data['espemail'] = trim($_POST['espemail']);
		$data['esptype'] = trim($_POST['esptype']);
		$data['espcontact'] = trim($_POST['espcontact']);
		$result = editSProviderDetails($data);
		echo $result;
	}
	elseif ($action=="getSPDetails") {
		$data = getSPProfile();
		$name = array();
		$name = explode(" ",$data);
		echo  $name[0];

	}
	elseif ($action == "SPLogout") 
	{
		SPLogout();
	}


 ?>

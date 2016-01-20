<?php
	session_start();
//////////////////////////////////////////// DATABASE DRIVER ///////////////////////////////////////////////////////
	function db(){
		return new PDO('mysql:host=localhost;dbname=spoarts',"root","");
	}
/////////////////////////////////////////// ADD NEW CLIENT /////////////////////////////////////////////////////////
	function newClient($data){
		$db = db();
		$sql = "INSERT INTO user_accounts(UserName,Password,UserStatus,UserType)VALUES(?,?,?,?)";
		$cmd = $db -> prepare($sql);
		$cmd->execute(array($data['reg_username'],md5($data['reg_password']),1,"client"));
		$id = $db->LastInsertId();
		$sql2 = "INSERT INTO clients(ClientFname,ClientLname,ClientBirthdate,ClientAddress,ClientContactNo,ClientEmail,ClientStatus,UserID)VALUES(?,?,?,?,?,?,?,?)";
		$cmd2 = $db->prepare($sql2);
		$cmd2->execute(array($data['reg_first_name'],$data['reg_last_name'],$data['reg_bdate'],$data['reg_address'],$data['reg_mobile'],$data['reg_email'],1,$id));
		$db = null;
		return "You are successfully registered. Please login to continue."; 
	}
/////////////////////////////////////////////// UPDATE CLIENT PROFILE ///////////////////////////////////////////////
	function updateClientProfile($data)
	{
		$db = db();
		$id = userID();
		$sql = "UPDATE clients SET ClientFname = ?, ClientLname = ?, ClientAddress = ?, ClientContactNo = ?, ClientEmail = ? WHERE UserID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($data['ce_fname'],$data['ce_lname'],$data['ce_address'],$data['ce_contact'],$data['ce_email'],$id));
		$sql2 = "UPDATE user_accounts SET UserName = ? WHERE UserID = ?";
		$cmd2 = $db->prepare($sql2);
		$cmd2->execute(array($data['ce_uname'],$id));
		getClientDetails($id);
		refreshUserAccouts();
		$db = null;
		return "Update successful.";

	}		

//////////////////////////////////////////////// CHECK CLIENT PASSWORD ////////////////////////////////////////////////
	function checkClientPassword($password)
	{
		$id = userID();	
		$db = db();
		$sql = "SELECT Password FROM user_accounts WHERE Password = ? AND UserID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array(md5($password),$id));
		$row = $cmd->fetch();
		$db = null;
		if($row)
		{
			return true;
		}
		else
		{
			return false;
		}
	}	
//////////////////////////////////////////////// UPDATE CLIENT PASSWORD //////////////////////////////////////////////
	 function clientUpdatePassword($password)
	 {
		$id = userID();	
		$db = db();
		$sql = "UPDATE user_accounts SET Password = ? WHERE UserID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array(md5($password),$id));
		$db = null;
		return "Password changed.";	 	
	 }
///////////////////////////////////////////////// VALIDATE USERNAME  //////////////////////////////////////////////////
	function validateUsername($user)
	{
			$db = db();
			$sql = "SELECT UserName FROM  user_accounts WHERE UserName = ?" ;
			$cmd = $db->prepare($sql);
			$cmd->execute(array($user));
			$row = $cmd->fetch();
			$db = null;
			if($row)
			{
				return true;
			}
			else
			{
				return false;
			}
	} 
	
///////////////////////////////////////////////// VALIDATE USERNAME FOR UPDATE //////////////////////////////////////////////////
	function validateUsernameForUpdate($user)
	{
			$id = userID();
			$db = db();
			$sql = "SELECT UserName FROM  user_accounts WHERE UserName = ? AND UserID != ?" ;
			$cmd = $db->prepare($sql);
			$cmd->execute(array($user,$id));
			$row = $cmd->fetch();
			$db = null;
			if($row)
			{
				return true;
			}
			else
			{
				return false;
			}
	}	

 ////////////////////////////////////////////////  GET THE CLIENT PROFILE  /////////////////////////////////////////////
	function getClientProfile(){
		$db = db();
		$id = userID();
		$sql = "SELECT * FROM clients WHERE UserID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$result = $cmd->fetch();
		$db = null;
		return $result;
		}
  ///////////////////////////////////////////////// GET CLIENT PROFILE DETAILS /////////////////////////////////////////////////		
	function getClientDetails($id)
	{
		$db = db();
		$sql = "SELECT * FROM clients WHERE UserID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$result = $cmd->fetch();
		$_SESSION['firstname'] = $result['ClientFname'];
		$_SESSION['lastname'] = $result['ClientLname'];
		$_SESSION['address'] = $result['ClientAddress'];
		$_SESSION['birthdate'] = $result['ClientBirthdate'];
		$_SESSION['contact'] = $result['ClientContactNo'];
		$_SESSION['email'] = $result['ClientEmail'];
		$_SESSION['stasus'] = $result['ClientStatus'];
		$db = null;
		
		return $_SESSION;
	}	

///////////////////////////////////////////////// GET THE CLIENT PROFILE IMAGE /////////////////////////////////////////////////		

	function getimage($id)
		{
			$db = db();
			$sql = "SELECT * FROM clients WHERE UserID = ?" ;
			$cmd = $db->prepare($sql);
			$cmd->execute(array($id));
			$row = $cmd->fetch();
			$db = null;
			if($row)
			{
				$_SESSION['photoname'] = $row['photoName'];
				$_SESSION['photo'] = $row['photo'];
				//echo("<meta http-equiv='refresh' content='0'>");
				return $row;
			}
			else
			{
			return "No image found"; 
			}
		}
//////////////////////////////////////////////// CLIENT LOGOUT ///////////////////////////////////////////////////////// 
	function clientLogout()
	{
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['usertype']);
		unset($_SESSION['firstname']);
		unset($_SESSION['lastname']);
		unset($_SESSION['address']);
		unset($_SESSION['birthdate']);
		unset($_SESSION['contact']);
		unset($_SESSION['email']);
		unset($_SESSION['stasus']);
		unset($_SESSION['photoname']);
		unset($_SESSION['photo']);
		session_destroy();

	}
////////////////////////////////////////////////  USER LOGIN  ////////////////////////////////////////////////////////
	function userLogin($data)
	{
		$db = db();
		$sql = "SELECT UserName,Password,UserID,UserType FROM  user_accounts WHERE UserName = ? AND Password = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($data['user_login_username'],md5($data['user_login_password'])));
		$result = $cmd->fetch();
		$db = null;
		if($result)
		{    
			if($result['UserType'] == "client")
			{
				$_SESSION['islogin'] = true;	
				$_SESSION['user_id'] = $result['UserID'];
				$_SESSION['username'] = $result['UserName'];
				$_SESSION['password'] = $result['Password'];
				$_SESSION['usertype'] = $result['UserType'];
				getClientDetails($_SESSION['user_id']);
				$id = userID();
				getimage($id);
				return 0;	
			}
			else if($result['UserType'] == "service provider")
			{
				//if(checkSubscription($result['UserID'])=='true'){
					
					$_SESSION['islogin']= true;
					$_SESSION['user_id'] = $result['UserID'];
					$_SESSION['username'] = $result['UserName'];
					$_SESSION['password'] = $result['Password'];
					$_SESSION['usertype'] = $result['UserType'];
					getSPDetails($_SESSION['user_id']);
					$id = userID();	
					getSPimage($id);	

					return 1;
				//}
				//else
				//{
					//return "Expired.";
				//}

			}
		
		}
		else
		{
				return "Incorrect username or password.";
		}
	
	
}	
////////////////////////////////////////////// CHECK FOR SUBSCRIPTION ////////////////////////////////
		function checkSubscription($id)
		{
			$db2 = db();
			$sql = "SELECT * FROM subscriptions WHERE  SubscStatus = ? AND UserID = ?";
			$cmd = $db2->prepare($sql);
			$cmd->execute(array(1,$id));
			$row = $cmd->fetch();
			
			if($row)
			{
				$db2 = null;
				return 'true';
			}
			else
			{
				$db2 = null;
				return 'false';
			}
		}
 //////////////////////////////////////////////// USER LOGIN VERIFICATION //////////////////////////////
		function user_islogin()
		{
			if(isset($_SESSION['islogin']))
				return true;
			return false;
		}
 //////////////////////////////////////////////// GET USER ID ////////////////////////////////////		
		function userID()
		{
			if(isset($_SESSION['user_id'])){
				return $_SESSION['user_id'];	
			}
		}

///////////////////////////////// REFRESH USER ACCOUNT TABLE ///////////////////////////////////	
	function refreshUserAccouts()
	{
			$id = userID();
			$db = db();
			$sql = "SELECT * FROM  user_accounts WHERE UserID = ?" ;
			$cmd = $db->prepare($sql);
			$cmd->execute(array($id));
			$row = $cmd->fetch();
			$db = null;
			$_SESSION['username'] = $row['UserName'];
			return $row;
	}				

////////////////////////// SERVICE PROVIDER REGISTRATION /////////////////////////////////////////	
	function  serviceProviderRegistration($data){
		$db = db();
		$sql = "INSERT INTO user_accounts(UserName,Password,UserStatus,UserType)VALUES(?,?,?,?)";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($data['own_reg_username'],md5($data['own_reg_password']),1,"service provider"));
		$id = $db->LastInsertId();
		$sql2 = "INSERT INTO service_providers(OwnerName,SPName,SPAddress,SPType,SPEmail,SPContactNo,Spmobile,SPStatus,UserID)VALUES(?,?,?,?,?,?,?,?,?)";
		$cmd2 = $db->prepare($sql2);
		$cmd2->execute(array($data['own_reg_first_name'],$data['own_reg_club_name'],$data['own_reg_address'],$data['own_reg_type'],$data['own_reg_email'],$data['own_reg_telephone'],$data['own_reg_phone'],1,$id));
		$db = null;
		$datenow = date('Y-m-d');
		$date = array();
		$dateEnd = array();
		$date = explode('-', $datenow); 
		if($date[1]<12)
		{
			$dateEnd[0] =$date[0];
			$dateEnd[1] = $date[1]+1;
			$dateEnd[2] = $date[2];
			$dateending = implode("-",$dateEnd);
			subscriptionforTrail($datenow,$dateending,$id);
		}
		else if($date[1]==12)
		{
			$dateEnd[0] =$date[0]+1;
			$dateEnd[1] = 1;
			$dateEnd[2] = $date[2];
			$dateending = implode("-",$dateEnd);
			subscriptionforTrail($datenow,$dateending,$id);
		}
		return "You are successfully registered as an owner. Please login to continue";

	}
///////////////////////// TRIAL SUBSCRITION //////////////////////////////////////////////////////
	function subscriptionforTrail($startdate,$enddate,$id)
	{
		$db = db();
		$sql = "SELECT * FROM subscription_plans WHERE PlanName = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array("Trial"));
		$row = $cmd->fetch();
		$sql2 = "INSERT INTO subscriptions(SubscType,SubscPrice,SubscStartDate,SubscEndDate,SubscStatus,PlanID,UserID)VALUES(?,?,?,?,?,?,?)";
		$cmd2 = $db->prepare($sql2);
		$cmd2->execute(array($row['PlanName'],$row['PlanPrice'],$startdate,$enddate,1,$row['PlanID'],$id));
		$db = null;
		return $id;
		
	}	
///////////////////////// GET SERVICE PROVIDER PROFILE ////////////////////////////////////////////
	function getSPProfile(){
		$db = db();
		$id = userID();
		$sql = "SELECT * FROM service_providers WHERE UserID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$result = $cmd->fetch();
		$db = null;
		return $result['OwnerName'];
		}
///////////////////////// GET SERVICE PROVIDER DETAILS ////////////////////////////////////////////
	function getSPDetails($id)
	{
		$db = db();
		$sql = "SELECT * FROM service_providers WHERE UserID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$result = $cmd->fetch();
		$_SESSION['spname'] = $result['SPName'];
		$_SESSION['spaddress'] = $result['SPAddress'];
		$_SESSION['spcontact'] = $result['SPContactNo'];
		$_SESSION['spmobile'] = $result['SPmobile'];
		$_SESSION['spemail'] = $result['SPEmail'];
		$_SESSION['sptype'] = $result['SPType'];
		$_SESSION['spowner'] = $result['OwnerName'];
		$db = null;
		return $result;
	}
///////////////////////// EDIT SERVICE PROVIDER PROFILE ////////////////////////////////////////////
	function editSProviderDetails($data)
	{
		$id = userID();
		$db = db();
		$sql = "UPDATE service_providers SET SPName = ?, SPAddress = ?, SPContactNo = ?,SPEmail = ?,OwnerName = ? ,SPmobile = ?, SPType = ? WHERE UserID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($data['espname'],$data['espaddress'],$data['espcontact'],$data['espemail'],$data['espowner'],$data['espmobile'],$data['esptype'],$id));
		$db = null;
		getSPDetails($id);
		return "Update successful.";
	}	
///////////////////////// GET SERVICE PROVIDER PROFILE IMAGE ////////////////////////////////////////////	
	function getSPimage($id)
		{
				$db = db();
				$sql = "SELECT * FROM service_providers WHERE UserID = ?" ;
				$cmd = $db->prepare($sql);
				$cmd->execute(array($id));
				$row = $cmd->fetch();
				$db = null;
				if($row)
				{
					$_SESSION['spphotoname'] = $row['spphotoName'];
					$_SESSION['spphoto'] = $row['spphoto'];
					$_SESSION['splogo'] = $row['splogo'];
					$_SESSION['splogoname'] = $row['splogoName'];
					//echo("<meta http-equiv='refresh' content='0'>");
					
					return $row;
				}
				else
				{
				return "No image found"; 
				}
			}	
///////////////////////// LOGOUT SERVICE PROVIDER ACCOUNT ////////////////////////////////////////////			
	function SPLogout()
	{
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['usertype']);
		unset($_SESSION['spname']);		
		unset($_SESSION['spaddress']);
		unset($_SESSION['spcontact']);
		unset($_SESSION['spmobile']);
		unset($_SESSION['spemail']);
		unset($_SESSION['sptype']);
		unset($_SESSION['spowner']);
		unset($_SESSION['spphotoname']);
		unset($_SESSION['spphoto']);
		unset($_SESSION['splogoname']);
		unset($_SESSION['splogo']);
		session_destroy();
	}	
		

 ?>


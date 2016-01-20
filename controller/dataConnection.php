<?php 
	session_start();
	function db(){
		return new PDO('mysql:host=localhost;dbname=spoarts',"root","");
	}
	//////////////////////////// LOGIN ID /////////////////////////////////////
	function userID()
		{
			if(isset($_SESSION['user_id'])){
				return $_SESSION['user_id'];	
			}
		}
	//////////////////////////// GET ALL ARTS CLINICS //////////////////////////
	function getArtsClinics()
	{
		$db = db();
		$sql = "SELECT * FROM service_providers WHERE SPType = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array("Arts"));
		$data = $cmd->fetchAll();
		$db = null;
		return $data;
	}
	/////////////////////////// GET ART CLINIC ID //////////////////////////
	function getArtsClinicsID($id)
	{
		$db = db();
		$sql = "SELECT * FROM service_providers WHERE SPID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$data = $cmd->fetch();
		$db = null;
		return $data;
	}
	//////////////////////////// GET NONE REGISTERED ARTS CLINICS //////////////////
	function getNoneRegisteredArtClinics()
	{

		$db = db();
		$sql = "SELECT * FROM service_providers WHERE SPType = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array("Arts"));
		$data = $cmd->fetchAll();
		$db = null;
		return $data;	
	}
	//////////////////////////// GET NONE REGISTERED  ARTS CLINIC ADDRESS //////////////
	function getNoneRegiteredArtClinicsAddress($id)
	{
		$db = db();
		$sql = "SELECT * FROM service_providers WHERE SPID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$data = $cmd->fetch();
		$db = null;
		return $data['SPAddress'];	
	}
	/////////////////////////// GET SPORTS CLINICS ///////////////////////////////
	function getSportsClinics()
	{
		$db = db();
		$sql = "SELECT * FROM service_providers WHERE SPType = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array("Sports"));
		$data = $cmd->fetchAll();
		$db = null;
		return $data;
	}
	///////////////////////////// GET NONE REGISTERED SPORTS CLINICS //////////////
	function getNoneRegisteredSportClinics()
	{
		$db = db();
		$sql = "SELECT * FROM service_providers WHERE SPType = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array("Sports"));
		$data = $cmd->fetchAll();
		$db = null;
		return $data;

	}
	/////////////////////////// GET NONE REGISTERED SPORTS CLINIC ADDRESS ///////////////
	function getNoneRegiteredSportClinicsAddress($id)
	{
		$db = db();
		$sql = "SELECT * FROM service_providers WHERE SPID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$data = $cmd->fetch();
		$db = null;
		return $data['SPAddress'];		
	}
	////////////////////////////// GET CLINIC ID /////////////////////////////////
	function getClinicsID($id)
	{
		$db = db();
		$sql = "SELECT * FROM service_providers WHERE SPID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$data = $cmd->fetch();
		$db = null;
		return $data;
	}
	////////////////////////////// GET CLINIC ADDRESS //////////////////////////
	function getClinicsAddress($id)
	{
		$db = db();
		$sql = "SELECT * FROM service_providers WHERE SPID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$data = $cmd->fetch();
		$db = null;
		return $data['SPAddress'];
	}
	///////////////////////////////// SUBSCRIBED IN TRIAL //////////////////////
	function subscriptionforTrail($startdate,$enddate)
	{
		$id = userID();
		$db = db();
		$sql = "SELECT * FROM subscription_plans WHERE PlanName = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array("Trial"));
		$row = $cmd->fetch();
		$sql2 = "INSERT INTO subscriptions(SubscType,SubscPrice,SubscStartDate,SubscEndDate,SubscStatus,PlanID,UserID)VALUES(?,?,?,?,?,?,?)";
		$cmd2 = $db->prepare($sql2);
		$cmd2->execute(array($row['PlanName'],$row['PlanPrice'],$startdate,$enddate,1,$row['PlanID'],$id));
		return $id;
		
	}
	////////////////////////// GET IMAGE FROM GALLARY //////////////////////////////////
	function getImageFromGallary($id)
	{
		$db = db();
		$sql = "SELECT SPID FROM service_providers WHERE UserID = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$spid = $cmd->fetch();
		$sql2 = "SELECT * FROM gallary WHERE SPID = ?";
		$cmd2 = $db->prepare($sql2);
		$cmd2->execute(array($spid['SPID']));
		$images = $cmd2->fetchAll();
		$db = null;
		if($images)
		{
			return $images;
		}else
		{
			return "No image";
		}
	}

	function deleteFromGalary($id)
	{
		$db = db();
		$sql = "DELETE FROM gallary WHERE gal_id = ?";
		$cmd = $db->prepare($sql);
		$cmd->execute(array($id));
		$db = null;
		return "Image deleted";
	}

	function getAllServices()
	{
			$db = db();
			$sql = "SELECT * FROM services";
			$cmd = $db->prepare($sql);
			$cmd->execute();
			$rows = $cmd->fetch();
			$db=null;
			return "jkkjkjk";
	}
	function getMyclinics()
	{
			$db = db();
			$id = userID();
			$sql = "SELECT ClientID FROM clients WHERE UserID = ?";
			$cmd = $db -> prepare($sql);
			$cmd->execute(array($id));
			$row = $cmd->fetch();
			$sql2 = "SELECT s.SPID,s.SPName,s.SPLatitude,s.SPLongitude,s.SPAddress,s.splogo FROM service_providers AS s INNER JOIN my_clinics AS mc ON s.SPID = mc.SPID WHERE mc.ClientID = ? ";
			$cmd2 = $db->prepare($sql2);
			$cmd2->execute(array($row['ClientID']));
			$result = $cmd2->fetchAll();
			$db=null;
			return $result;
	}
	function getInterestID()
	{
			$db = db();
			$id = userID();
			$sql = "SELECT ClientID FROM clients WHERE UserID = ?";
			$cmd = $db -> prepare($sql);
			$cmd->execute(array($id));
			$row = $cmd->fetch();
			$sql2 = "SELECT s.ServiceName,e.EventName FROM services AS s INNER JOIN my_interests AS mi ON s.ServiceID = mi.ServiceID INNER JOIN events AS e ON e.EventID = mi.EventID WHERE mi.ClientID = ?";
			$cmd2 = $db->prepare($sql2);
			$cmd2->execute(array($row['ClientID']));
			$result = $cmd2->fetch();
			$db=null;
			if($result)
			{
				return 1;
			}	
			else
			{
				return 0;
			}	
	}	
	function getInterest()
	{
			$db = db();
			$id = userID();
			$sql = "SELECT ClientID FROM clients WHERE UserID = ?";
			$cmd = $db -> prepare($sql);
			$cmd->execute(array($id));
			$row = $cmd->fetch();
			$sql2 = "SELECT s.ServiceName,e.EventName FROM services AS s INNER JOIN my_interests AS mi ON s.ServiceID = mi.ServiceID INNER JOIN events AS e ON e.EventID = mi.EventID WHERE mi.ClientID = ?";
			$cmd2 = $db->prepare($sql2);
			$cmd2->execute(array($row['ClientID']));
			$result = $cmd2->fetchAll();
			$db=null;
			return $result;
	}	
	function getClinicsServices($spid)
	{
			$db = db();
			$sql2 = "SELECT s.ServiceName FROM services AS s INNER JOIN service_providers AS sp ON sp.SPID = s.SPID WHERE s.SPID = ? ";
			$cmd2 = $db->prepare($sql2);
			$cmd2->execute(array($spid));
			$result = $cmd2->fetchAll();
			$db = null;
			return $result;
	}
	function getAllServicesFromInterest()
	{
		$db = db();
		$sql = "SELECT DISTINCT s.ServiceName, s.ServiceName,sp.SPType FROM services AS s INNER JOIN service_providers AS sp ON s.SPID = sp.SPID WHERE ServiceStatus = ? ";
		$cmd = $db->prepare($sql);
		$cmd->execute(array(1));
		$row = $cmd->fetchAll();
		$db = null;
		return $row;
	}

 ?>
 
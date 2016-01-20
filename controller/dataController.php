<?php 
	include 'dataConnection.php';
	$action = $_GET['action'];

	if($action == "getArtsClinics")
	{
			
		$data = getArtsClinics();
		header('content-type: application/json');
		echo json_encode($data);
	}
	elseif ($action=="getArtsClinicsID")
	{
		$id = $_GET['id'];
		$data = getArtsClinicsID($id);
		header('content-type: application/json');
		echo json_encode($data);
	}
	elseif ($action == "getNoneRegisteredArtClinics") 
	{
		$data = getNoneRegisteredArtClinics();
		header('content-type: application/json');
		echo json_encode($data);
	}

	elseif ($action == "getNoneRegiteredArtClinicsAddress") 
	{	
		$id = $_GET['id'];
		$data = getNoneRegiteredArtClinicsAddress($id);
		echo $data;
	}

	else if($action == "getSportsClinics")
	{
		$data = getSportsClinics();
		header('content-type: application/json');
		echo json_encode($data);
	}
	else if($action == "getSportsClinicsID")
	{
		$id = $_GET['id'];
		$data = getClinicsID($id);
		header('content-type: application/json');
		echo json_encode($data);
	}
	elseif ($action == "getNoneRegisteredSportClinics") 
	{
		$data = getNoneRegisteredSportClinics();
		header('content-type: application/json');
		echo json_encode($data);
		
	}
	elseif ($action == "getNoneRegiteredSportClinicsAddress") 
	{
		$id = $_GET['id'];
		$data = getNoneRegiteredSportClinicsAddress($id);
		echo $data;
	}
	elseif ($action == "getClinicsAddress") 
	{
		$id = $_GET['id'];
		$data = getClinicsAddress($id);
		echo $data;
	}
	elseif ($action == "subscriptionforTrail") 
	{
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
			$result = subscriptionforTrail($datenow,$dateending);
			echo $result;
		}
		else if($date[1]==12)
		{
			$dateEnd[0] =$date[0]+1;
			$dateEnd[1] = 1;
			$dateEnd[2] = $date[2];
			$dateending = implode("-",$dateEnd);
			$result = subscriptionforTrail($datenow,$dateending);
			echo $result;

		}
	}
	elseif ($action == "getImageFromGallary") 
	{
			$id = $_GET['id'];
			$result = getImageFromGallary($id);
			header('content-type:application/json');
			echo json_encode($result);

	}
	elseif ($action =="deleteFromGalary") 
	{
		$id = $_GET['id'];
		$result = deleteFromGalary($id);
		echo $result;
	}
	/*elseif ($action == "getAllServices") 
	{
				$id = 2;
			$result = getAllServices();
			//header('content-type:application/json');
			echo "jjkjkjkjkj"; 
	}*/
	elseif ($action == "getInterestID") 
	{
		$result = getInterestID();
		echo $result;
	}	
	elseif ($action == "getInterest") 
	{
		$result = getInterest();
		header('content-type:application/json');
		echo json_encode($result);
	}
	elseif ($action == "getMyclinics") 
	{
		$result = getMyclinics();
		header('content-type:application/json');
		echo json_encode($result);
	}
	elseif ($action == "getClinicsServices") 
	{
			$spid = $_GET['spid'];
		$result = getClinicsServices($spid);
		header('content-type:application/json');
		echo json_encode($result);
	}
	else if($action == "getAllServicesFromInterest")
	{
		$result = getAllServicesFromInterest();
		header('content-type:application/json');
		echo json_encode($result); 
	}	

	
	
 ?>
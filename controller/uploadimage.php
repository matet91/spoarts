<?php 

			function saveToGallary($photoname,$image,$title,$id)
			{
				
				$db = new PDO('mysql:host=localhost;dbname=spoarts',"root","");
				$sql = "SELECT SPID FROM service_providers WHERE UserID = ?";
				$cmd = $db->prepare($sql);
				$cmd->execute(array($id));
				$spid = $cmd->fetch();
				$sql2 = "INSERT INTO gallary(gal_image,gal_name,gal_title,SPID)VALUES(?,?,?,?)";
				$cmd2 = $db->prepare($sql2);
				$cmd2->execute(array($image,$photoname,$title,$spid['SPID']));
				$db = null;
				return "Image upload to gallary."; 
			}
 ?>
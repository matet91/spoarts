<?php session_start(); ?>

<?php 
	if(!isset($_SESSION['islogin']))
	{
		header('Loaction: index.php');
		exit();
	}
	else
	{
		$id = '';	
		$photo = '';
		$fullname = '';
		$address = '';
		$contact = '';
		$email = '';
		$birthday = '';
		
		if(isset($_SESSION['photo']))
		{
			$photo = $_SESSION['photo'];
		}
		if(isset($_SESSION['firstname']))
		{
			$id = $_SESSION['user_id'];
			$fullname = $_SESSION['firstname']." ".$_SESSION['lastname']; 
		}
		if(isset($_SESSION['address']))
		{
			$address = $_SESSION['address'];
		}
		if(isset($_SESSION['contact']))
		{
			$contact = $_SESSION['contact'];
		}
		if(isset($_SESSION['email']))
		{
			$email = $_SESSION['email'];
		}
		if(isset($_SESSION['birthdate']))
		{
			$birthday = $_SESSION['birthdate'];
		}

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

</head>
		<header><?php include 'client-header.php'; ?></header>
	<body>
		

		<div class="container">
			<div class="section">
				<div class="card-panel teal lighten-2">

					<div class="right-align">
						<a href="#editProfile" class=" modal-trigger btn white black-text tooltipped" data-position="bottom" data-delay="50" 
				      	data-tooltip="Edit your profile" >Edit Profile</a>
					</div>
					<div class="profile-pic">
						<?php echo '<img class="z-depth-1" src="data:image;base64,'.$photo.' "> '; ?>
						<h5><?php echo "$fullname"; ?></h5><hr>
						<a href="#editPropic" class="modal-trigger btn-floating red tooltipped " style="margin-left: -110px; margin-top: 30px;" data-tooltip="Change profile picture">
						<i class="material-icons left">edit</i></a>
						
					</div>
					<div class="section">
						<table style="margin-left: 105px; margin-top: -80px;">
							<tr>
								<th><i class="material-icons left">home</i>Home Address</th>
								<td id="daddress"><?php echo "$address"; ?></td>
							</tr>
							<tr>
								<th><i class="material-icons left">contact_phone</i>Contacts</th>
								<td><?php echo "$contact"; ?></td>
							</tr>
							<tr>
								<th><i class="material-icons left">email</i>Email</th>
								<td><?php echo "$email"; ?></td>
							</tr>
							<tr>
								<th><i class="material-icons left">event</i>Birthdate</th>
								<td><?php echo "$birthday"; ?></td>
							</tr>
							
						</table>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="card-panel">
					<div class="right-align">
		      			<a href="#myInterest" class="btn tooltipped modal-trigger" data-position="bottom" data-delay="50" 
		      			data-tooltip="This will update your interests">Edit</a>

		      		</div>


					<h5><i class="material-icons left">favorite</i>My Interests</h5><hr>
					<div class="section">
						<div class="row">

							<!--ARTS COLUMN-->
							<ul class="collection with-header col s6">
						        <li class="collection-header"><h5><i class="material-icons left">color_lens</i>Arts</h5></li>
						        <li class="collection-item">Ballroom Dancing</li>
						        <li class="collection-item">Zumba</li>
      							<li class="collection-item">Piano Lesson</li>
      							<li class="collection-item">Drum Lesson</li>
      							<li class="collection-item">Singing</li>
      							<li class="collection-item">Painting</li>
				      		</ul>

				      		<!--SPORTS COLUMN-->
				      		<ul class="collection with-header col s6">
						        <li class="collection-header"><h5><i class="material-icons left">golf_course</i>Sports</h5></li>
						        <li class="collection-item">Taekwondo</li>
						        <li class="collection-item">Basketball</li>
      							<li class="collection-item">Volleyball</li>
      							<li class="collection-item">Tennis</li>
      							<li class="collection-item">Soccer</li>
      							<li class="collection-item">Badminton</li>
				      		</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<!--MODAL edit your profile picture-->
  		 	<div id="editPropic" class="modal">
  		 	<form method="post" enctype="multipart/form-data">
			    <div class="modal-content">
			      <h4><img  id="modal-logo" src="images/logo.png"></h4>
			      <hr>
			      <div class="row">
				    <span class="col s12">

				      <div class="row">
				    	 <div class="file-field input-field">
					      <div class="btn tooltipped" data-position="bottom" data-delay="50" 
				      	data-tooltip="Change profile picture">
					        <span>Image</span>
					        <input type="file" name="image">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" placeholder="Change profile picture" type="text">
					      </div>
					    </div>
				       </div>
				    </span>
				  </div>
			    </div>
			    <div class="modal-footer">
			     <!--input class=" modal-action modal-close waves-effect waves-green btn-flat" type="submit" name="upload" value="Upload" onclick="upload()"-->
			     <button class=" modal-action modal-close waves-effect waves-green btn-flat" type="submit" name="upload" onclick="upload()">Upload</button>
			      <a href="#" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
			    </form>
			</div>


		<?php
			
			if(isset($_POST['upload']))
			{
				if(!getimagesize($_FILES['image']['tmp_name'])==FALSE)
				{
					$image = addslashes($_FILES['image']['tmp_name']);
						$name = addslashes($_FILES['image']['name']);
						$image = file_get_contents($image);
						$image = base64_encode($image);
						$data = saveimage($name,$image,$id);
				}
			}
			
			function saveimage($photoname,$image,$id)
			{
				$db = new PDO('mysql:host=localhost;dbname=spoarts',"root","");
				$sql = "UPDATE clients SET photoName = ?, photo = ? WHERE UserID = ?" ;
				$cmd = $db->prepare($sql);
				$cmd->execute(array($photoname,$image,$id));
				$db = null;
				getimage($id);
				return "Image uploaded"; 
			}

			function getimage($id)
			{
				$db = new PDO('mysql:host=localhost;dbname=spoarts',"root","");
				$sql = "SELECT * FROM clients WHERE UserID = ?" ;
				$cmd = $db->prepare($sql);
				$cmd->execute(array($id));
				$row = $cmd->fetch();
				$db = null;
				if($row)
				{
					$_SESSION['photoname'] = $row['photoName'];
					$_SESSION['photo'] = $row['photo'];
					echo("<meta http-equiv='refresh' content='0'>");
					return $row;
				}
				else
				{
				return "No image found"; 
				}
			}
		?>
	</body>
</html>
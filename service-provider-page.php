<?php session_start(); ?>
<?php
$names = '';
	if(!isset($_SESSION['islogin']))
	{
		header('Location: index.php');
		exit();
	}

	
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Service Provider Page</title>
		
		<script type="text/javascript">
				window.onload=function()
				{
					var url = "controller/dataController.php?action=getArtsClinicsID&id="+ <?php if(isset($_GET['id'])){ echo $_GET['id'];} ?>;
					$.getJSON(url,function(result){
						$('#clinicName').text(result.SPName);
						$('#clinicDesc').text(result.SPName);
						$('#clinicAddress').text(result.SPAddress);
						$('#clinicType').text(result.SPType);
						$('#clinicOwnName').text(result.OwnerName);
						$('#clinicEmail').text(result.SPEmail);
						$('#clinicContact').text(result.SPContactNo);
					});
						
				
				}
		</script>
	</head>
	
	<body>
		<header><?php include "client-header.php"; ?></header>
		
		<div class="container">
			<div class="parallax-container">
			    <div class="parallax"><img height="200" src="images/spoarts.jpg"></div>
			</div>
			 <div class="row">
			 <div class="col s12">
			      <ul class="tabs">
			        <li class="tab col s3"><a class="active" href="#info">Info</a></li>
			        <li class="tab col s3"><a href="#services">Services</a></li>
			        <li class="tab col s3"><a href="#promos">Promos</a></li>
			        <li class="tab col s3"><a href="#gallery">Gallery</a></li>
			        <li class="tab col s3"><a href="#reviews">Ratings & Reviews</a></li>
			        
			      </ul>
			    </div>
			    <div id="info" class="col s12"><br>
			    	<div class="card-panel">
			    		<div class="list">
						  <div style="margin-left: 680px;" href="#" id="fav_button">Add to My Clinics</a></div>
						</div>
			    		<hr><br>
			    		<table>
			    			<tr>
			    				<th>Clinic Name:</th>
			    				<td><span id="clinicName"></span></td>
			    			</tr>
			    			<tr>
			    				<th>Clinic Desciption:</th>
			    				<td><span id="clinicDesc"></span></td>
			    			</tr>
			    			<tr>
			    				<th>Address:</th>
			    				<td><span id="clinicAddress"></span></td>
			    			</tr>
			    			<tr>
			    				<th>Clinic Type:</th>
			    				<td><span id="clinicType"></span></td>
			    			</tr>
			    			<tr>
			    				<th>Owner:</th>
			    				<td><span id="clinicOwnName"></span></td>
			    			</tr>
			    			<tr>
			    				<th>Email:</th>
			    				<td><span id="clinicEmail"></span></td>
			    			</tr>
			    			<tr>
			    				<th>Contacts:</th>
			    				<td><span id="clinicContact"></span></td>
			    			</tr>
			    		</table><br>
			    		
			        </div>	
			    </div>
			    <div id="services" class="col s12">
			    	<?php include "services.php"; ?>
			    </div>
			 <span id="clinicDesc"></span>   <div id="promos" class="col s12">
			    	<?php include "promos.php"; ?>
			    </div>
			    <div id="gallery" class="col s12">
			    	<?php include "gallery.php"; ?>
			    </div>
			    <div id="reviews" class="col s12">
			    <?php include "reviews.php"; ?>
			    </div>
			 </div>

		</div>
	</body>
	<script type="text/javascript">
		//modal
		$(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal-trigger').leanModal();
		  });
		//paralax
		$(document).ready(function(){
	      $('.parallax').parallax();
	    });
		//tabs
		$(document).ready(function(){
    		$('ul.tabs').tabs('select_tab', 'tab_id');
  		});
     	//collapsible
     	$(document).ready(function(){
	    $('.collapsible').collapsible({
	      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
	    });
	  	});

	  	$(document).ready(function(){
		    $('.materialboxed').materialbox();
		});
		$(document).ready(function(){
		    $('#textarea1').val('New Text');
  			$('#textarea1').trigger('autoresize');
		});

		//My Clinics ni nga code
		// get favorites from local storage or empty array
		var favorites = JSON.parse(localStorage.getItem('favorites')) || [];
		// add class 'fav' to each favorite
		favorites.forEach(function(favorite) {
		  document.getElementById(favorite).className = 'fav';
		});
		// register click event listener
		document.querySelector('.list').addEventListener('click', function(e) {
		  var id = e.target.id,
		      item = e.target,
		      index = favorites.indexOf(id);
		  // return if target doesn't have an id (shouldn't happen)
		  if (!id) return;
		  // item is not favorite
		  if (index == -1) {
		    favorites.push(id);
		    item.className = 'fav';
		  // item is already favorite
		  } else {
		    favorites.splice(index, 1);
		    item.className = '';
		  }
		  // store array in local storage
		  localStorage.setItem('favorites', JSON.stringify(favorites));
		});

// local storage stores strings so we use JSON to stringify for storage and parse to get out of storage

	</script>
</html>
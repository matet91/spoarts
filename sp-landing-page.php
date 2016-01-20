<!DOCTYPE html>
<html>
	<head>
		<title>Service Provider </title>
	</head>
	
	<body>
	<?php include "sp-landing-header.php"; ?>
	
	<?php
		$name = ''; 
		if(isset($_SESSION['spowner']))
		{
			$name = $_SESSION['spowner'];
		}
	 ?>

	<div class="row">
			<div class="col s2">
		    	<div class="section">
			 	  	
				 	  <!-- Left aligned menu below button -->
				 	  <div class="row">
					 	  <div class="collection z-depth-1">
					 	  	<div class="collection-item">
								<div class="container">
				 	  			<div class="profile-pic">
						    		<img class="z-depth-1" src="images/propic.png"><a href="#!" class="grey-text text-darken-3" ><span><?php echo $name;; ?></span></a>
						  		</div>
				 	  		</div>					 	  		
					 	  	</div>
					       	<a href="sp-profile.php" id="gotomyprofile" class="collection-item"><i class="material-icons left">person</i> My profile</a>
					        <a href="#modal2" class="modal-trigger collection-item"><i class="material-icons left">book</i>Reservations</a>
					        <a href="#modal2" class="modal-trigger collection-item"><i class="material-icons left">check_circle</i>Enrolled clients</a>
					        <a href="#modal2" class="modal-trigger collection-item"><i class="material-icons left">event_available</i>Offered events</a>
					        <a href="#modal2" class="modal-trigger collection-item"><i class="material-icons left">notifications_none</i>News<span class="new badge">4</span></a>
					        <a href="#modal2" class="modal-trigger collection-item"><i class="material-icons left">chrome_reader_mode</i>My payment</a>
					        
					      </div>
				      </div>
			  	</div>
		 	</div>



		 	<div class="col s10" >
		    	<div class="section">
			 	  	<div class="card-panel teal">
				 	  <!-- Left aligned menu below button -->
				 	  <div class="center">
				 	  	<h5>Welcome! To start creating your page just click the button below.</h5>
				 	  </div>
				 	  <div class="center" style="margin-top: 100px; ">
					 	<button href="#modal1" class="btn waves-effect waves-light btn-large red darken-2 modal-trigger"><i class="material-icons left">note_add</i>
					 	Getting Started</button>
				      </div>
				    </div>
			  	</div>
		 	</div>


			
		</div>



	<!-- Modal Structure -->
		  <div id="modal1" class="modal">
		  <form method="post">	
		    <div class="modal-content">
		      <h4><img  id="modal-logo" src="images/logo.png"></h4>
		      <hr>
		      <div class="row">
			    <form class="col s12">
			      <div class="row">
			        <div class="col s12">
			          <h6>Please Subscribe</h6>
			          <div class="input-field col s12">
					      <input class="with-gap" name="RegChoice" type="radio" id="test1" value="0" checked/>
					      <label for="test1" title="Premium users">Premium</label>
					    </div>
					    <div class="input-field col s12">
					      <input class="with-gap" name="RegChoice" type="radio"  value="1" />
					      <label for="test2" title="30 Days trial">Trial (30 Days)</label>
					    </div>
			        </div>
			       </div>
			    </form>
			  </div>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn red darken-2">Subscribe</a>
		      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
		    </div>
		    </form>
		  </div>

		  <?php 	
		if(isset($_POST['sumit']))
		{
			if($_POST['RegChoice'] == 1)
			{
				header('Location: sp-page.php');
				exit();
			}
			else if($_POST['RegChoice'] == 0)
			{
				header('Location: index.php');
				exit();
			}
		}
 ?>

		  <div id="modal2" class="modal">
		    <div class="modal-content">
		      <h4><img  id="modal-logo" src="images/logo.png"></h4>
		      <hr>
		      <div class="row">
			    <form class="col s12">
			      <div class="row">
			        <div class="col s12">
			          <h6>To unlock this feature. Please Subscribe.</h6>
			          <div class="input-field col s12">
					      <input class="with-gap" name="RegChoice" type="radio" id="test1" value="0" checked/>
					      <label for="test1" title="Premium users">Premium</label>
					    </div>
					    <div class="input-field col s12">
					      <input class="with-gap" name="RegChoice" type="button" id="test2" value="1" onclick="subscriptionforTrail()"/>
					      <label for="test2" title="30 Days trial">Trial (30 Days)</label>
					    </div>
			        </div>
			       </div>
			    </form>
			  </div>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn red darken-2" name="sumit">Subscribe</a>
		      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
		    </div>
		  </div>

	</body>
	<script type="text/javascript">
	

		 $(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal-trigger').leanModal();
		  });
		 	$(document).ready(function(){
		    	$(".button-collapse").sideNav();
		  	});
			
			$('#test1').click(function(){
				window.location.href="#";
			});
		
			
		</script>

</html>


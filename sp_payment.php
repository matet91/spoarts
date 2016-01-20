<!DOCTYPE html>
<html>
	<head>
		<title>Service Provider </title>
	</head>
	
	<body>
	<?php include "sp-landing-header.php"; ?>


	<div class="row">
			<div class="col s2">
		    	<div class="section">
			 	  	
				 	  <!-- Left aligned menu below button -->
				 	  <div class="row">
					 	  <div class="collection z-depth-1">
					 	  	<div class="collection-item">
								<div class="container">
				 	  			<div class="profile-pic">
						    		<img class="z-depth-1" src="images/propic.png"><a href="#!" class="grey-text text-darken-3" >Cris Arnold</a>
						  		</div>
				 	  		</div>					 	  		
					 	  	</div>
					       	<a href="sp-login.php" class="collection-item"><i class="material-icons left">person</i>Profile</a>
					       	<a href="sp-page.php" class="collection-item"><i class="material-icons left">description</i>Page</a>
					        <a href="sp-reservations.php" class="collection-item"><i class="material-icons left">book</i>Reservations</a>
					        <a href="sp_enrollment.php" class="collection-item"><i class="material-icons left">check_circle</i>Enrolled clients</a>
					        <a href="#!" class="collection-item"><i class="material-icons left">notifications_none</i>News<span class="new badge">4</span></a>
					        <a href="sp_payment.php" class="collection-item active"><i class="material-icons left">chrome_reader_mode</i>My payment</a>
					        
					      </div>
				      </div>
			  	</div>
		 	</div>



		 	<div class="col s10">
		    	<div class="section">
			 	  	<div class="card-panel">
				 	  <!-- Left aligned menu below button -->
				 	  <div class=" with-header">
				 	  <h5>Payment Log</h5>
				 	  <hr>
				 	  </div>
				    </div>

				    <div class="card-panel">
				 	  <!-- Left aligned menu below button -->
				 	  <div class=" with-header">
					 	  <div class="row">
						    <form class="col s12">
						      <div class="row">
						        <div class="input-field col s6">
						       	  <p>Clinic Name</p>
						          <input type="text" disabled>
						        </div>
						        <div class="input-field col s6">
						       	  <p>Owner Name</p>
						          <input type="text" disabled>
						        </div>

						        <div class="input-field col s6">
						       	  <p>Date Paid</p>
						          <input type="text" disabled>
						        </div>

						        <div class="input-field col s6">
						       	  <p>Date Expire</p>
						          <input type="text" disabled>
						        </div>

						        <div class="input-field col s12">
						       	  <p>Amount paid in words</p>
						          <input type="text" disabled>
						        </div>
						      </div>
						    </form>
						  </div>

				 	  </div>
				    </div>
			  	</div>
		 	</div>

			
		</div>

	

	</body>
	<script type="text/javascript">
		 $(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal-trigger').leanModal();
		  });

	</script>
</html>
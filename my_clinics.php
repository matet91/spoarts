<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
	</head>
	<body>
		<?php include "client-header.php"; ?>
		<div class="row">
			<div class="col s12">
		    	<div class="section">
			 	  	<div id="myInterest" class="">
			    <div class="">
			      <h5><i class="material-icons left">favorite</i>My Interests</h5><hr>
			      <div class="row">
				    <form class="col s12">

				    <div class="row col s6">
				    	<ul class="collection with-header">
				        <li class="collection-header"><h5><i class="material-icons left">color_lens</i>Arts</h5></li>
				        	<li class="collection-item">
				        	<input type="checkbox" class="filled-in" id="ballroom" checked="checked" />
								<label for="ballroom" class="black-text">Ballroom Dancing</label>
							</li>
				        	<li class="collection-item">
				        	<input type="checkbox" class="filled-in" id="zumba" />
							<label for="zumba" class="black-text">Zumba</label>
							</li>
							<li class="collection-item">
				        	<input type="checkbox" class="filled-in" id="piano" />
								<label for="piano" class="black-text">Piano Lesson</label>
							</li>
							<li class="collection-item">
				        	<input type="checkbox" class="filled-in" id="drum" />
								<label for="drum" class="black-text">Drum Lesson</label>
							</li>
							<li class="collection-item">
				        	<input type="checkbox" class="filled-in" id="singing" />
								<label for="singing" class="black-text">Singing</label>
							</li>
							<li class="collection-item">
				        	<input type="checkbox" class="filled-in" id="painting" />
								<label for="painting" class="black-text">Painting</label>
							</li>
		      			</ul>
				    </div>


				     <div class="row col s6">
				    	<ul class="collection with-header">
				        <li class="collection-header"><h5><i class="material-icons left">golf_course</i>Sports</h5></li>
					        <li class="collection-item">
					        	<input type="checkbox" class="filled-in" id="taekwondo" />
  								<label for="taekwondo" class="black-text">Taekwondo</label>
  							</li>
					        <li class="collection-item">
					        	<input type="checkbox" class="filled-in" id="basket" />
  								<label for="basket" class="black-text">Basketball</label>
  							</li>
  							<li class="collection-item">
					        	<input type="checkbox" class="filled-in" id="volley" />
  								<label for="volley" class="black-text">Volleyball</label>
  							</li>
  							<li class="collection-item">
					        	<input type="checkbox" class="filled-in" id="tenis" />
  								<label for="tenis" class="black-text">Tennis</label>
  							</li>
  							<li class="collection-item">
					        	<input type="checkbox" class="filled-in" id="soccer" />
  								<label for="soccer" class="black-text">Soccer</label>
  							</li>
  							<li class="collection-item">
					        	<input type="checkbox" class="filled-in" id="badminton" />
  								<label for="badminton" class="black-text">Badminton</label>
  							</li>
		      			</ul>
				    </div>

				    </form>
				  </div>
			    </div>
			    <div class="right">
			      <a href="#!" class=" waves-effect waves-green btn">Save</a>
			    </div>
			 </div>
			  	</div>
		 	</div>
		</div>
	</body>
</html>


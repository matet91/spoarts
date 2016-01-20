<?php 	$id = ''; if(isset($_SESSION['user_id'])) { $id = $_SESSION['user_id']; } ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<script>
				window.onload=function()
				{
					var url = "controller/dataController.php?action=getImageFromGallary&id="+<?php echo $id; ?>;
					$.getJSON(url,function(result){

						if(result!="No image")
						{
							for (var i = 0; i < result.length; i++) 
							{
								var image = result[i];
								displaygallary(image);	
								console.log(image.gal_name);

							};
								function displaygallary(image)
								{
									
									$('#gallary_display').append(
										'<div class="img">'
										+'<img class="materialboxed" data-caption="Caption here!!!" width="274" height="200" src="data:image;base64,'+image.gal_image+'">'
				 						+'<div class="act center"> <a href="#" class="btn red" onclick="deleteFromGalary('+image.gal_id+')">Delete</a> </div>'
										+'</div>'
										);
								}
						}
						else
						{
							alert(result);

						}
					});
				};
		</script>
		</head>
		<body>
		<div class="card-panel">
			<p class="right-align">
		      	<a href="#addPicturToGallary" class="btn-floating tooltipped modal-trigger" data-position="bottom" data-delay="50" 
		      	data-tooltip="Add picture to gallary" style="border-radius:150px"><i class="material-icons left">add</i></a>
				</a>

		   </p>
					<!--MODAL addPicturToGallary picture-->
		  		 	<div id="addPicturToGallary" class="modal">
		  		 	<form method="post" enctype="multipart/form-data">
					<div class="row">
					
						<div class="input-field col s12">
				          <i class="material-icons prefix">web_asset</i>
				          <input id="icon_prefix" type="text" class="validate" name="gal_title">
				          <label for="icon_prefix">Title</label>
				        </div>

					    <div class="file-field input-field col s12">
					      <div class="btn">
					        <span>Image</span>
					        <input type="file" name="gala_image">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text" placeholder="Upload more pictures to gallery">
					      </div>
					    </div>
					    <div class="right-align">
					    	<button type="submit" class="btn text-white"  name="upload_gallary" value="Submit"></button>
					    </div>
					   
				    </div>
				 </form>
					</div>
		</div>	

		<div class="card-panel row">
			<div id="gallary_display"></div>
		</div>	
		<?php

			if(isset($_POST['upload_gallary']))
			{
				
				if(!getimagesize($_FILES['gala_image']['tmp_name'])==FALSE)
				{
						include 'controller/uploadimage.php';
						$title = '';
						$image = addslashes($_FILES['gala_image']['tmp_name']);
						$name = addslashes($_FILES['gala_image']['name']);
						$image = file_get_contents($image);
						$image = base64_encode($image);
						saveToGallary($name,$image,$title,$id);
						unset($_POST['upload_gallary']);
						unset($_POST['gala_image']);
						return;
				}
			}
		?>
		</body>
		</html>


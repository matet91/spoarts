
					<h5>Your Information</h5><hr>
				    	<div class="right-align">
				    		<a class="btn modal-trigger" href="#editSPProfile"><i class="material-icons left">mode_edit</i>Edit</a>
				    	</div> <br>
			    	<div class="row">
			    		<div class="col s6">
					    	<p>Clinic Name</p>
					    	<input type="text" disabled value="<?php echo $spname; ?>">
			    		</div>

			    		<div class="col s6">
					    	<p>Clinic Description</p>
					    	<input type="text" disabled value="<?php echo $spname; ?>">
			    		</div>

			    		<div class="col s12">
					    	<p>Clinic Address</p>
					    	<input type="text" disabled value="<?php echo $spaddress; ?>">
			    		</div>

			    		<div class="col s6">
					    	<p>Clinic Owner</p>
					    	<input type="text" disabled value="<?php echo $spowner; ?>">
			    		</div>

			    		<div class="col s6">
					    	<p>Clinic Type</p>
					    	<input type="text" disabled value="<?php echo $sptype; ?>">
			    		</div>

			    		<div class="col s6">
					    	<p>Email</p>
					    	<input type="text" disabled value="<?php echo $spemail; ?>">
			    		</div>

			    		<div class="col s6">
					    	<p>Contacts</p>
					    	<input type="text" disabled value="<?php echo $spcontact; ?>">
			    		</div>
			    	</div>




			<!--Modal for Edit profile-->
		  	<div id="editSPProfile1" class="modal">
			    <div class="modal-content">
			      <h4 class="center"><img  id="modal-logo" src="images/logo.png"></h4>
			      <hr>
			      <div class="row">
				    <form class="col s12">

				      <div class="row">
				        <div class="input-field col s12">
				          <i class="material-icons prefix">home_circle</i>
				          <input class="icon_prefix" id="espname" type="text" class="validate" required value="<?php echo $spname; ?>"><span id="esp1"></span>
				          <label for="icon_prefix">Clinic Name</label>
				        </div>
				       </div>

				       <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">description_circle</i>
					          <input type="text" id="espdescription" required value="<?php echo $spname; ?>"><span id="esp2"></span>
					          <label>Clinic Description</label>
					        </div>
				        </div>

				        <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">edit_location_circle</i>
					          <input type="text" id="espaddress" required value="<?php echo $spaddress; ?>"><span id="esp3"></span>
					          <label>Clinic Address</label>
					        </div>
				        </div>

				        <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">account_circle</i>
					          <input type="text" id="espowner" required value="<?php echo $spowner; ?>"><span id="esp4"></span>
					          <label>Clinic Owner</label>
					        </div>
				        </div>
				       
				        <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">email_circle</i>
					          <input type="email" id="espemail" required value="<?php echo $spemail; ?>"><span id="esp5"></span>
					          <label>Email</label>
					        </div>
				        </div>

				        <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">phone_circle</i>
					          <input type="text" id="espcontact" required value="<?php echo $spcontact; ?>"><span id="esp6"></span>
					          <label>Contacts</label>
					        </div>
				      </div>

				    </form>
				  </div>
			    </div>
			    <div class="modal-footer">
			      <a href="#" class=" modal-action waves-effect waves-green btn-flat" onclick="editSPDetails()">Save</a>
			      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
			    </div>
			</div>
			<!--end for Modal-->
		
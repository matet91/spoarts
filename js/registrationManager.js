  $(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal-trigger').leanModal();
		  });

		  $(document).ready(function(){
		    $(".button-collapse").sideNav();
		  });
       
       	  $(document).ready(function() {
		    $('select').material_select();
		  });
		 		  
/////////////////////////////////// CLIENT REGISTRATION ////////////////////////////////////////
	function reg_onclick_register()
	{
		   		
		   			
		   	if($('#reg_first_name').val()=="")
		   	{
		   		$('#rc_e1').empty();
		   		$('#rc_e2').empty();
		   		$('#rc_e3').empty();
		   		$('#rc_e4').empty();
		   		$('#rc_e5').empty();
		   		$('#rc_e6').empty();
		   		$('#rc_e7').empty();
		   		$('#rc_e8').empty();
		   		$('#rc_e9').empty();		   		
		   		$('#rc_e1').html('Firstname is required!').css('color', 'red');
		   		$('#reg_first_name').focus();
		   		return;
		   	}
		   	else if($('#reg_last_name').val()=="")
		   	{
		   		$('#rc_e1').empty();
		   		$('#rc_e2').empty();
		   		$('#rc_e3').empty();
		   		$('#rc_e4').empty();
		   		$('#rc_e5').empty();
		   		$('#rc_e6').empty();
		   		$('#rc_e7').empty();
		   		$('#rc_e8').empty();
		   		$('#rc_e9').empty();
		   		$('#rc_e2').html('Lastname is required!').css('color', 'red');
		   		$('#reg_last_name').focus();
		   		return;
		   	}
		   	else if($('#reg_email').val()=="")
		   	{
		   		$('#rc_e1').empty();
		   		$('#rc_e2').empty();
		   		$('#rc_e3').empty();
		   		$('#rc_e4').empty();
		   		$('#rc_e5').empty();
		   		$('#rc_e6').empty();
		   		$('#rc_e7').empty();
		   		$('#rc_e8').empty();
		   		$('#rc_e9').empty();
		   		$('#rc_e3').html('Email is required!').css('color', 'red');
		   		$('#reg_email').focus();
		   		return;
		   	}
		   	else if($('#reg_username').val()=="")
		   	{
		   		$('#rc_e1').empty();
		   		$('#rc_e2').empty();
		   		$('#rc_e3').empty();
		   		$('#rc_e4').empty();
		   		$('#rc_e5').empty();
		   		$('#rc_e6').empty();
		   		$('#rc_e7').empty();
		   		$('#rc_e8').empty();
		   		$('#rc_e9').empty();
		   		$('#rc_e4').html('Username is required!').css('color', 'red');
		   		$('#reg_username').focus();
		   		return;
		   	}

		   	else if($('#reg_password').val()=="")
		   	{
		   		$('#rc_e1').empty();
		   		$('#rc_e2').empty();
		   		$('#rc_e3').empty();
		   		$('#rc_e4').empty();
		   		$('#rc_e5').empty();
		   		$('#rc_e6').empty();
		   		$('#rc_e7').empty();
		   		$('#rc_e8').empty();
		   		$('#rc_e9').empty();
		   		$('#rc_e5').html('Password is required!').css('color', 'red');
		   		$('#reg_password').focus();
		   		return;
		   	}
		   	else if($('#reg_confirm_password').val()=="")
		   	{
		   		$('#rc_e1').empty();
		   		$('#rc_e2').empty();
		   		$('#rc_e3').empty();
		   		$('#rc_e4').empty();
		   		$('#rc_e5').empty();
		   		$('#rc_e6').empty();
		   		$('#rc_e7').empty();
		   		$('#rc_e8').empty();
		   		$('#rc_e9').empty();
		   		$('#rc_e6').html('Confirm-password is required!').css('color', 'red');
		   		$('#reg_confirm_password').focus();
		   		return;
		   	}
		   /*	else if($('#reg_confirm_password').val()!=$('#reg_password').val())
		   	{
		   		$('#rc_e1').empty();
		   		$('#rc_e2').empty();
		   		$('#rc_e3').empty();
		   		$('#rc_e4').empty();
		   		$('#rc_e5').empty();
		   		$('#rc_e6').empty();
		   		$('#rc_e7').empty();
		   		$('#rc_e8').empty();
		   		$('#rc_e9').empty();
		   		$('#rc_e6').html('Password mismatch!').css('color', 'red');
		   		$('#reg_confirm_password').focus();
		   		return;
		   	}*/
		   	else if($('#reg_bdate').val()=="")
		   	{
		   		$('#rc_e1').empty();
		   		$('#rc_e2').empty();
		   		$('#rc_e3').empty();
		   		$('#rc_e4').empty();
		   		$('#rc_e5').empty();
		   		$('#rc_e6').empty();
		   		$('#rc_e7').empty();
		   		$('#rc_e8').empty();
		   		$('#rc_e9').empty();
		   		$('#rc_e7').html('Birthdate is required!').css('color', 'red');
		   		$('#reg_bdate').focus();
		   		return;
		   	}
		   	else if($('#reg_address').val()=="")
		   	{
		   		$('#rc_e1').empty();
		   		$('#rc_e2').empty();
		   		$('#rc_e3').empty();
		   		$('#rc_e4').empty();
		   		$('#rc_e5').empty();
		   		$('#rc_e6').empty();
		   		$('#rc_e7').empty();
		   		$('#rc_e8').empty();
		   		$('#rc_e9').empty();
		   		$('#rc_e8').html('Address is required!').css('color', 'red');
		   		$('#reg_address').focus();
		   		return;
		   	}
		   	else if($('#reg_mobile').val()=="")
		   	{
		   		$('#rc_e1').empty();
		   		$('#rc_e2').empty();
		   		$('#rc_e3').empty();
		   		$('#rc_e4').empty();
		   		$('#rc_e5').empty();
		   		$('#rc_e6').empty();
		   		$('#rc_e7').empty();
		   		$('#rc_e8').empty();
		   		$('#rc_e9').empty();
		   		$('#rc_e9').html('Contact number is required!').css('color', 'red');
		   		$('#reg_mobile').focus();
		   		return;
		   	}
		   	else
		   	{
		   		var url = "controller/registrationController.php?action=getUsername1";
		   		var data = 
		   		{
		   			"uname":$('#reg_username').val()
		   		};

		   		$.post(url,data,function(result){
		   			if(result == true)
		   			{
		   				$('#rc_e1').empty();
		   				$('#rc_e2').empty();
		   				$('#rc_e3').empty();
		   				$('#rc_e4').empty();
				   		$('#rc_e5').empty();
				   		$('#rc_e6').empty();
				   		$('#rc_e7').empty();
				   		$('#rc_e8').empty();
				   		$('#rc_e9').empty();
				   		$('#rc_e4').html('Username already exist. try another username.').css('color', 'red');
		   				$('#reg_username').focus();
		   				return;
		   			}
		   			else
		   			{
		   				var data = 
						{
							"reg_first_name":$('#reg_first_name').val(),
							"reg_last_name":$('#reg_last_name').val(),
							"reg_email":$('#reg_email').val(),
							"reg_username":$('#reg_username').val(),
							"reg_password":$('#reg_password').val(),
							"reg_bdate":$('#reg_bdate').val(),
							"reg_address":$('#reg_address').val(),
							"reg_mobile":$('#reg_mobile').val()
						};
						var url = "controller/registrationController.php?action=clientregister";
						$.post(url,data,function(result)
						{
							alert(result);
							$('#rc_e1').empty();
			   				$('#rc_e2').empty();
			   				$('#rc_e3').empty();
			   				$('#rc_e4').empty();
					   		$('#rc_e5').empty();
					   		$('#rc_e6').empty();
					   		$('#rc_e7').empty();
					   		$('#rc_e8').empty();
					   		$('#rc_e9').empty();
					   		$('#reg_first_name').val("");
							$('#reg_last_name').val("");
							$('#reg_email').val("");
							$('#reg_username').val("");
							$('#reg_password').val("");
							$('#reg_confirm_password').val("");
							$('#reg_bdate').val("");
							$('#reg_address').val("");
							$('#reg_mobile').val("");
							var host = "index.php";
							window.location.href=host; 
						});
		   			}
				});
		   	}
		   			
	}
/////////////////////////////////////// UPDATE CLIENT PROFILE //////////////////////////////

	function updateClientProfile()
	{	
		 if($('#ce_fname').val()=="")
		 {
		 	$('#cee_1').empty();
		 	$('#cee_2').empty();
		 	$('#cee_3').empty();
		 	$('#cee_4').empty();
		 	$('#cee_5').empty();
		 	$('#cee_6').empty();
		 	$('#cee_1').html("Firstname is empty!").css("color","red");
		 	$('#ce_fname').focus();
		 	return;
		 }
		 else if($('#ce_lname').val()=="")
		 {
		 	$('#cee_1').empty();
		 	$('#cee_2').empty();
		 	$('#cee_3').empty();
		 	$('#cee_4').empty();
		 	$('#cee_5').empty();
		 	$('#cee_6').empty();
		 	$('#cee_2').html("Lastname is empty!").css("color","red");
		 	$('#ce_lname').focus();
		 	return;
		 }
		 else if($('#ce_uname').val()=="")
		 {
		 	$('#cee_1').empty();
		 	$('#cee_2').empty();
		 	$('#cee_3').empty();
		 	$('#cee_4').empty();
		 	$('#cee_5').empty();
		 	$('#cee_6').empty();
		 	$('#cee_3').html("Usename is empty!").css("color","red");
		 	$('#ce_uname').focus();
		 	return;
		 }
		 else if($('#ce_address').val()=="")
		 {
		 	$('#cee_1').empty();
		 	$('#cee_2').empty();
		 	$('#cee_3').empty();
		 	$('#cee_4').empty();
		 	$('#cee_5').empty();
		 	$('#cee_6').empty();
		 	$('#cee_4').html("Address is empty!").css("color","red");
		 	$('#ce_address').focus();
		 	return;
		 }
		 else if($('#ce_contact').val()=="")
		 {
		 	$('#cee_1').empty();
		 	$('#cee_2').empty();
		 	$('#cee_3').empty();
		 	$('#cee_4').empty();
		 	$('#cee_5').empty();
		 	$('#cee_6').empty();
		 	$('#cee_5').html("Contact number is empty!").css("color","red");
		 	$('#ce_contact').focus();
		 	return;
		 }
		 else if($('#ce_email').val()=="")
		 {
		 	$('#cee_1').empty();
		 	$('#cee_2').empty();
		 	$('#cee_3').empty();
		 	$('#cee_4').empty();
		 	$('#cee_5').empty();
		 	$('#cee_6').empty();
		 	$('#cee_6').html("Email number is empty!").css("color","red");
			$('#ce_email').focus();
		 	return;

		 }
		 else
		 {
		 		var url = "controller/registrationController.php?action=getUsernameforUpdate";
		   		var data = 
		   		{
		   			"uname":$('#ce_uname').val()
		   		};

		   		$.post(url,data,function(result)
		   		{
		   			if(result == true)
		   			{
		 				$('#cee_1').empty();
					 	$('#cee_2').empty();
					 	$('#cee_3').empty();
					 	$('#cee_4').empty();
					 	$('#cee_5').empty();
					 	$('#cee_6').empty();
				   		$('#cee_3').html('Username already exist!. try another username.').css('color', 'red');
		   				$('#ce_uname').focus();
		   				return;
		   			}
		   			else
		   			{
					 	var url = "controller/registrationController.php?action=updateClientProfile";
					 	var data = 
					 	{
					 		"ce_fname":$('#ce_fname').val(),
					 		"ce_lname":$('#ce_lname').val(),
					 		"ce_address":$('#ce_address').val(),
					 		"ce_email":$('#ce_email').val(),
					 		"ce_uname":$('#ce_uname').val(),
					 		"ce_contact":$('#ce_contact').val()
					 	};
					 	$.post(url,data,function(result){
					 		alert(result);
							 window.location.href="my_client_profile.php";
					 	});
		 
					 }
				 });
			}

	}	
////////////////////////////////////// CLIENT CHANGE PASSWORD //////////////////////////////
function clientChangePassword()
{
	if($('#cpold').val()=="")
	{
		$('#cpe1').empty();
		$('#cpe2').empty();
		$('#cpe3').empty();
		$('#cpe1').html("Old password is empty!").css("color","red");
		$('#cpold').focus();
		return;
	}
	else if($('#cpnew').val()=="")
	{
		$('#cpe1').empty();
		$('#cpe2').empty();
		$('#cpe3').empty();
		$('#cpe2').html("New password is empty!").css("color","red");
		$('#cpnew').focus();
		return;
	}
	else if($('#cpconew').val()=="")
	{
		$('#cpe1').empty();
		$('#cpe2').empty();
		$('#cpe3').empty();
		$('#cpe3').html("Confirm password is empty!").css("color","red");
		$('#cpconew').focus();
		return;
	}
	else if($('#cpconew').val()!=$('#cpnew').val())
	{
		$('#cpe1').empty();
		$('#cpe2').empty();
		$('#cpe3').empty();
		$('#cpe3').html("New password mismatch!").css("color","red");
		$('#cpconew').focus();
		return;
	}	
	else
	{
		var url = "controller/registrationController.php?action=checkClientPassword";
		var data = 
		{
			"cpold":$('#cpold').val()
		};
		$.post(url,data,function(result){
			if(result == true)
			{
				var url = "controller/registrationController.php?action=clientUpdatePassword";
				var data = 
				{
					"cpconew":$('#cpconew').val()
				};
				$.post(url,data,function(result2){
					alert(result2);
				});
				$('#changePassword').closeModal();
				$('#cpe1').empty();
				$('#cpe2').empty();
				$('#cpe3').empty();
				$('#cpold').val("");
				$('#cpnew').val("");
				$('#cpconew').val("");	
			}
			else
			{
				$('#cpe1').empty();
				$('#cpe2').empty();
				$('#cpe3').empty();
				$('#cpe1').html("Old password mismatch!").css("color","red");
				$('#cpold').focus();
				return;
			}
		});
	}		
}			   	
/////////////////////////////////////// USER LOGIN /////////////////////////////////////////
function user_login_validate(){
	var data = 
	{
		"user_login_username":$('#user_login_username').val(),
		"user_login_password":$('#user_login_password').val()
	};
	var url = "controller/registrationController.php?action=userlogin";
	$.post(url,data,function(result)
	{
		if(result == 0)
		{
			/*var url2 = "controller/dataController.php?action=getInterestID";
			$.getJSON(url2,function(result2){
				if(result2 == 1)
				{
					window.location.href= "client-profile.php";
				}
				else
				{
					window.location.href= "my_interests.php";
				}	
			});*/
	window.location.href="client-profile.php";			
		}
		else if(result == 1)
		{
			window.location.href= "sp-login.php";
		}
		else
		{
			$('#user_login_username').val("");
			$('#user_login_password').val("");
		alert("Incorrect username or password.");

	}
	});

}	
/////////////////////// CLIENT LOGOUT /////////////////////////////////////////////////
		function client_logout()
		{
			var url = "controller/registrationController.php?action=clientLogout";
			$.get(url,function(){
				window.location.href="index.php";
			});
		}

/////////////////////// SERVICE PROVIDER OWNER REGISTRATION ///////////////////////////
function service_provider_registration()
{
		if($('#own_reg_first_name').val()=="")
		   	{
		   		$('#sp_e1').empty();
				$('#sp_e2').empty();
				$('#sp_e3').empty();
		 		$('#sp_e4').empty();
		  		$('#sp_e5').empty();
		  		$('#sp_e6').empty();
		  		$('#sp_e7').empty();
		  		$('#sp_e8').empty();
				$('#sp_e9').empty();
		   		$('#sp_e1').html('Owner name is required!').css('color', 'red');
		   		$('#own_reg_first_name').focus();
		   		return;
		   	}
		   	else if($('#own_reg_club_name').val()=="")
		   	{
		   		$('#sp_e1').empty();
		  		$('#sp_e2').empty();
		   		$('#sp_e3').empty();
		  		$('#sp_e4').empty();
				$('#sp_e5').empty();
		 		$('#sp_e6').empty();
				$('#sp_e7').empty();
				$('#sp_e8').empty();
				$('#sp_e9').empty();
		   		$('#sp_e2').html('Club name is required!').css('color', 'red');
		   		$('#own_reg_club_name').focus();
		   		return;
		   	}
		   	else if($('#own_reg_address').val()=="")
		   	{
		 		$('#sp_e1').empty();
				$('#sp_e2').empty();
				$('#sp_e3').empty();
				$('#sp_e4').empty();
				$('#sp_e5').empty();
				$('#sp_e6').empty();
		   		$('#sp_e7').empty();
		 		$('#sp_e8').empty();
		  		$('#sp_e9').empty();
		   		$('#sp_e3').html('Address is required!').css('color', 'red');
		   		$('#own_reg_address').focus();
		   		return;
		   	}
		   	else if($('#own_reg_type').val()=="")
		   	{
		 		$('#sp_e1').empty();
				$('#sp_e2').empty();
				$('#sp_e3').empty();
				$('#sp_e4').empty();
				$('#sp_e5').empty();
				$('#sp_e6').empty();
		   		$('#sp_e7').empty();
		 		$('#sp_e8').empty();
		  		$('#sp_e9').empty();
		   		$('#sp_e4').html('Club type is required!').css('color', 'red');
		   		$('#sp_e4').focus();
		   		return;
		   	}
		   	else if($('#own_reg_email').val()=="")
		   	{
		 		$('#sp_e1').empty();
				$('#sp_e2').empty();
				$('#sp_e3').empty();
				$('#sp_e4').empty();
				$('#sp_e5').empty();
				$('#sp_e6').empty();
		   		$('#sp_e7').empty();
		 		$('#sp_e8').empty();
		  		$('#sp_e9').empty();
		   		$('#sp_e5').html('Email is required!').css('color', 'red');
		   		$('#own_reg_email').focus();
		   		return;
		   	}
		   	else if($('#own_reg_username').val()=="")
		   	{
		 		$('#sp_e1').empty();
				$('#sp_e2').empty();
				$('#sp_e3').empty();
				$('#sp_e4').empty();
				$('#sp_e5').empty();
				$('#sp_e6').empty();
		   		$('#sp_e7').empty();
		 		$('#sp_e8').empty();
		  		$('#sp_e9').empty();
		   		$('#sp_e6').html('Username is required!').css('color', 'red');
		   		$('#own_reg_username').focus();
		   		return;
		   	}
		   	else if($('#own_reg_password').val()=="")
		   	{
		 		$('#sp_e1').empty();
				$('#sp_e2').empty();
				$('#sp_e3').empty();
				$('#sp_e4').empty();
				$('#sp_e5').empty();
				$('#sp_e6').empty();
		   		$('#sp_e7').empty();
		 		$('#sp_e8').empty();
		  		$('#sp_e9').empty();
		   		$('#sp_e7').html('Password is required!').css('color', 'red');
		   		$('#own_reg_password').focus();
		   		return;
		   	}
		   	else if($('#own_reg_confirm_password').val()=="")
		   	{
		 		$('#sp_e1').empty();
				$('#sp_e2').empty();
				$('#sp_e3').empty();
				$('#sp_e4').empty();
				$('#sp_e5').empty();
				$('#sp_e6').empty();
		   		$('#sp_e7').empty();
		 		$('#sp_e8').empty();
		  		$('#sp_e9').empty();
		   		$('#sp_e8').html('Confirm password is required!').css('color', 'red');
		   		$('#own_reg_confirm_password').focus();
		   		return;
		   	}
		   	else if($('#own_reg_telephone').val()=="")
		   	{
		 		$('#sp_e1').empty();
				$('#sp_e2').empty();
				$('#sp_e3').empty();
				$('#sp_e4').empty();
				$('#sp_e5').empty();
				$('#sp_e6').empty();
		   		$('#sp_e7').empty();
		 		$('#sp_e8').empty();
		  		$('#sp_e9').empty();
		   		$('#sp_e9').html('Contact number is required!').css('color', 'red');
		   		$('#own_reg_telephone').focus();
		   		return;
		   	}
		   else
		   {
		  		var url = "controller/registrationController.php?action=getUsername1";
		   		var data = 
		   		{
		   			"uname":$('#own_reg_username').val()
		   		};

		   		$.post(url,data,function(result)
		   		{
		   			if(result == true)
		   			{
				 		$('#sp_e1').empty();
						$('#sp_e2').empty();
						$('#sp_e3').empty();
						$('#sp_e4').empty();
						$('#sp_e5').empty();
						$('#sp_e6').empty();
				   		$('#sp_e7').empty();
				 		$('#sp_e8').empty();
				  		$('#sp_e9').empty();
		  				$('#sp_e6').html('Username already exist. try another username.').css('color', 'red');
		   				$('#own_reg_username').focus();
		   				return;
		   				
		   			}
		   			else
		   			{
		   				
						var data =
						{
							"own_reg_first_name":$('#own_reg_first_name').val(),
							"own_reg_club_name":$('#own_reg_club_name').val(),
							"own_reg_address":$('#own_reg_address').val(),
							"own_reg_email":$('#own_reg_email').val(),
							"own_reg_type":$('#own_reg_type').val(),
							"own_reg_username":$('#own_reg_username').val(),
							"own_reg_password":$('#own_reg_password').val(),
							"own_reg_telephone":$('#own_reg_telephone').val(),
							"own_reg_phone":$('#own_reg_phone').val()
						};
						var url = "controller/registrationController.php?action=serviceProvregistration";
						$.post(url,data,function(result)
						{
							alert(result);
							$('#sp_e1').empty();
					   		$('#sp_e2').empty();
					   		$('#sp_e3').empty();
					   		$('#sp_e4').empty();
					   		$('#sp_e5').empty();
					   		$('#sp_e6').empty();
					   		$('#sp_e7').empty();
					   		$('#sp_e8').empty();
					   		$('#sp_e9').empty();
							$('#own_reg_first_name').val("");
							$('#own_reg_club_name').val("");
							$('#own_reg_address').val("");
							$('#own_reg_email').val("");
							$('#own_reg_type').val("");
							$('#own_reg_username').val("");
							$('#own_reg_password').val("");
							$('#own_reg_confirm_password').val("");
							$('#own_reg_telephone').val("");
							$('#own_reg_phone').val("");

						});
				 	}
				});
  			}
}
///////////////////////////////////////////////EDIT SERVICE PROVIDER DETAILS //////////////////////////////////
function editSPDetails()
{
	if($('#espowner').val()=="")
	{
		$('#esp1').empty();
		$('#esp2').empty();
		$('#esp3').empty();
		$('#esp4').empty();
		$('#esp5').empty();
		$('#esp6').empty();
		$('#esp7').empty();
		$('#esp8').empty();		
		$('#esp1').html("Owner name is empty!").css("color","red");
		$('#espowner').focus();
		return;
	}

	else if($('#espname').val()=="")
	{
		$('#esp1').empty();
		$('#esp2').empty();
		$('#esp3').empty();
		$('#esp4').empty();
		$('#esp5').empty();
		$('#esp6').empty();
		$('#esp7').empty();
		$('#esp8').empty();		
		$('#esp2').html("Owner name is empty!").css("color","red");
		$('#espname').focus();
		return;
	}
	else if($('#espusername').val()=="")
	{
		$('#esp1').empty();
		$('#esp2').empty();
		$('#esp3').empty();
		$('#esp4').empty();
		$('#esp5').empty();
		$('#esp6').empty();
		$('#esp7').empty();
		$('#esp8').empty();		
		$('#esp3').html("Username is empty!").css("color","red");
		$('#espusername').focus();
		return;
	}	
	else if($('#esptype').val()=="")
	{
		$('#esp1').empty();
		$('#esp2').empty();
		$('#esp3').empty();
		$('#esp4').empty();
		$('#esp5').empty();
		$('#esp6').empty();
		$('#esp7').empty();
		$('#esp8').empty();		
		$('#esp5').html("Clinic type is empty!").css("color","red");
		$('#esptype').focus();
		return;
	}	
	
	else if($('#espusername').val()=="")
	{
		$('#esp1').empty();
		$('#esp2').empty();
		$('#esp3').empty();
		$('#esp4').empty();
		$('#esp5').empty();
		$('#esp6').empty();
		$('#esp7').empty();
		$('#esp8').empty();		
		$('#esp3').html("Username is empty!").css("color","red");
		$('#espusername').focus();
		return;
	}	
	else
	{
		var url = "controller/registrationController.php?action=editSProviderDetails";
		var data = 
		{
			"espname":$('#espname').val(),
			"espdescription":$('#espdescription').val(),
			"espaddress":$('#espaddress').val(),
			"espowner":$('#espowner').val(),
			"espemail":$('#espemail').val(),
			"espmobile":$('#espmobile').val(),
			"esptype":$('#esptype').val(),
			"espusername":$('#espusername').val(),
			"espcontact":$('#espcontact').val()
		};

		$.post(url,data,function(result){
			alert(result);

			window.location.href="sp-login.php";
		});
		
		$('#esp1').empty();
		$('#esp2').empty();
		$('#esp3').empty();
		$('#esp4').empty();
		$('#esp5').empty();
		$('#esp6').empty();
		$('#esp7').empty();
		$('#esp8').empty();		
	}	
}


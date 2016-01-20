function subscriptionforTrail()
{
	var url = "controller/dataController.php?action=subscriptionforTrail";
	$.get(url,function(result){
	alert(result);
	});
}

function deleteFromGalary(id)
{
	var url = "controller/dataController.php?action=deleteFromGalary&id="+id;
	$.get(url,function(result){
		alert(result);
		window.location.href="sp-page.php";
	});
}
$(document).ready(function(){
	$("#time_from,#time_to").datetimepicker({
		 datepicker:false,
		 formatTime: 'h:m a',
		 format: 'h:m a'
		});

	$(".chosen-select").chosen({width: "95%",max_selected_options: 4});

	//add new service/clinic
	$("#add_services").click(function(){
		add_services();
	});
});

function add_services(){
	alert("sdfsd");
	var frm_services = $("#frm_services").serializeArray();
	console.log(frm_services);	
}
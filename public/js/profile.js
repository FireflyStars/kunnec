$(document).ready(function(){
	var des = $("#des").text();
	$("#editdes").on('click',function(){
		$("#destxt").append("<textarea rows='12' cols='120' style='border-radius:none;resize:none;'>"+ des +"</textarea><button class='btn btn-info btn-sm btn-color pull-right'>Update</button>");
		$("#des").hide();
	});
});
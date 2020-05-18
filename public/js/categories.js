$(document).ready(function(){
	$("#category").on('change',function(){
		$("#subcategorytitle").css('visibility','visible');
		$("#subcategory").css('visibility','visible') ;
		var category = $("#category").val();
		var url = "http://localhost:8000/category/"+category;
		$.get(url,function(response){
			for (i = 0; i < response.length; i++) { 
  			    $("#subcategory").append("<option value="+response[i].id+">"+response[i].name+"</option>");
  			}
		});
		
	});
});
$(document).ready(function(){
  	$("#country").on("change",function(){
  	   var country = $("#country").val();
  	   var url = "http://localhost:8000/state/"+country;
       console.log(url);
  	   $.get(url,function(response){ 
            for (i = 0; i < response.length; i++) {
              console.log(response[i].name);
              $("#state").append("<option value="+response[i].id+">"+response[i].name+"</option>");
  			    }  
  	   });	 
  	});  
  	$("#state").on("change",function(){
         var state = $("#state").val();         
         var url   = "http://localhost:8000/city/"+state;
         console.log(url);
         $.get(url,function(response){
       			for (i = 0; i < response.length; i++) { 
              console.log(response[i]);
      			  $("#city").append("<option value="+response[i].id+">"+response[i].name+"</option>");
      			}
         });
  	});
    // for years ...
    var start = 1900;
    var end = new Date().getFullYear();
    for(var year = start ; year <=end; year++){
      $("#yearbirth").append("<option value='"+year+"'>"+ year +"</option>");
    }	
    // for date ..
    for (var i = 1; i <= 31; i++) {
      $("#date").append("<option value='"+i+"'>"+ i +"</option>");
    }
      // for time ..
    for (var i = 1; i <= 12; i++) {
      $("#month").append("<option value='"+i+"'>"+ i +"</option>");
    }

    $("#jtype").on('change',function(){
        var one  = $("#jtype").val();
        if( one == 'hourly'){
           console.log(one);
            $("#hourlyr").css('visibility','visible');
            $("#jobinp").attr('name','hrate');
            $("#titlejb").replaceWith('<b>Per Hour Rate</b>');
        } else {
            $("#hourlyr").css('visibility','visible');
            $("#jobinp").attr('name','salary');
            $("#titlejb").empty();
            $("#titlejb").append('<b>Salary</b>');
        }
    }); 
    
    $("[for='delete']").on('click',function(){
        var o = $(this).val();
        $("#deleteform"+ o).submit();
    }); 

    $("#date1").on('click',function(){
      $("#date1").datepicker();
    });

});
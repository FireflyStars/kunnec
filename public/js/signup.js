$(document).ready(function(){
  $('#dob').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy-mm-dd',
    icons: {
      rightIcon: '<i class="fa fa-calendar"></i>'
  }
  });
  	$("#country").on("change",function(){
       var country = $("#country").val();
       $('#state').empty();
       $('#state').append('<option value="0"> State </option>');       
  	   var url = ajaxStatesUrl+"/"+country;
  	   $.get(url,function(response){ 
        //  console.log(response.states.length);
            for (i = 0; i < response.states.length; i++) {
              state = response.states[i];
              $("#state").append("<option value="+state.id+">"+state.name+"</option>");
  			    }  
  	   });	 
  	});  
  	$("#state").on("change",function(){
         var state = $("#state").val();         
         var url   = ajaxCitiesUrl+"/"+state;
         $('#city').empty();
         $('#city').append('<option value="0"> City </option>');              
        //  console.log(url);
         $.get(url,function(response){
       			for (i = 0; i < response.cities; i++) { 
              // console.log(response[i]);
              city = response.cities[i];
      			  $("#city").append("<option value="+city.id+">"+city.name+"</option>");
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
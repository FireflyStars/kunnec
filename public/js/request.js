$(document).ready(function(){
	// its the proccess of sending request for any kunnecs member or user ..
	$("button").on('click', function(){
		// click for sending request ..
		var v = $(this).val();
		var sender = $(this).attr('user');	
		if(v == 'send'){
			// if condition  for check if user sending request ..
			$(this).html('<i class="fa fa-user-plus notify-md"></i> Cancle request');
			$(this).removeClass('btn-info'); // removing class .
			$(this).addClass('btn-danger');
			$(this).val('cancle');
		    console.log(sender); 
		    var url = "http://localhost:8000/request/"+sender;
		    
		    $.get(url,function(response){
		    	$("[req='user']").attr('req_id',response);
		    });	
		} else if(v == 'cancle'){
			// its going to cancle request ..
			$("[stat='accet']").hide(); // accept ...
			$(this).html('<i class="fa fa-user-plus notify-md"></i> Send kunnec request'); // changing button text ..
			$(this).removeClass('btn-danger'); // removing class if visble on button ..
			$(this).addClass('btn-info'); // adding class ..
			$(this).val('send'); // updatting value ..
			$(this).attr('request_id'); // getting attribute ..
			var reqid = $("[req='user']").attr('req_id'); // getting request id ..
			if(reqid == "0"){
				var reqid = $(this).attr('request_id');
			}
			var url   = "http://localhost:8000/cancle/request/"+reqid; // its generating a request for canclation ...
			$.get(url,function(response){ // sending response that task succesfull or not ..
				//console.log(response); // printing into console ..

			}); 
		} else if(v == 'accept'){
			console.log(v); // juts for checking that value is getting or not ..
			var reqid = $("[req='user']").attr('req_id'); // getting request id ..
			$("[stat='cancle']").hide(); // hiding ..
			// if not then getting id with another method which will visible ..s
			if(reqid == "0"){
				// getting value ..
				var reqid = $(this).attr('request_id');
			}
			$(this).html('<i class="fa fa-users"></i> Friends'); // changing button ..
			var url = "http://localhost:8000/accept/"+reqid; // url ..
			$.get(url,function(response){ // getting function  ..
				console.log(response); // getting value ..
			});
		}
	});
});
$(document).ready(function(){
	$("button").on("click",function(){
		var v = $(this).val();
		var s = $(this).attr('id');
		if(s == "block"){
			var url = "http://localhost:8000/frnd/status/block/"+v;
			$.get(url,function(response){
				console.log(response);
				$("#"+v).hide();
			});
		}
		if(s == "Unfriend"){
			var url = "http://localhost:8000/frnd/status/unfriend/"+v;
			$.get(url,function(response){
				console.log(response);
				$("#"+v).hide();
			});

		}
	});
});
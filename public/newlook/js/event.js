// js for event type
$(document).ready(function(){
	// ticket
    $("[ticket='type']").on('click',function(){
     	var v = $(this).val();
    	if(v != "free") {
    		//alert("as");
    		$("#ptype").css('display','inline');
    	} else {
    		$("#ptype").css('display','none');
    	}
    });

    // add options ..
    var n = 0;
    $("#addp").on('click',function(){
  		n = n +1;
    	$("#optype").append("<tr r="+n+"><td><input class='form-control form-control-sm' type='text' placeholder='Option Name' value='' name='opt1[]'></td><td><input class='form-control form-control-sm' type='text' placeholder='Price' value='' name='price1[]'  /></td><td class='text-center align-middle'><div class='custom-control custom-radio'><input class='custom-control-input' id='customRadio1' value='0' type='radio' name='optdef[]' checked/><label class='custom-control-label' for='customRadio1'></label></div></td><td class='text-center align-middle'><button type='button' class='btn btn-link btn-sm' p='del' n="+n+"><span class='fas fa-times-circle text-danger' data-fa-transform='shrink-3'></span></button></td></tr>");
    });

    /*
    // delete ....
    $("[p='del']").on('click',function(){
    	var val = $(this).attr('n');
    	alert(val);
    });
	*/
});
h
















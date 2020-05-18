$(document).ready(function(){
	$("[thumbnail='images']").on('click',function(){
		var n = $(this).attr('num');
		var src = $("#src"+n).attr('src');
		$('#add'+n).click();
		$('#add'+n).change( function(event) {
				var tmppath = URL.createObjectURL(event.target.files[0]);
				//$("img").fadeIn("fast").attr('src',tmppath);
				//alert(tmppath);
				$("#src"+n).attr('src',src.replace(src,tmppath));
		});
	});
});

$(document).ready(function(){
	var src = $("#thumb").attr('src');
	$('.thumbnail').on('click',function(){
		var val = $(this).attr('src');
		$("#thumb").attr('src',val);
	});
}); 
$(document).ready(function () {
	$("nav ul li a").click(function(e) {
		e.preventDefault();
		
		$("nav ul li a").each(function() {
			$(this).removeClass("activa");	
		});
		
		$(this).addClass("activa");
		
		$("h3").html($(this).attr("title"));
	});
});
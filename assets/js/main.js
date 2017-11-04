$(document).ready(function(){

	$("#show-all").hide();

	$(".toggle").click(function(){
		if ($(this).hasClass("selected")) {
			showAll();
		} else {
			showAll();
			var type = $(this).attr("id");
			$(this).toggleClass("selected")
			$(".competence").hide();
			$('.' + type).show();
			$("#show-all").show();
		}	
	});

    $("#show-all").click(function() {
    	showAll();
    });

    function showAll() {
    	$(".competence").show();
    	$("#show-all").hide();
    	$(".selected").toggleClass("selected");	
    }
});
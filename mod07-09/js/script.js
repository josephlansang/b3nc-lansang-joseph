// $('.para-to-hide').hide();

//$('#paraToHideWithId').hide();

// $('p').click(function() {
// 	$(this).hide();
// }

// $('p').click(hideThisElement);

$("#paraToHideWithId").hover(function() {
	$(this).html("I am a changed paragraph.");
});

$("p").click(function() {
	$(this).attr("align", "right");
	$(this).css("color", "red");
});
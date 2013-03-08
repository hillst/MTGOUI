// Put your custom code here
$(document).ready(function() {
$( ".confirm" ).bind("click", function() {
	   $('#Confirmation').show("slow");
	  
   });
   $("#purchase").bind("click", function(){
	   $("#complete").show();
	   
   });
   
   $("#x").bind("click", function() {
	   $('#Confirmation').hide();
   });
});
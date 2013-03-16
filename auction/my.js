$(document).ready(function() {
   $("#magicrow-1").bind("click", function() {
       $("#magicrow-1").attr("class", "magicrow-active");
       $("#magicrow-2").attr("class", "magicrow-unactive");
       $("#magicrow-3").attr("class", "magicrow-unactive");
       $("#magicrow-4").attr("class", "magicrow-unactive");
   });
    $("#magicrow-2").bind("click", function() {
       $("#magicrow-1").attr("class", "magicrow-unactive");
       $("#magicrow-2").attr("class", "magicrow-active");
       $("#magicrow-3").attr("class", "magicrow-unactive");
       $("#magicrow-4").attr("class", "magicrow-unactive");
   });
    $("#magicrow-3").bind("click", function() {
       $("#magicrow-1").attr("class", "magicrow-unactive");
       $("#magicrow-2").attr("class", "magicrow-unactive");
       $("#magicrow-3").attr("class", "magicrow-active");
       $("#magicrow-4").attr("class", "magicrow-unactive");
   });
    $("#magicrow-4").bind("click", function() {
       $("#magicrow-1").attr("class", "magicrow-unactive");
       $("#magicrow-2").attr("class", "magicrow-unactive");
       $("#magicrow-3").attr("class", "magicrow-unactive");
       $("#magicrow-4").attr("class", "magicrow-active");
   });
  
   $( ".confirm" ).bind("click", function() {
	   $("#Confirmation").css("top", Math.max(0, (($(window).height() - $("#Confirmation").outerHeight()) / 2) + 
	                                               $(window).scrollTop()) + "px");
	   $("#Confirmation").css("left", Math.max(0, (($(window).width() - $("#Confirmation").outerWidth()) / 2) + 
	                                                $(window).scrollLeft()) + "px");
	   $('#Confirmation').show("slow");
       $("#backdrop").show();

   });
   $("#purchase").bind("click", function(){
	   $("#complete").show();
   });
   
   $("#x").bind("click", function() {
	   $('#Confirmation').hide();
       $("#backdrop").hide();
   });
    $("#backdrop").bind("click", function() {
       if($(this).attr("id") == "backdrop") {
           $('#Confirmation').hide();
           $("#backdrop").hide();
       }
    });
   
   

});
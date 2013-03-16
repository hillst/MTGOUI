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
    
    $("#magicrow-1").bind("mouseover", function() {
       $("#arrow-1").attr("class", "side-arrow-1");
       $("#image-1").attr("class", "card-image");
   });
    $("#magicrow-2").bind("mouseover", function() {
       $("#arrow-1").attr("class", "side-arrow-2");
        $("#image-1").attr("class", "card-image-2");
   });
    $("#magicrow-3").bind("mouseover", function() {
       $("#arrow-1").attr("class", "side-arrow-3");
        $("#image-1").attr("class", "card-image-3");
   });
    $("#magicrow-4").bind("mouseover", function() {
       $("#arrow-1").attr("class", "side-arrow-4");
        $("#image-1").attr("class", "card-image-4");
   });
    
    $("#friendrow-1").bind("mouseover", function() {
       $("#arrow-1").attr("class", "friend-arrow-1");
       $("#image-1").attr("class", "friend-image");
   });
    $("#friendrow-2").bind("mouseover", function() {
       $("#arrow-1").attr("class", "friend-arrow-2");
        $("#image-1").attr("class", "friend-image-2");
   });
    $("#friendrow-3").bind("mouseover", function() {
       $("#arrow-1").attr("class", "friend-arrow-3");
        $("#image-1").attr("class", "friend-image-3");
   });
    $("#friendrow-4").bind("mouseover", function() {
       $("#arrow-1").attr("class", "friend-arrow-4");
        $("#image-1").attr("class", "friend-image-4");
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
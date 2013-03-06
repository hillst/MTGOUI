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
});
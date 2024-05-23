$(document).ready(function(){
   
   $('#blog .random-articles .og').on('mouseover', function(){
      $(this).addClass('mouseover');
      $(this).removeClass('mouseout');
   });
   $('#blog .random-articles .og').on('mouseout', function(){
      $(this).removeClass('mouseover');
      $(this).addClass('mouseout');
   });
});
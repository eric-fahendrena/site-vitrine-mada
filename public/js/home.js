
$(document).ready(function(){
   
   setTimeout(function() {
      $('#home .services #service1').removeClass('hidden');
      $('#home .services #service1').addClass('visible');
   }, 500);
   setTimeout(function() {
      $('#home .services #service2').removeClass('hidden');
      $('#home .services #service2').addClass('visible');
   }, 1000);
   setTimeout(function() {
      $('#home .services #service3').removeClass('hidden');
      $('#home .services #service3').addClass('visible');
   }, 1500);
   
   showIfOnScreen('#home #iAmHere .cta');
   showIfOnScreen('#home #dataAnalysis .cta');
   showIfOnScreen('#home .who .cta');
   
   showIfOnScreen('#home #iAmHere img');
   showIfOnScreen('#home #dataAnalysis img');
   showIfOnScreen('#home .who img');
   
   $('#home .articles .item .position-absolute').on('mouseover', function(){
      $(this).addClass('mouseover');
      $(this).removeClass('mouseout');
   });
   $('#home .articles .item .position-absolute').on('mouseout', function(){
      $(this).addClass('mouseout');
      $(this).removeClass('mouseover');
   });
   
});
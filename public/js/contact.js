$(document).ready(function(){
   console.log('Hello');
   $('#contactForm #nameForm .form-control').on('blur', function(){
      $('#contactForm #nameForm').addClass('was-validated');
   });
   $('#contactForm #emailForm .form-control').on('blur', function(){
      $('#contactForm #emailForm').addClass('was-validated');
   });
   $('#contactForm #messageForm .form-control').on('blur', function(){
      $('#contactForm #messageForm').addClass('was-validated');
   });
});
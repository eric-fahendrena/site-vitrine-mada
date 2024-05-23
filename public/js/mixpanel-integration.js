$(document).ready(function(){
   mixpanel.init("eaff8d78b0a5834b6feb8445340a212f", {debug: true, track_pageview: true, persistence: 'localStorage'});
   
   $('.cta').on('click', function(e){
      mixpanel.track('Click Call To Action');
   });
   $('.tariff-cta').on('click', function(e){
      mixpanel.track('Click Call To Action From Tariff');
   });
   $('.submit-form').on('click', function(e){
      mixpanel.track('Click Form Submitter');
   });
   $('#contactForm').on('submit', function(e){
      mixpanel.track('Submit Contact Form');
   });
});

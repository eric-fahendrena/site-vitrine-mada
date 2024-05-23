/**
 * Animation duration
 * @var {Number}
 */
var animDuration = 1000;

function toggleNavbar() {
   $('#nbToggler').toggleClass('open');
      
      anime({
         targets: '#nbToggler:not(.open) #line1',
         translateY: 0,
         rotate: '0deg',
         duration: animDuration
      });
      anime({
         targets: '#nbToggler.open #line1',
         translateY: 4,
         rotate: '135deg',
         duration: animDuration
      });
      
      anime({
         targets: '#nbToggler:not(.open) #line2',
         opacity: 1,
      //   rotate: '0deg',
         duration: animDuration
      });
      anime({
         targets: '#nbToggler.open #line2',
         opacity: 0,
       //  rotate: '135deg',
         duration: animDuration
      });
      
      anime({
         targets: '#nbToggler:not(.open) #line3',
         translateY: 0,
         rotate: '0deg',
         duration: animDuration
      });
      anime({
         targets: '#nbToggler.open #line3',
         translateY: -4,
         rotate: '225deg',
         duration: animDuration
      });
      
      $('#nbCollapse').toggleClass('open');
}

$(document).ready(function(){
   // Navbar toggler
   $('#nbToggler').on('click', function(){
      toggleNavbar();
   });
   
});

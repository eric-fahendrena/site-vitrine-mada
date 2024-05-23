
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

function showIfOnScreen(element) {
   const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
         if (entry.isIntersecting) {
            $(element).removeClass('hidden');
            $(element).addClass('visible');
         } else {
            $(element).addClass('hidden');
            $(element).removeClass('visible');
         }
      });
   });
   
   observer.observe(element);
}

$(document).ready(function(){
   // Navbar toggler
   $('#nbToggler').on('click', function(){
      toggleNavbar();
   });
   
   const triggerTabList = document.querySelectorAll('#myTab button');
   triggerTabList.forEach(triggerEl => {
      const tabTrigger = new bootstrap.Tab(triggerEl);
      
      triggerEl.addEventListener('click', event => {
         event.preventDefault();
         tabTrigger.show();
      });
   });
   
});
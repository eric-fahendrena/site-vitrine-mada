
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
   
   const bannerTextContainer = document.querySelector('.banner .container');
   showIfOnScreen(bannerTextContainer);
   
   const sect1Cols = document.querySelectorAll('#sect-1 .col');
   for (let i = 0; i < sect1Cols.length; i++) {
      showIfOnScreen(sect1Cols[i]);
   }
   
   const sect2Text = document.querySelector('#sect-2 .text');
   showIfOnScreen(sect2Text);
   const sect2Img = document.querySelector('#sect-2 img');
   showIfOnScreen(sect2Img);
   
   const sect4Cols = document.querySelectorAll('#sect-4 .col');
   for (let i = 0; i < sect4Cols.length; i++) {
      showIfOnScreen(sect4Cols[i]);
   }
   
   const sect5Text = document.querySelector('#sect-5 .text');
   showIfOnScreen(sect5Text);
   const sect5Img = document.querySelector('#sect-5 img');
   showIfOnScreen(sect5Img);
   
   const smediaList = document.querySelector('#smediaList');
   showIfOnScreen(smediaList);
});

$(document).ready(function(){
   const rectInBg = document.createElement('div');
   
   $(rectInBg).css({
      backgroundColor: '#123',
      position: 'absolute',
      top: '0',
      left: '0',
      right: '0',
      bottom: '0',
      border: '8pt solid #199',
      transform: 'scale(1.5) translate(15%, 30%) rotate(-20deg)',
   });
   
   $('.horizontal-ticket').css({
      position: 'relative',
      height: '160pt',
      backgroundColor: '#579',
      overflow: 'hidden',
      zIndex: '134'
   });
   
   $('.horizontal-ticket').append(rectInBg);
});
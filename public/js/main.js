

function showIfOnScreen(qSelector) {
   const selectedElement = document.querySelectorAll(qSelector);
   const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
         if (entry.isIntersecting) {
            $(selectedElement).removeClass('hidden');
            $(selectedElement).addClass('visible');
         } else {
            $(selectedElement).addClass('hidden');
            $(selectedElement).removeClass('visible');
         }
      });
   });
   
   if (selectedElement !== null)
      observer.observe(document.querySelector(qSelector));
}

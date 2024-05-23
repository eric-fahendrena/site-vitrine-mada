function fadeInVisible(element) {
   const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
         if (entry.isIntersecting) {
            element.classList.add('fade-in');
         } else {
            element.classList.remove('fade-in');
         }
      })
   });
   
   observer.observe(element);
}

const fadeIn = document.querySelectorAll('h1, h2, h3, p, .card, .btn, button, img, input, textarea, label');
for (let i = 0; i < fadeIn.length; i++) {
   fadeInVisible(fadeIn[i]);
}
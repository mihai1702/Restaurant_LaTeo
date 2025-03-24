function swipePhotos() {
  var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 2, 
    speed: 600,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    loop: true,
    autoplay: {
      delay: 2000, 
      disableOnInteraction: false, 
    },
    breakpoints: {
      
      1024: {
        slidesPerView: 3,
      },
    },
  });
}
document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".swiper");
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        setTimeout(swipePhotos, 0);
        observer.disconnect();
      }
    });
  });

  if (slider) {
  observer.observe(slider);
}
});


  window.addEventListener('scroll', function(){
    var scrollPosition = window.scrollY;
    var element = document.getElementById('page-up');

    if(scrollPosition>500){
      element.style.display='block';
    }
    else{
      element.style.display='none';
    }

  })

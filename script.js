function toggleDropdown() {
    const dropdown = document.getElementById("dropdownMenu");
    dropdown.classList.toggle("show");
}

window.onclick = function (event) {
    if (!event.target.closest('.dropdown')) {
        const dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
};
function swipePhotos(){
var swiper = new Swiper(".swiper", {
    effect:"coverflow", 
    grabCursor:true,
    centeredSlides:true,
    slidesPerView:2,
    speed:600,
    coverflowEffect:{
        rotate:50,
        stretch:0,
        depth:100,
        modifier:1,
        slideShadows:true,
    },
    loop: true,
    autoplay: {
      delay: 2000, // Timp între tranziții automate (3 secunde)
      disableOnInteraction: false, // Continuă autoplay chiar dacă utilizatorul interacționează
    },

});
}

document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector(".swiper");
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          setTimeout(swipePhotos, 0); // Așteaptă 1 secundă înainte de a inițializa sliderul
          observer.disconnect(); // Oprește observarea pentru a nu reinițializa sliderul
        }
      });
    });
  
    observer.observe(slider);
  });
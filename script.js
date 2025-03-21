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

  document.querySelectorAll(".menu-comp").forEach(menu => {
    menu.addEventListener("click", function() {
        this.querySelector(".ingredients").toggleAttribute("hidden");
        this.querySelector(".quantity").toggleAttribute("hidden");
    });
});


$(".categoryFilter").on("change", function(e){
  e.preventDefault();
  var catID=this.value;
  $.ajax({
    type:"POST",
    url:"../PHP/filterByCat.php",
    data: {categoryID:catID},
    dataType:"json",
    success: function(response){
      $('#products-list').empty();
      if(response.length>0){
          response.forEach(function(product){
            $('#products-list').append(
              
          `
          <div class="menu-comp">
            <div>
              <img src="../images/menu-images/${product.ImageURL}" alt=".">
            </div>
            <div class="name-price">
              <h4>${product.Name}</h4>
              <p><span>Pret: </span>${product.Price}<span>RON</span></p>
            </div>
            <div class="hidden">
              <p class="ingredients" hidden><span>Ingrediente: </span>${product.Ingredients}</p>
              <p class="quantity" hidden><span>Cantitate: </span> ${product.Quantity}g</p>
            </div>
          </div>
          `
            )
          })
      }
    },
    error: function (xhr, status, error) {
      console.log("AJAX Error Status:", status);
      console.log("AJAX Error:", error);
      console.log("AJAX Response Text:", xhr.responseText);
      alert("A apărut o eroare la sortare. Detalii în consolă.");
  }
  })
})

// document.addEventListener("DOMContentLoaded", () => {
//   const slider = document.querySelector(".swiper");
//   const observer = new IntersectionObserver((entries) => {
//     entries.forEach((entry) => {
//       if (entry.isIntersecting) {
//         setTimeout(swipePhotos, 0);
//         observer.disconnect();
//       }
//     });
//   });

//   observer.observe(slider);
// });

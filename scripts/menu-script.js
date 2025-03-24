document.getElementById("products-list").addEventListener("click", function(e) {
    const menu = e.target.closest(".menu-comp");
    if(menu){
        menu.querySelector(".ingredients").toggleAttribute("hidden");
        menu.querySelector(".quantity").toggleAttribute("hidden");
    }
});

function loadProducts(catID){
  $.ajax({
    type:"POST",
    url:"PHP/filterByCat.php",
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
              <img src="images/menu-images/${product.ImageURL}" alt=".">
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
}

$(".categoryFilter").on("change", function(e){
    e.preventDefault();
    var catID=this.value;
    loadProducts(catID);
  })
  
  $(document).ready(function() {
    loadProducts("all");
});
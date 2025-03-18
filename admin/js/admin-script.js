// document.addEventListener("DOMContentLoaded", function() {
//     document.querySelectorAll(".edit-link").forEach(link => {
//         link.addEventListener("click", function(event) {
//             event.preventDefault(); // Oprește redirecționarea

//             let productId = this.getAttribute("data-id");

//             // AJAX Request către edit-form.php
//             let xhr = new XMLHttpRequest();
//             xhr.open("GET", "edit-form.php?id=" + productId, true);
//             xhr.onreadystatechange = function() {
//                 if (xhr.readyState == 4 && xhr.status == 200) {
//                     document.getElementById("edit-form-container").innerHTML = xhr.responseText;
//                 }
//             };
//             xhr.send();
//         });
//     });
// });



function deletePopUp(event, obj){
    event.preventDefault();
    deleteLink = obj;
    let popup = document.getElementById("deletePopUp");
    popup.style.display = "flex";
}
function confirmDelete()
{
    if(deleteLink)
        window.location.href = deleteLink.href;
}
function declineDelete(){
    let popup = document.getElementById("deletePopUp");
    popup.style.display = "none";
}


document.addEventListener("DOMContentLoaded", function(){
    let nameInput=document.getElementById("name");
    let priceInput=document.getElementById("price");
    let quantityInput=document.getElementById("quantity");
    let form=document.getElementById("edit-product-form");

    nameInput.addEventListener("input", function(){
        validateField(nameInput);
    });
    priceInput.addEventListener("input", function(){
        validateField(priceInput);
    });
    quantityInput.addEventListener("input", function(){
        validateField(quantityInput);
    });
    form.addEventListener("submit", function(event){
        if (!validateForm()) {
            event.preventDefault();
            alert("Some inputs are completed wrong");
        }
    });
});

function validateField(input){
    let errorSpan=document.getElementById(input.id+"Error");
    if(input.id==="name"){
        
        if(input.value.length<3){
            errorSpan.textContent="The name of the product must have more than 3 characters";
            input.classList.add("invalid");
        }
        else{
            errorSpan.textContent="";
            input.classList.remove("invalid");
        }
    }

    if(input.id==="price"){
        if(!/^\d+(\.\d+)?$/.test(input.value)){
            errorSpan.textContent="Price should be only numbers";
            input.classList.add("invalid");
        }
        else{
            errorSpan.textContent="";
            input.classList.remove("invalid");
        }
    }

    if(input.id==="quantity"){
        if(!/^\d+$/.test(input.value)){
            errorSpan.textContent="The quantity should be only numbers";
            input.classList.add("invalid");
        }
        else {
            errorSpan.textContent="";
            input.classList.remove("invalid");
        }
    }
}
function validateForm(){
    let isValid=true;
    let inputs=document.querySelectorAll("#edit-product-form input");
    inputs.forEach(input=>{
        validateField(input);
        if(input.classList.contains("invalid"))
            isValid=false;
    });
    return isValid;
}
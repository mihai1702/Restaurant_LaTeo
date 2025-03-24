document.addEventListener("DOMContentLoaded", function () {
    let nameInput = document.getElementById("name");
    let priceInput = document.getElementById("price");
    let quantityInput = document.getElementById("quantity");
    let form = document.getElementById("edit-product-form");

    nameInput.addEventListener("input", function () {
        validateField(nameInput);
    });
    priceInput.addEventListener("input", function () {
        validateField(priceInput);
    });
    quantityInput.addEventListener("input", function () {
        validateField(quantityInput);
    });
    form.addEventListener("submit", function (event) {
        if (!validateForm()) {
            event.preventDefault();
            alert("Some inputs are completed wrong");
        }
    });
});

function validateField(input) {
    let errorSpan = document.getElementById(input.id + "Error");
    if (input.id === "name") {

        if (input.value.length < 3) {
            errorSpan.textContent = "The name of the product must have more than 3 characters";
            input.classList.add("invalid");
        }
        else {
            errorSpan.textContent = "";
            input.classList.remove("invalid");
        }
    }

    if (input.id === "price") {
        if (!/^\d+(\.\d+)?$/.test(input.value)) {
            errorSpan.textContent = "Price should be only numbers";
            input.classList.add("invalid");
        }
        else {
            errorSpan.textContent = "";
            input.classList.remove("invalid");
        }
    }

    if (input.id === "quantity") {
        if (!/^\d+$/.test(input.value)) {
            errorSpan.textContent = "The quantity should be only numbers";
            input.classList.add("invalid");
        }
        else {
            errorSpan.textContent = "";
            input.classList.remove("invalid");
        }
    }
}
function validateForm() {
    let isValid = true;
    let inputs = document.querySelectorAll("#edit-product-form input");
    inputs.forEach(input => {
        validateField(input);
        if (input.classList.contains("invalid"))
            isValid = false;
    });
    return isValid;
}


$(".deleteButton").click("click", function (e) {
    e.preventDefault();
    let productId = $(this).data("id");
    let popup = document.getElementById("deletePopUp");
    popup.style.display = "flex";
    $("#confirmButton").click(function () {
        $.ajax({
            type: "POST",
            url: "deleteProduct.php",
            data: { id: productId },
            dataType: "json",
            success: function (response) {
                console.log(response);
                if (response.success == true) {
                    popup.style.display = "none";
                    $("#product-" + productId).fadeOut();
                } else {
                    alert("Eroare: " + response.message);
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error Status:", status);
                console.log("AJAX Error:", error);
                console.log("AJAX Response Text:", xhr.responseText);
                alert("A apărut o eroare la ștergere. Detalii în consolă.");
            }
        })
    })
    $("#declineButton").click(function () {
        popup.style.display = "none";
    });
})
$(".statusCheckBox").click("click", function (e) {
    e.preventDefault();
    let el = $(this);
    let productId = el.data("id");
    let checkedValue = this.checked ? 1 : 0;
    $.ajax({
        type: "POST",
        url: "productStatus.php",
        data: { id: productId, value: checkedValue },
        dataType: "json",
        success: function (response) {
            console.log(response);
            if(response.success){
                el.prop("checked", checkedValue);
            }
        },
        error: function (xhr, status, error) {
            console.log("AJAX Error Status:", status);
            console.log("AJAX Error:", error);
            console.log("AJAX Response Text:", xhr.responseText);
            alert("A apărut o eroare la schimbarea statusului produsului. Detalii în consolă.");
        }
    })
})

function loadCategories(){
    $.ajax({
        type: "POST",
        url: "load-categories.php",
        dataType: "json",
        success: function(response){
            $(".categories-table tbody").empty();
            response.forEach(function(category){
                $(".categories-table tbody").append(
                    `
                    <tr>
                        <td>${category.Cat_ID}</td>
                        <td>${category.Cat_Name}</td>
                    </tr>
                    `
                )
            })
        },
        error: function (xhr, status, error) {
            console.log("AJAX Error Status:", status);
            console.log("AJAX Error:", error);
            console.log("AJAX Response Text:", xhr.responseText);
            alert("A apărut o eroare la afisare in tabel. Detalii în consolă.");
        }
    })
}

document.addEventListener('DOMContentLoaded', function() {
    loadCategories();
})

$("#addCategoryForm").on("submit", function(e){
    e.preventDefault();
    var categoryName=$("#category-name").val();
    $.ajax({
        type: "POST",
        url: "add-category.php",
        data:{catName: categoryName},
        dataType:"json",
        success: function(response){
            loadCategories();
        },
        error: function (xhr, status, error) {
            console.log("AJAX Error Status:", status);
            console.log("AJAX Error:", error);
            console.log("AJAX Response Text:", xhr.responseText);
            alert("A apărut o eroare la adaugarea categoriei. Detalii în consolă.");
        }

    })
})
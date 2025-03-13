document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".edit-link").forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault(); // Oprește redirecționarea

            let productId = this.getAttribute("data-id");

            // AJAX Request către edit-form.php
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "edit-form.php?id=" + productId, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("edit-form-container").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });
    });
});
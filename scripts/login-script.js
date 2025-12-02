$(document).ready(function(){
    $("#login-form").on("submit", function(e){
        e.preventDefault()
        var username=$("#username-input").val();
        var password=$("#password-input").val();
        $.ajax({
            type:"POST",
            url:"login-into-account.php",
            data:{
                username:username,
                password:password
            },
            dataType:"json",
            success:function(response){
                if(response.success==true){
                    window.location.href = "admin";
                    console.log("login realizat cu success")
                }
                else if(response.message=="incorrectPass"){
                    $("#login-error").text("Parola incorecta!").show()

                }
                else if(response.message=="usernameNotRegistered")
                {
                    $("#login-error").text("Username incorect!").show()
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error Status:", status);
                console.log("AJAX Error:", error);
                console.log("AJAX Response Text:", xhr.responseText);
                alert("A apărut o eroare verificare. Detalii în consolă.");
            }
        })
    })
    $("#username-input").on("change", function(){
        $("#login-error").hide()
    })
    $("#password-input").on("change",function(){
        $("#login-error").hide()
    })
})

$(document).ready(function(){  
    var usernameError=false
    var emailError=false
    var passError=false
    var final_error=$("#final-error")

     $("#username-input").on("change", function(e){
        e.preventDefault()
        var username=$("#username-input").val();
        var username_error=$("#username-error");
        $.ajax({
            type:"POST", 
            url:"username-validation.php",
            data:{
                username:username
            },
            dataType:"json",
            success:function(response){
                if(response.success==false){
                    username_error.show();
                    usernameError=true
                }
                else{
                    username_error.hide();
                    usernameError=false
                    final_error.hide();
                    console.log("salut false")
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

     $("#email-input").on("change", function(e){
        e.preventDefault()
        var email=$("#email-input").val()
        var email_error=$("#email-error")
        $.ajax({
            type:"POST",
            url:"email-validation.php",
            data:{ email: email},
            dataType:"json",
            success:function(response){
                if(response.success==false){
                    email_error.show();
                    emailError=true
                }
                else
                {
                    email_error.hide()
                    emailError=false
                    final_error.hide();
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

    $("#confirm-password-input").on("change", function(e){
        e.preventDefault()
        var password=$("#password-input").val()
        var confirmPassword=$("#confirm-password-input").val()
        var password_Error=$("#password-error")
        if(password!==confirmPassword){
            password_Error.show()
            passError=true;
        }
        else{
            password_Error.hide()
            passError=false;
            final_error.hide();
        }
    })
    $("#register-form").on("submit", function(e){
        e.preventDefault();
        console.log(usernameError)
        console.log(emailError)
        if(usernameError==false &&emailError==false && passError==false){
            var username=$("#username-input").val()
            var email=$("#email-input").val()
            var password=$("#password-input").val()

            $.ajax({
                type:"POST", 
                url: "register-account.php",
                data: {
                    username: username,
                    email: email,
                    password: password, 
                },
                dataType:"json",
                success:function(response){
                    $("#register-form")[0].reset();
                },
                error: function (xhr, status, error) {
                    console.log("AJAX Error Status:", status);
                    console.log("AJAX Error:", error);
                    console.log("AJAX Response Text:", xhr.responseText);
                    alert("A apărut o eroare la sortare. Detalii în consolă.");
                }    
            })
        }
        else{
            final_error.show();
        }
    })
})
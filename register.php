<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/register-form.css">

    <title>Register</title>
</head>

<body>
    <form id="register-form" action="../admin/email.php">
        <h2>Register</h2>   
        <div class="mb-3">
            <label class="form-label" for="#username-input">Username</label>
            <input class="form-control" id="username-input" type="text" placeholder="Enter Username" required>
            <span class="invalid-feedback" id="username-error">Username-ul este deja folosit</span>
        </div>
        <div class="mb-3">
            <label class="form-label" for="#email-input">Email:</label>
            <input class="form-control" id="email-input" type="Email" placeholder="name@example.com" required>
            <span class="invalid-feedback" id="email-error">Email-ul este deja inregistrat</span>
        </div>
        <div class="mb-3">
            <label class="form-label" for="#password-input">Enter Password</label>
            <input class="form-control" type="password" id="password-input" placeholder="Enter a strong password" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="#confirm-password-input">Confirm Password</label>
            <input class="form-control" type="password" id="confirm-password-input" placeholder="Confirm password" required>
            <span class="invalid-feedback" id="password-error">Parolele nu corespund</span>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
        <span class="invalid-feedback" id="final-error">Exista campuri completate gresit</span>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/register-script"></script>
</body>
</html>
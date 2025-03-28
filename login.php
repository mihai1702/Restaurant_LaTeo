<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/login-form.css">
    <title>Login</title>
</head>

<body>
    <form id="login-form">
        <h2>Login</h2>
        <div class="mb-3">
            <label class="form-label" for="username-input">Enter username or email</label>
            <input class="form-control" id="username-input" type="text" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="password-input">Enter Password</label>
            <input class="form-control" id="password-input" type="password" required>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
        <span class="invalid-feedback" id="login-error"></span>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts/login-script"></script>
</body>

</html>
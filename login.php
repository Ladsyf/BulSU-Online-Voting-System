<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="javascript/jquery-3.6.0.js"></script>
    <script src="javascript/script.js"></script>
        <title>Login</title>
        <link rel="stylesheet" href="css/loginregister.css">
    </head>
<body>
    <header class = "logo-header">
        <img src="img/logo.png" width = "20%">
        <h2 class = "h2Header">BulSU E-Voting System</h2>
    </header>

    <div class = "logincontainer">
    <form>
        <h2 class = "h2Reg"> LOGIN YOUR ACCOUNT</h2>
        <input type = "text" placeholder = "Username" class = "forminput"><br>
        <input type = "password" placeholder = "Password" class = "forminput" style = "margin-bottom: 0px;"><br>
        <p><input type = "checkbox">  Keep me logged in</p>
        <button type = "submit" class = "forminput loginBTN">SIGN IN</button>
        <p> Forgot Password? Click <a href = "#">here</a></p>
        <p class = "or"><span> OR </span></p>
    </form>

    <a href = "register.php"><button class = "forminput registerBTN" class = "registerBTN">REGISTER</button></a>
    <p> Doesn't have an account? </p>
    </div>
</body>
</html>
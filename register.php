<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript/jquery-3.6.0.js"></script>
    <script src="javascript/script.js"></script>
    <title>Register</title>
    <link rel="stylesheet" href="css/loginregister.css">
</head>
<body>
    <div class = "inviheader">
    <header class = "logo-header">
        <p class = "h2Header">BulSU E-Voting System</p>
    </header>
    <img src="img/logo.png">
</div>
        <div class = "logincontainer">
            <form>
                <div class = "reg1">
                    <h2 class = "h2Reg">CREATE YOUR ACCOUNT</h2>
                    <input type="email" name="email" placeholder = "Email" class = "forminput"><br>
                    <input type="text" name="username" placeholder = "Username" class = "forminput"><br>
                    <input type="password" name="password" placeholder = "Password" class = "forminput"><br>
                    <input type="password" name="confirmPassword" placeholder = "Confirm Password" class = "forminput"><br>
                    <button type="button" class = "forminput loginBTN" onclick = togglereg();>NEXT</button><br>
                    <a href = "login.php"><button type="button" class = "forminput loginBTN" style = "background-color: white; color: grey;">CANCEL</button></a>
                </div>
                <div class = "reg2" style = "display: none;">
                    <h2 class = "h2Reg">PERSONAL INFORMATION</h2>
                    <input type="number" name="number" placeholder = "Student Number" class = "forminput">
                    <input type="text" name="fName" placeholder = "First Name" class = "forminput">
                    <input type="text" name="mName" placeholder = "Middle Name" class = "forminput">
                    <input type="text" name="lName" placeholder = "Last Name" class = "forminput">
                    <select class = "forminput collegeinput">
                        <option>College</option>
                    </select>
                    <div class = "halfinput">
                        <input type="text" name="course" placeholder = "Course" class = "forminput halfinputcont">
                        <input type="text" name="year" placeholder = "Year" class = "forminput halfinputcont">
                    </div>
                    <label for="file-upload" class="custom-file-upload">
                    <img src="img/cloud.png" width = "5%"> Upload your COR here
                    </label>
                    <input id="file-upload" type="file"/><br>
                    <input type="checkbox" name="terms" id = "terms" >
                    <label for="terms">Agree to Terms and Services</label>
                    <button type="button" class = "forminput loginBTN">REGISTER</button><br>
                    <button type="button" class = "forminput loginBTN" style = "background-color: white; color: grey;" onclick = togglereg();>CANCEL</button>
                </div>
            </form>
    </div>

</body>
</html>


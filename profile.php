<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "css/profile.css">
    <script src="javascript/jquery-3.6.0.js"></script>
    <script src="javascript/script.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Profile Page</title>
</head>
<body>
    <?php
        include 'navigationheader.php';
    ?>

    <section class = "change-password-container">
        <h2 class = "h2Profile">CHANGE PASSWORD</h2>
        <form class = "profileForm">
            <input type="password" name="oldPassword" id="oldPassword" placeholder = "Enter your old password"><br>
            <input type="password" name="newPassword" id="newPassword" placeholder = "Enter your new password"><br>
            <input type="password" name="newPassword2" id="newPassword2" placeholder = "Re-enter your new password"><br>
            <input type="submit" value="CHANGE PASSWORD" class = "changePass"><br>
            <button type ="button" class = "updateEmail" onclick = "toggleProfile()">UPDATE EMAIL</button>
        </form>
    </section>
    <section class = "change-email-container">
        <h2 class = "h2Profile">UPDATE EMAIL</h2>
        <form class = "profileForm">
            <input type="email" name="oldEmail" id="oldEmail" placeholder = "Enter your old Email"><br>
            <input type="email" name="newEmail" id="newEmail" placeholder = "Enter your new Email"><br>
            <input type="email" name="newEmail2" id="newEmail2" placeholder = "Re-enter your new Email"><br>
            <input type="submit" value="UPDATE EMAIL" class = "changeEmail"><br>
            <button type="button" class = "updatePass" onclick = "toggleProfile()">CHANGE PASSWORD</button>
        </form>
    </section>
    <?php include 'bottomnav.php'; ?>
</body>
</html>
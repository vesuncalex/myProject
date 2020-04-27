<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="/post-register" method="post">
    <p>Register form</p>
    <input type="text" placeholder="Firstname" name="firstName" value="<?php echo $_SESSION['firstname'] ?>">
    <?php echo $_SESSION['firstnameError'] ?><br><br>
    <input type="text" placeholder="Lastname" name=lastName value="<?php echo $_SESSION['lastname'] ?>">
    <?php echo $_SESSION['lastnameError'] ?><br><br>
    <input type="password" placeholder="Write password" name="password">
    <?php echo $_SESSION['passwordError'] ?><br><br>
    <input type="email" placeholder="Write  email" name="email" value="<?php echo $_SESSION['email'] ?>" >
    <?php if (empty($_SESSION['userNotAcces'])){
        echo $_SESSION['emailError'];
    }else echo $_SESSION['userNotAcces'] ?><br><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>  <?php echo $_SESSION['genderError'] ?><br><br><br>
    <input type="submit" name="send" value="Create account"><br><br>

</form>
</body>
</html>
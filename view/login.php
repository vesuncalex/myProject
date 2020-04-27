<?php

$errors = $_SESSION['errors'];
unset($_SESSION['errors']);
echo $errors['incorrect'];
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="/post-login" method="post">
    <input type="email" placeholder="Write login" name="loginUser">
    <?php  echo $errors['email']; ?><br><br>
    <input type="password" placeholder="Write password" name="passwordUser">
    <?php echo $errors['password'] ?><br><br>
    <input type="submit" name="signPage" value="Enter"><br><br>

</form>
</body>
</html>
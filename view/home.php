<?php


die();
$servername = "localhost";
$username = "user";
$password = "secret";
$dbname = "register";
$logPage = $_POST['loginPage'];
$passPage = $_POST['password'];
if (isset($_POST['signPage'])) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM users WHERE (email = '".$logPage."' && password = '".$passPage."')";
    $userLog = $conn->query($sql);
    if ($userLog->num_rows > 0) {
        header('Location: login');
    }
    else echo "such user does not exist  <br><br>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to test site</title>
</head>
<body>
<form action="/" method="post">
    <input type="text" name="loginPage" placeholder="Login"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" name="signPage" value="Enter"><br><br>
</form>

 <label for="registerPage">Registration to new page</label><br><br>
 <a href="register">    <input type="submit" value="Registration"></a>

</body>
</html>
<?php
var_dump(64);
die();
class car {
  public $maxspeed;
  public $color;
  public $power;
  public $weight;

//  function set_color(){
//      $this->color = $color;
//  }

}
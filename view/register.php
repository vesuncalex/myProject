
//$servername = "localhost";
//$username = "user";
//$password = "secret";
//$dbname = "register";
//$firstName = $_POST["firstName"];
//$lastName = $_POST["lastName"];
//$pass = $_POST["password"];
//$email = $_POST["email"];
//$gender = $_POST["gender"];
//
//if(isset($_POST["send"])) {
//    if ($firstName == "" || $lastName == "" || $gender == "" || $email == "" || $pass == "") {
//        echo "Fill in all the fields";
//    } else {
//        $conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        }
//
//        $sql = "INSERT INTO users (firstName,password,gender, lastName, email)
//VALUES ('$firstName','$pass','$gender','$lastName', '$email')";
//
//        if ($conn->query($sql) === TRUE) {
//            echo "New user created successfully . <br>";
//            echo '<a href="/">Login</a>';
//
//
//        } else {
//            echo "Error:such user already exists"."<br>";
//        }
//
//    }
//}


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="/post-register" method="post">
    <p>Register form</p>
    <input type="text" placeholder="Firstname" name="firstName"><span class="error"><br><br>
    <input type="text" placeholder="Lastname" name=lastName><span class="error"><br><br>
    <input type="password" placeholder="Write password" name="password"><br><br>
    <input type="email" placeholder="Write  email" name="email" ><br><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>
    <input type="submit" name="send" value="Create account"><br><br>

</form>
</body>
</html>
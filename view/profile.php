<?php
var_dump($_SESSION['authorized']);
echo 'Hello ' . $_SESSION['userName'] . ', this is your page';

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="/log-out" method="post">

    <input type="submit" name="exitPage" value="Exit"><br><br>

</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>

    </title>
</head>
<body>
<form  method="post" action="">

    <input  type="number" name="x" ><br><br>
    <input type="radio" name="xyz" value="+">+
    <input type="radio" name="xyz" value="-">-
    <input type="radio" name="xyz" value="*">*
    <input type="radio" name="xyz" value="/">/<br><br>
    <input  type="number" name="y" ><br><br>
    <input type="radio" name="xy" value="+">+
    <input type="radio" name="xy" value="-">-
    <input type="radio" name="xy" value="*">*
    <input type="radio" name="xy" value="/">/<br><br>
    <input  type="number" name="z" ><br><br>

    <button type="submit" name="sub" value="kat">Calculate</button>


</form>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
if(isset($_POST["sub"]) == "kat") {
    if (empty($_POST["x"])){
        echo "1 square empty";
        exit;
    }if (empty($_POST["xyz"])){
        echo "Select exercise button!";
        exit;
    }if (empty($_POST["xy"])){
        echo "Select exercise button!";
        exit;
    }if (empty($_POST["y"])){
        echo "2 square empty!";
        exit;
    }if (empty($_POST["z"])){
        echo "3 square empty!";
        exit;
    }
    if ($_POST["xyz"] == "+" || $_POST["xyz"] == "-") {
        if ($_POST["xy"] == "+") {
            $xl = $y + $z;
        }if ($_POST["xy"] == "-") {
            $xl = $y - $z;
        }if ($_POST["xy"] == "*") {
             $xl = $y * $z;
        }
        if ($_POST["xy"] == "/") {
            $xl = $y / $z;
        }if ($_POST["xyz"] == "+"){
            $xs = $x + $xl;
        }if ($_POST["xyz"] == "-"){
            $xs = $x - $xl;
        }if ($_POST["xyz"] == "*"){
            $xs = $x * $xl;
        }if ($_POST["xyz"] == "/"){
            $xs = $x / $xl;
        }
 echo $xs;

    }else{
        if ($_POST["xyz"] == "*"){
            $xs = $x * $y;
        }if ($_POST["xyz"] == "/"){
            $xs = $x / $y;
        }if ($_POST["xy"] == "-"){
            $xl = $xs - $z;
        }if ($_POST["xy"] == "+"){
            $xl = $xs + $z;
        }if ($_POST["xy"] == "*") {
            $xl = $xs * $z;
        }if ($xl_POST["xy"] == "/") {
            $xl = $xs / $z;
        }
        echo $xl;
    }



}



?>
</body>
</html>
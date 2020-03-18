<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>

    </title>
</head>
<body>
<form  method="post" action="">

    <input  type="number" name="firstSquare" ><br><br>
    <input type="radio" name="firstValue" value="+">+
    <input type="radio" name="firstValue" value="-">-
    <input type="radio" name="firstValue" value="*">*
    <input type="radio" name="firstValue" value="/">/<br><br>
    <input  type="number" name="secondSquare" ><br><br>
    <input type="radio" name="secondValue" value="+">+
    <input type="radio" name="secondValue" value="-">-
    <input type="radio" name="secondValue" value="*">*
    <input type="radio" name="secondValue" value="/">/<br><br>
    <input  type="number" name="thirdSquare" ><br><br>

    <button type="submit" name="sub" value="kat">Calculate</button>


</form>
<?php
$firstSquare = $_POST["firstSquare"];
$secondSquare = $_POST["secondSquare"];
$thirdSquare = $_POST["thirdSquare"];
$firstValue = $_POST["firstValue"];
$secondValue = $_POST["secondValue"];

if(isset($_POST["sub"]) == "kat") {
    if (empty($_POST["firstSquare"])) {
        echo "1 square empty";
        exit;
    }
    if (empty($_POST["firstValue"])) {
        echo "Select exercise button!";
        exit;
    }
    if (empty($_POST["secondValue"])) {
        echo "Select exercise button!";
        exit;
    }
    if (empty($_POST["secondSquare"])) {
        echo "2 square empty!";
        exit;
    }
    if (empty($_POST["thirdSquare"])) {
        echo "3 square empty!";
        exit;
    }
    if ($_POST["firstValue"] == "+" || $_POST["firstValue"] == "-") {
        switch ($secondValue) {
            case "+" :
                $xs = $secondSquare + $thirdSquare;
                break;
            case "-" :
                $xs = $secondSquare - $thirdSquare;
                break;
            case "*" :
                $xs = $secondSquare * $thirdSquare;
                break;
            case "/" :
                $xs = $secondSquare / $thirdSquare;
                break;
        }
    switch ($firstValue) {
        case "+" :
            $result = $firstSquare + $xs;
            break;
        case "-" :
            $result = $firstSquare - $xs;
            break;}
    }

        else {
            switch ($firstValue) {
                case "*" :
                    $xd = $firstSquare * $secondSquare;break;
                case "/" :
                    $xd = $firstSquare / $secondSquare;break;
            }
            switch ($secondValue) {
                case "+" : $result = $xd + $thirdSquare;break;
                case "-" : $result = $xd - $thirdSquare;break;
                case "*" : $result = $xd * $thirdSquare;break;
                case "/" : $result = $xd / $thirdSquare;break;
            }
        }
    echo $result;

}
?>
</html>
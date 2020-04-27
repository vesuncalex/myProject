<?php

/*
for($x = 0;$x <= 0; $x++){
      echo  '*'; }echo " <br>";
for($x = 0;$x <= 2; $x++){
    echo '*';
}echo "<br>";
for($x = 0;$x <= 4; $x++){
    echo '*';
}echo "<br>";
for($x = 0;$x <= 6; $x++){
    echo '*';
}echo "<br>";
for($x = 0;$x <= 8; $x++){
    echo '*';
}echo "<br>";*/

/*header('Content-Type: text/plain');




for($y=1; $y<=5; $y++){
    for($x=0; $x<$y; $x++){
        echo "*";
    }
    echo "\n";
}*/


/*$size = 5;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
}*/
/*
$sizeSecond = 9;
for($i=1;$i<=$sizeSecond;$i++){
    for($j=1;$j<=$sizeSecond-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
        echo "$i&nbsp;&nbsp;";
    }
    echo "<br>";
}
echo "<br><br>";

echo "<pre>";
for ($i = 1; $i <= 9; $i++) {
    for ($j = $i; $j <= 9; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;$i");
    echo "<br>";
}
$n = 10;
for ($i = 8; $i >= 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;$i");
    echo "<br>";
}
echo "</pre>";
*/

//$result++ = $result+1 = $result + 1

//function countNumber($number){
//    $y = strlen($number);
//    $result = '';
//    for ($x = 0;$x < $y;$x++){
//        $result = $result += $number[$x];
//    }
//    echo $result;
//}
//countNumber('456');//$_POstav stanum petq tvery
/*
function countValue($number,$searchValue){
    $stringLength = strlen($number);
//    $result = '';
    $result = 0;
    for ($x = 0;$x < $stringLength;$x++){
        $numberResult = $number[$x];

        if ($numberResult == $searchValue){
            $result = $result + 1;
        }
    }
    echo $result;

}
countValue('456456456441444','4');*/
//                             . '<br>';


/*
function countModulDigit($initialDigit, $lastDigit , $divider)
{

    $result = 0;
    for ($x = $initialDigit; $x <= $lastDigit; $x++) {

        $numberResult = fmod($x, $divider);
        if ($numberResult == 0) {
            $result = $result += $x;
        }
    }
echo $result;
}


countModulDigit('20', '45','5');*/

//$number = 455;
//
//$serializeNumber  = (serialize($number));
//
//$unserializeNumber = unserialize($unserializeNumber);





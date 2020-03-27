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


$size = 5;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
}
echo "<br><br>";
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
$sizeSecond = 9;
for($i=1;$i<=$sizeSecond;$i++){
    for($j=1;$j<=$sizeSecond-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
        echo "$i&nbsp;&nbsp;";
    }
    echo "<br>";
    for ($i=1;$i>=$i-$sizeSecond;$i--){
        echo $i;
    }
}



?>






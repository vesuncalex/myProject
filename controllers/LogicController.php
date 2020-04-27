<?php


namespace controllers;


class LogicController
{
    public function indexList()
    {
        $number = rand(1,100);
        $array = [];
        for ($x = 0;$x <= 100; $x++){
            $array[$x] = $number;
        }
        $max = max($array);
        $min = min($array);
        $keymax = array_search($max, $array);
        $keymin = array_search($min, $array);

        $array[$keymax] = $min;
        $array[$keymin] = $max;
        echo $array[$keymax];
        return view("logic-tasks.php");
    }
}
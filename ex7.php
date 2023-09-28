<?php
$a=7;
$b=5;
$c=$a<=>$b;
switch($c){
    case -1:echo $a." est inferieure a ".$b;break;
    case 0:echo $a." est egale a ".$b;break;
    case 1:echo $a." est superiere a ".$b;break;
}

?>
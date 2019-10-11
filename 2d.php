<?php
function calcular($a,$b){
	
echo ($a+$b).'<br>';
echo ($a-$b).'<br>';
echo ($a*$b).'<br>';
if($b!=0) echo ($a/$b).'<br>';
}
calcular(5,6);
calcular(4,5);
calcular(3,2);
calcular(4,0);
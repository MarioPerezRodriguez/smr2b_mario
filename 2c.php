<?php

function calcular ($a,$b) {
	$r=null;
	$r=$r.($a+$b);
	$r=$r.($a-$b);
	return $r;
}

$a = calcular(3,4);
echo $a;
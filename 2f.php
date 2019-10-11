<?php
function meses($n){
	$meses=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
		];
	
		return $meses[$n-1];
}

echo meses(1);

/*
for($i=1;$i<13;$i++){
		if(!strstr(meses($i),'r'))
			echo meses($i).'<br>';
}
*/
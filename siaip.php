<?php 
	
	$metai = 2017;
	$count = 0;
	while ($count < 20){
		if ($metai % 400 == 0 || ($metai % 100 && $metai % 4 == 0 )) {
			echo $metai. "<br>";
			$count ++;
		}
		$metai++;
	}
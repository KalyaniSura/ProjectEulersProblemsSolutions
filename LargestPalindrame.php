<?php

   $palindrome = 0;
   for ($i = 100; $i <= 999; $i++) {
	for ($j = 100; $j <= 999; $j++) {
		$temp = $i * $j;
		if ($temp > $palindrome && $temp == strrev($temp)) {
			$palindrome = $temp;
		}
	}
   }

   echo " largest palindrame number in 3 digits : ".$palindrome;
?>

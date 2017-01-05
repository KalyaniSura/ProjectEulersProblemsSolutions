<?php

  $base = 2 ;
  $pow = 1000 ;

  $digits = str_split ( bcpow ( $base , $pow ) ) ;
  $sum = array_sum( $digits ) ;
  
  echo "the sum of the digits of the number $base^$pow: $sum \n" ;

?>


<?php

   $width = 20 ;
   $height = 20 ; 

   function fact( $n )   {

	$product = 1 ; 
	for($i = $n; $i > 1; --$i)   {

		$product *= $i;
	}

	return $product;
  } 

  $fact1 = fact ( $width + $height ) ;
  $routes = $fact1 / ( fact ( $width ) * fact ( $height ) ) ;
  echo " There are $routes possible routes\n " ;

?>

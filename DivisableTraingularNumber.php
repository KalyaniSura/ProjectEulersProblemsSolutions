<?php

  function numOfFactors($N)    {
	
      $count = 0 ;
	
      for( $i = 1 ; $i < sqrt( $N ) ; ++$i )     {

		if( $N % $i == 0 )
			$count += 2 ;
      } 

      if ( $N % sqrt( $N ) == 0 )
		$count += 1 ;

      return $count ;
   }

   // the first triangular number such that, its number of divisors is greater than $limit
   
  function smallestTriNumWithOverLimitFactors($limit)    {

	$currTri = 0 ; 

	for( $i = 1, $countFactors = 1 ; $countFactors <= $limit ; ++$i )	{

		$currTri += $i ;
		$countFactors = numOfFactors($currTri) ;

	}
	return $currTri ;
   }
 
   $numFactors = 500 ;
   
   echo "the first Triangular number to have over $numFactors divisors: " ;
   echo  smallestTriNumWithOverLimitFactors($numFactors) ."\n";

?>

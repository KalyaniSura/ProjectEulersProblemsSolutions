<?php

   $sum = 2;
   function isPrime( $num )    {
     
      if ( ( $num % 2 ) == 0 ) {

          return false ;
      }

      $ceil = ceil ( sqrt ( $num ) ) ;
      for ( $i = 3; $i <= $ceil; $i = $i + 2) {

        if ( $num % $i == 0)
            return false;
      }
     return true;
   }
  

   for  ( $i = 3 ; $i < 2000000 ; $i = $i + 2 )  {
       
      if ( isPrime ( $i ) )    {

          $sum = $sum + $i ;          
      }
   }

    echo   " sum of prime numbers :  ".$sum;
?>

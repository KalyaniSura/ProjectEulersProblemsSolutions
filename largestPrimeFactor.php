<?php

   $maxnum = 600851475143;
   $num=0;
   $result = 0;

   function isPrime( $num )    {
      $ceil = ceil ( sqrt ( $num ) ) ;
      for ( $i = 3; $i <= $ceil; $i = $i + 2) {
        if ( $num % $i == 0)
            return false;
      }
     return true;
   }

   for ( $i = floor ( sqrt ( $maxnum ) ) / 2 ; $i >= 2 ; $i--  )   {
      $prime = 0;      
      if ( ( $i % 2 ) == 0 ) {
      
         /* remainder is zero that is not a prime number*/   
          continue;
      }
    
      if ( isPrime($i) ) {
        
           if ( $maxnum % $i == 0)  {
              
               $result = $i;
               break;
           }

      }
   }
   echo " largest prime number is : ".$result ;
?>

<?php

  $result = 0 ;
  $pCount = 10001 ;
  $count = 1;
  $number = 3;
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

  while ( $count < $pCount )  {
      
       if ( isPrime ( $number  ) )    {
           $count++;
       }
       $number++;
  }
  
  $result = $number -1;
  echo " 10001th prime number is :  ".$result;

?>

<?php

  $product = 0 ;
  
  for ( $i = 2 ; ; $i++ )    {
  
       for ( $j = 1 ; $j < $i ; $j++ )   {  

           $a = ( $i * $i ) - ( $j * $j ) ;  
           $b = 2 * $i * $j ;  
           $c = ( $i * $i ) + ( $j * $j ) ;
  
           if ( $a + $b + $c == 1000 )   {
  
               $product = $a * $b * $c ;  
               break 2  ;  
            }  
      }  
  }  
  echo " Pythagorean triplet product is :  ".$product ;

?>

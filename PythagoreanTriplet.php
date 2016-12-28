<?php

  $product = 0 ;
  
  for ( $i = 2 ; $i < 1000 ; $i++ )    {
  
       for ( $j = 1 ; $j < 1000  ; $j++ )   {  

          for ( $k = 1 ; $k < 1000 ; $k++ )  { 
  
           if ( $i + $j + $k == 1000 )   {
               
               if ( ( ( $i * $i ) + ( $j * $j ) ) == ( $k * $k ) )  {
                 
                 $product = $i * $j * $k ;  
                 break 3  ;  
            }  
          }
        
         }
      }  
  }  
  echo " Pythagorean triplet product is :  ".$product ;

?>

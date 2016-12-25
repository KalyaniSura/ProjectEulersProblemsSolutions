<?php

  $a = 1 ;
  $b = 2 ;
  $sum = 2 ;
  $nmbr = 0;

  while( $sum < 4000000 )   {

     $nmbr = $a + $b ;
     $a = $b ;
     $b = $nmbr ;
     if ( ( $nmbr % 2) != 0)   
     {  
      
       $sum = $sum + $nmbr ;
  
     }    
      
  }
    
  echo " the sum of the even-valued terms : " .$sum ;

?>
 

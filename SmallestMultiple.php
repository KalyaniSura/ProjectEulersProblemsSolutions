<?php

  $multiple = 1 ;
  $result = 0 ;
  $count = 1;

  for ( $i = 2 ; $i < 21 ; $i++ )   {
    
        $multiple = $multiple *$i;
  }
 
  for  ( $j =  $multiple ; $j > 0 ; $j--)  {
//echo " Smallest multiple in 1 to 20 is : ".$result ." multiple is : ".$j;

      for  ( $k = 2 ; $k < 21 ; $k++  )   {

          if( ( $j % $k ) == 0)  {

                $count ++ ;
          }   
      }

//echo " Smallest multiple in 1 to 20 is : ".$result ." multiple is : ".$multiple;
      if ( $count == 20 )  {
         $result = $j;
      }
      $count = 1;
  }
  
   echo " Smallest multiple in 1 to 20 is : ".$result;

?>

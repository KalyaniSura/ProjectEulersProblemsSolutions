<?Php
  
  $sum = $square = 1;  
  for ( $i = 2; $i <= 100 ; $i++ )   { 
 
    $square += ( $i * $i ) ;  
    $sum += $i ;  

  }
  
  $result = ( $sum * $sum ) - $square ;  
  echo "difference between sum squares and square sums is : ".$result;

?>

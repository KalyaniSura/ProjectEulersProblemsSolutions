<?php

  function collatzSeqLen($n)    {
	$len = 1;
	for($i = $n; $i != 1;)     {
		
            ++$len;	
           
            if($i % 2 == 0)
		$i = $i / 2;
	    else 
		$i = 3*$i + 1;
	}
	return $len;
   }
   function startingNumWithLongestChain($limit)    {

	$start = 0;
	$max_len = 0;
 
	for($i = 1;$i < $limit; ++$i)
	{
		$temp_len = collatzSeqLen($i);
		
		if($temp_len > $max_len)
		{
			$max_len = $temp_len; 
			$start = $i;
		}
	}
	
	return $start;
  }

  $limit = 1000000;
  $n = startingNumWithLongestChain($limit);

  echo "the number $n produces the longest collatz sequence with a length of ". collatzSeqLen($n) . "\n";

?>

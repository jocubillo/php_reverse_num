<?php 
	
	$num = 789654;
	php_num_reverse($num);

	function php_num_reverse($num){
	  $rev = 0;
	  while($num > 0) {
		$temp = $num % 10;
		$rev = ($rev *  10) + $temp;
		$num = (int) ($num / 10);
	  }

	  echo $rev;
	}

?>
<?php
	function fizzbuzz($n){
		if($n%15==0){
			return "FizzBuzz";
		}else if($n%5==0){
			return "Buzz";
		}else if($n%3==0){
			return "Fizz";
		}else{
			return $n;
		}
	}
	for($i=1;$i<99;$i++)echo fizzbuzz($i)." ";
?>

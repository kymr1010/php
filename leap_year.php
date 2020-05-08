<?php
	function isUruu($y){
		if($y%400==0){
			return true;
		}else if($y%100==0){
			return false;
		}else if($y%4==0){
			return true;
		}else return false;
	}
	echo "西暦で年を入力してください\n";
	$y=trim(fgets(STDIN));
	echo "入力された年は、";
	echo isUruu($y)?"うるう年です。":"平年です。";
?>

<?php
	$check=0;
	if($check<=37.0){
		echo "平熱です。";
	}else if($check>=37.5){
		echo "コロナの可能性あり";
	}else{
		echo "微熱です";
	}
?>

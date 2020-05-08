<?php
	echo "身長(cm)を入力してください：";
	$h=trim(fgets(STDIN))/100;
	echo "体重(kg)を入力してください：";
	$w=trim(fgets(STDIN));
	$bmi=$w/($h*$h);
	
	if($bmi<18.5){
		echo "あなたは、低体重です。";
	}else if($bmi >=25){
		echo "あなたは、肥満です。";
	}else{
		echo"あなたは、普通体重です。";
	}
?>

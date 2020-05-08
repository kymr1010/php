<?php
	define("LENGTH",99999);
	$ANS="";
	
	function check($n){
		//echo $n."\n";
		//3桁
		if(strlen($n)!=LENGTH)return false;
		//重複
		if(LENGTH>10)return true;
		for($i=0;$i<LENGTH;$i++){
			for($j=$i+1;$j<LENGTH;$j++){
				if($n[$i]==$n[$j])return false;
			}
		}
		return true;
	}
	
	function generator(){
		$n="";
		do{
			$n="";
			for($i=0;$i<LENGTH;$i++)
			$n.=(string)rand(0,9);
		}while(!check($n));
		return $n;
	}
	
	function hit($n){
		global $ANS;
		$hit=0;
		for($j=0;$j<LENGTH;$j++){
			if($n[$j]==$ANS[$j])$hit++;
		}
		return $hit;
	}
	
	function brow($n){
		global $ANS;
		$brow=0;
		for($i=0;$i<LENGTH;$i++){
			for($j=0;$j<LENGTH;$j++){
				if($i!=$j&&$n[$i]==$ANS[$j])$brow++;
			}
		}
		return $brow;
	}
	
	function main(){
		$i=0;
		while(++$i){
			echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
			echo $i."回目のチャレンジ!\n";
			echo LENGTH."桁の半角数字を重複なしで入力してください：";
			$n=trim(fgets(STDIN));
			if(!check($n)){
				echo "エラー：".LENGTH."桁の半角数字を重複なしで入力してください！\n";
				continue;
			}
			if(hit($n)==LENGTH){
				break;
			}else{
				echo "Hit:".hit($n).", Brow:".brow($n)." です。\n";
			} 
		}
		echo "正解です！".$i."回目でクリアです!!\n";
		return;
	}
	
	$ANS=generator();
	echo $ANS."\n";
	main();
?>

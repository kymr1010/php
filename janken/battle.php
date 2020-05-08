<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$player_handに代入してください
(3) コンピューターの手は$pc_handに代入してください
**/
$handSet=(array('-1'=>'なにそれ','0'=>'ぐー','2'=>'ちょき','5'=>'ぱー'));
$player_hand=-1;
$pc_hand=-1;
$result="不明！";
if(isset($_POST)){
    $player_hand=$_POST['playerHand'];
    $pc_hand= round(rand(0,2)*2.25);
}

switch($player_hand-$pc_hand){
    case 0:                 $result="あいこ！"; break;
    case -2:case -3:case 5: $result="勝ち！";   break;
    case 2:case 3:case -5:  $result="負け！";   break;
    default:                $result="不明！"; break;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>じゃんけん</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <!-- じゃんけんの結果を表示しましょう -->
            <?php echo $result;?>
            <p class="result-word"></p>
            <!-- プレイヤーの手を表示しましょう -->
            あなた：<?php echo $handSet[$player_hand];?><br>
            <!-- コンピュータの手を表示しましょう -->
            コンピューター：<?php echo $handSet[$pc_hand];?><br>

            <p><a class="red" href="index.php">>>もう一回勝負する</a></p>
        </div>
    </body>
</html>
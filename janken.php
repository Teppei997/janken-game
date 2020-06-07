<?php
$hands = ['グー', 'チョキ', 'パー'];

if (isset($_POST['playerHand'])) {
    $playerHand = $_POST['playerHand'];

    $key = array_rand($hands);
    $pcHand = $hands[$key];

    if ($playerHand == $pcHand) {
        $result ='あいこ';
    } elseif ($playerHand == 'グー' && $pcHand == 'チョキ') {
        $result = '勝ち';
    } elseif ($playerHand == 'チョキ' && $pcHand == 'パー') {
        $result = '勝ち';
    } elseif ($playerHand == 'パー' && $pcHand == 'グー') {
        $result = '勝ち';
    } else {
        $result = '負け';
    }
}
?>



<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   
   
        <h1>結果!!</h1>
            <p ><?= $result ?>！</p>

            <p> あなた：<?= $playerHand ?><br></p>
            <p> コンピューター：<?= $pcHand ?><br></p>

    
   
</div>
</body>
</html>
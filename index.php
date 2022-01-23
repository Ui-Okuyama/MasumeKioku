<?php
$number = $_POST['number'];
echo $number;
?>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>牧場物語　マス目</title>
</head>
<body>
    <div style="padding:30px;">
    <script src="main.js"></script>
    <p style="border-bottom: solid 1px gray;">マス数</p>
    <form method="post">
        <input type="radio" name="number" value="5">5×5
        <input type="radio" name="number" value="7">7×7
        <input type="submit">
    </form>
    <p style="border-bottom: solid 1px gray;">マス表示</p>
    <?php for($i=1; $i<=$number; $i++): ?>
        <div name="row">
            <?php for($h=1; $h<=$number; $h++): ?>
                <div name="masu" onclick="changeNum(this)" style="display: inline-block;">
                    □
                </div>
            <?php endfor ?>
        </div>
    <?php endfor ?>
    </div>
</body>
</html>
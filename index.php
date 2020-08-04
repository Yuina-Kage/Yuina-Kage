<?php

require_once('config.php');
require_once('functions.php');

$dbh = connectDb();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>パーソナルカラー診断アプリ</title>
  <script src="https://kit.fontawesome.com/18d96f280e.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <img class="flower" src="images/flower-header.png" alt="花のヘッダー">
  <div class="header">
    <h1>パーソナルカラー診断</h1>
    <h2>あなたに似合う色が、きっと見つかる</h2>
  </div>
  <div class="main">
    <p>今までこんなことを感じたことはありませんか？<br>自分に合う色がわからない、買ったけど使いこなせないなど
    <p>「パーソナルカラー」を知ることで、こんないいことがあるんです！<br><span class="check"> 顔色が良く見える
    </span><br><span class="check">自分の魅力を引き立てる</span><br><span class="check">メイクをより楽しめる
    </span><br><span class="check">効果的に色をコーディネートできる</span></p>
    <p>魅力を引き出して、特別な「かわいい」「かっこいい」が叶う。<br>さぁ、自分の「パーソナルカラー」知って新しい自分に出会いましょう。</p>
    <a href="diagnosis.php?id=1">WEB診断スタート</a>
    <img class="ribbon" src="images/ribbon.png" alt="リボンの画像">
  </div>
  <ul class="button">
    <li><a href="about.php">パーソナルカラーとは</a></li>
    <li><a href="woman.php">WOMAN'S TYPE</a></li>
    <li><a href="man.php">MAN'S TYPE</a></li>
  </ul>
  <img class="flower2" src="images/flower-header.png" alt="花のフッダー">
<!-- </section> -->
</body>

</html>
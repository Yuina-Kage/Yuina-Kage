<?php

require_once('config.php');
require_once('functions.php');

$dbh = connectDb();

$id = $_GET['id'];

$sql = 'SELECT * FROM types WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$type = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>診断の結果</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <img class="flower" src="images/flower-header.png" alt="花のヘッダー">
  <p class="anata">あなたのパーソナルカラーは</p>
  <hr class="kasen">
  <h1 class="result-type"><?php echo h($type['type']); ?></h1>
  <img class="result-img" src="<?php echo h('images/' . $type['image']); ?>">
  <h2 class="result-subtitle"><?php echo h($type['subtitle']); ?></h2>

  <div class='result-main'>
    <p class="result-body"><?= nl2br(h($type['body'])) ?></p>
    <h3 class="result-color <?php echo h($type['color']); ?>">肌色</h3>
    <p class="result-skincolor"><?php echo h($type['skin_color']); ?></p>
    <h3 class="result-color <?php echo h($type['color']); ?>">瞳の色</h3>
    <p class="result-eyecolor"><?php echo h($type['eye_color']); ?></p>
    <h3 class="result-color <?php echo h($type['color']); ?>">髪色</h3>
    <p class="result-haircolor"><?php echo h($type['hair_color']); ?></P>
  </div>

  <a href="result.php?id=<?php echo h($type['id']); ?>"></a>
  <div class="button2">
    <a class="start" href="diagnosis.php?id=1">もう一度WEB診断する</a>
    <a class="PAGE-HOME" href="index.php">PAGE HOME</a>
  </div>
  <img class="flower2" src="images/flower-header.png" alt="花のフッダー">
</body>

</html>
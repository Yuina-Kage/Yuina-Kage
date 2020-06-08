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
  <h1><?php echo h($type['type']); ?></h1><br>
  <img src="<?php echo h('images/' . $type['image']); ?>"><br>
  <h2><?php echo h($type['subtitle']); ?></h2><br>
  <?php echo h($type['body']); ?><br>
  <h3>肌色</h3>
  <?php echo h($type['skin_color']); ?><br>
  <h3>瞳の色</h3>
  <?php echo h($type['eye_color']); ?><br>
  <h3>髪色</h3>
  <?php echo h($type['hair_color']); ?><br> </h2>


  <a href="result.php?id=<?php echo h($type['id']); ?>"></a>
  <a href="index.php">メインページへ</a>
</body>

</html>
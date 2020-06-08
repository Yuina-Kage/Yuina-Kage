<?php

require_once('config.php');
require_once('functions.php');


$id = $_GET['id'];
$yes_id = $_GET['yes_id'];
$no_id = $_GET['no_id'];
$yes_type_id = $_GET['yes_type_id'];
$no_type_id = $_GET['no_type_id'];


$dbh = connectDb();

$sql = 'SELECT * FROM diagnoses WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$diagnosis = $stmt->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>診断の画面</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h2><?php echo h($diagnosis['content']); ?></h2>

  
  <?php if (is_null($yes_id)) : ?>
    <a href="result.php?id=<?php echo h($diagnosis['yes_type_id']); ?>">はい</a>
  <?php else : ?>
    <a href="diagnosis.php?id=<?php echo h($diagnosis['yes_id']); ?>">はい</a>
  <?php endif; ?>


  <?php if (is_null($no_id)) : ?>
    <a href="result.php?id=<?php echo h($diagnosis['no_type_id']); ?>">いいえ</a>
  <?php else : ?>
    <a href="diagnosis.php?id=<?php echo h($diagnosis['no_id']); ?>">いいえ</a>
  <?php endif; ?>


</body>

</html>
<?php

require_once('config.php');
require_once('functions.php');

$dbh = connectDb();

$id = $_GET['id'];
$yes_type_id = $_GET['yes_type_id'];
$no_type_id = $_GET['no_type_id'];


$sql = 'SELECT * FROM types WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$type = $stmt->fetch(PDO::FETCH_ASSOC);


if($yes_type_id = 1){
  $sql = 'SELECT * FROM types WHERE id = 1';
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  $type = $stmt->fetch(PDO::FETCH_ASSOC);
}
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
  <ul>
    <?php foreach ($types as $type) : ?>
      <li>
        <?php echo h($type['type']); ?><br>
        <?php echo h($type['image']); ?><br>
        <?php echo h($type['subtitle']); ?><br>
        <?php echo h($type['body']); ?><br>
        <?php echo h($type['skin_color']); ?><br>
        <?php echo h($type['eye_color']); ?><br>
        <?php echo h($type['hair_color']); ?><br>
      </li>
    <?php endforeach; ?>

    <a href="result.php?id=<?php echo h($diagnosis['id']); ?>"></a>
    <a href="result.php?id=<?php echo h($diagnosis['id']); ?>"></a>

    <img src="images/woman_type.jpg" alt="女性のタイプの画像">
    <img src="images/man_type.jpg" alt="男性のタイプの画像">


</body>

</html>
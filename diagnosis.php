<?php

require_once('config.php');
require_once('functions.php');

$dbh = connectDb();

$sql = "SELECT * FROM diagnoses where sex=0 AND question_id=1";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$diagnoses = $stmt->fetchAll(PDO::FETCH_ASSOC);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $content = $_POST['content'];
  if ("SELECT * FROM diagnoses where sex=0 AND question_id=1 = yes_id=2") {
    $content = "SELECT * FROM diagnoses where sex=1 AND question_id=2";
  } elseif ("SELECT * FROM diagnoses where sex=0 AND question_id=1 = yes_id=2") {
    $content = "SELECT * FROM diagnoses where sex=2 AND question_id=2";
  }
}




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
  <ul>
    <?php foreach ($diagnoses as $diagnosis) : ?>
      <li>

        <?php echo h($diagnosis['content']); ?>
      </li>
    <?php endforeach; ?>

    <input type="submit" value="はい">
    <input type="submit" value="いいえ">
</body>

</html>
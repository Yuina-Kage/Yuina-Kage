<?php

require_once('config.php');
require_once('functions.php');


$id = $_GET['id'];
$yes_id = $_GET['yes_id'];
$no_id = $_GET['no_id'];



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
  <p>
    <a href="diagnosis.php?id=<?php echo h($diagnosis['yes_id']); ?>">はい</a>
    <a href="diagnosis.php?id=<?php echo h($diagnosis['no_id']); ?>">いいえ</a>
  </p>
  
    <a href="result.php?id=<?php echo h($diagnosis['yes_type_id']); ?>"></a>
    <a href="result.php?id=<?php echo h($diagnosis['no_type_id']); ?>"></a>
</body>

</html>
<?php

require_once('config.php');
require_once('functions.php');


$id = $_GET['id'];

$dbh = connectDb();

$sql = 'SELECT * FROM diagnoses WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$diagnoses = $stmt->fetchAll(PDO::FETCH_ASSOC);



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $yes_id = 'yes_id';
  $no_id = 'no_id';


  $sql = 'SELECT * FROM diagnoses WHERE yes_id = :yes_id';
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(':yes_id', $yes_id, PDO::PARAM_INT);
  $stmt->execute();
  $diagnoses = $stmt->fetchAll(PDO::FETCH_ASSOC);


  $sql = 'SELECT * FROM diagnoses WHERE no_id = :no_id';
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(':no_id', $no_id, PDO::PARAM_INT);
  $stmt->execute();
  $diagnoses = $stmt->fetchAll(PDO::FETCH_ASSOC);

}

if($yes_id=2) {

}

if($no_id=13){
  
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


    <a href="diagnosis.php&id=<?php echo $yes_id; ?>">はい</a>
    <a href="diagnosis.php&id=<?php echo $no_id; ?>">いいえ</a>
</body>

</html>
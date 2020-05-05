<?php

require_once('config.php');
require_once('functions.php');


$id = $_GET['id'];
$yes_id = 'yes_id';
$no_id = 'no_id';

$dbh = connectDb();

$sql = 'SELECT * FROM diagnoses WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$diagnoses = $stmt->fetchAll(PDO::FETCH_ASSOC);


$sql = 'SELECT * FROM diagnoses WHERE yes_id';
$stmt = $dbh->prepare($sql);
$stmt->execute();


$sql = 'SELECT * FROM diagnoses WHERE no_id';
$stmt = $dbh->prepare($sql);
$stmt->execute();




if ($yes_id = 2) {
  $sql = 'SELECT * FROM diagnoses WHERE id=2';
if ($no_id = 13) {
  $sql = 'SELECT * FROM diagnoses WHERE id=13';
}
}



$sql = 'SELECT * FROM diagnoses WHERE id = 2';
$stmt = $dbh->prepare($sql);
$stmt->execute();

if ($yes_id = 3){
  $sql = 'SELECT * FROM diagnoses WHERE id=3';
if ($no_id = 4){
  $sql = 'SELECT * FROM diagnoses WHERE id=4';
}
}















// パラメータで渡されたidを元にデータを取得する
// はい、いいえボタンに取得してきたデータのyes_idとno_idを、idというパラメータ名でaタグに設定する
// はい、いいえのボタンを押されたら、1. 2.の処理を繰り返す
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
  
    
    <a href="diagnosis.php?id=<?php echo $yes_id; ?>">はい</a>
    <a href="diagnosis.php?id=<?php echo $no_id; ?>">いいえ</a>
</body>

</html>
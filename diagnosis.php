<?php

require_once('config.php');
require_once('functions.php');

$dbh = connectDb();


if ($sql = "SELECT * FROM diagnoses where id=1") {

  $id = $_GET['id'];

  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $diagnoses = $stmt->fetchAll(PDO::FETCH_ASSOC);

  } if ("SELECT * FROM diagnoses where id=1 == yes_id=2") {
      "SELECT * FROM diagnosis.php&id=1";
  
  } elseif ("SELECT * FROM diagnoses where id=1 == no_id=13") {
      "SELECT * FROM diagnoses.php&id=13";
}






  
  
  
  // if ("SELECT * FROM diagnoses where id=1 AND yes_id=2") {
  //     "SELECT * FROM diagnoses where id=2";
  //     $stmt = $dbh->prepare($sql);

  // } elseif ("SELECT * FROM diagnoses where id=1") {
  //   "no_id = 2";
    
  // }

  // if ("SELECT * FROM diagnoses where id=1") {
  //   'yes_id=2' ==  "SELECT * FROM diagnoses where id=1";
  //   'no_id' == "SELECT * FROM diagnoses where id=13";
  //   $stmt = $dbh->prepare($sql);

  


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

    <a href="diagnosis.php&id=1" method="GET"><input type="submit" value="はい"></a>
    <a href="diagnosis.php&id=13" method="GET"><input type="submit" value="いいえ"></a>
</body>

</html>
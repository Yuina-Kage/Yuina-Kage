<?php

define('DSN', 'mysql:host=db;dbname=personalcolor_app;charset=utf8');
define('USER', 'admin');
define('PASSWORD', 'admin_pass');

error_reporting(E_ALL & ~E_NOTICE);

// try {
//   $dbh = new PDO(DSN, USER, PASSWORD);
//   echo '接続に成功しました！' . '<br>';
// } catch (PDOException $e) {
//   echo $e->getMessage();
//   exit;
// }

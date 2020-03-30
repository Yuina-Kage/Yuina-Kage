<?php

// 接続に必要な情報を定数として定義
define('DSN', 'mysql:host=db;dbname=personalcolor_app;charset=utf8');
define('USER', 'admin');
define('PASSWORD', 'admin_pass');

// Noticeというエラーを非表示にする
error_reporting(E_ALL & ~E_NOTICE);

try {
  $dbh = new PDO(DSN, USER, PASSWORD);
  echo '接続に成功しました！' . '<br>';
} catch (PDOException $e) {
  // 接続がうまくいかない場合こちらの処理がなされる
  echo $e->getMessage();
  exit;
}

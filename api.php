<?php
//文字コード設定
header('Content-Type: application/json; charset=UTF-8');

if(isset($_GET["num"]) && !preg_match('/[^0-9]/', $_GET["num"])) {
  //numをエスケープ
  $param = htmlspecialchars($_GET["num"]);
  //メイン処理
  $arr["status"] = "yes";
  $arr["x114"] = (string)((int)$param * 114);
  $arr["x514"] = (string)((int)$param * 514);
}else{
  //$paramの値が不適ならstatusの値をnoにしてプログラム終了
  $arr["status"] = "no";
}

print json_encode($arr, JSON_PRETTY_PRINT);
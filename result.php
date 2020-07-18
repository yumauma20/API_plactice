<?php
// 文字コード設定
header('Content-Type: text/html; charset=UTF-8');

//numパラメータにセットする値
$num = 10;
//webAPIのURL
$url = "http://localhost/API_plactice/api.php?num=${num}";
//URLの内容を取得してjson形式からstdClass形式に変換し取得
$data = json_decode(file_get_contents($url));

if($data->status == "yes") {
  var_dump($data->x514);
}
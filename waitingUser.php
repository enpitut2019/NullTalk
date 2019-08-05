<?php
$url = parse_url(getenv("DATABASE_URL"));
$con = pg_connect("host=" . $url['host'] . " port=" 
. $url['port'] . " dbname=" . substr($url['path'], 1)
. " user=" . $url['user'] . " password=" . $url['pass']);

$password = $_POST["password"];
$res = pg_query($con, "SELECT COUNT(*) FROM rooms WHERE password = '".$password."'") or die("クエリ実行エラーです" . pg_last_error());
$cnt = pg_fetch_row($res)[0];
// 文字コード設定
header('Content-Type: text/html; charset=UTF-8');
if($cnt>=2) {
    $arr["val"] = "success";
} else {
    $arr["val"] = "failure";
}
// 配列をjson形式にデコードして出力, 第二引数は、整形するための定数
print json_encode($arr, JSON_PRETTY_PRINT);
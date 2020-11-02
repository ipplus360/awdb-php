<?php
header("Content-type: text/html; charset=utf-8");
require __DIR__ . '/../autoload.php';

use aw\Db\Reader;

// $ipAddress = '166.111.4.100';
$ipAddress = $_GET["ip"];
$databaseFile = 'C:\\Users\\admin\\Desktop\\allawdb\\IP_city_single_WGS84_awdb.awdb';
$reader = new Reader($databaseFile);
$result = json_encode($reader->get($ipAddress),JSON_UNESCAPED_UNICODE);
$resArr = (array)json_decode($result);
echo "continent:".$resArr['continent'];
echo "<br>";
echo $result;
// print_r($reader->get($ipAddress));
$reader->close();
?>
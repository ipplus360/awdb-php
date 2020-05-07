<?php

require __DIR__ . '/../autoload.php';

use aw\Db\Reader;

// $ipAddress = '24.24.24.24';
$ipAddress = $_GET["ip"];
$databaseFile = 'C:\\Users\\admin\\Desktop\\allawdb\\IP_city_2020W12_single_WGS84_ipv6.awdb';
$reader = new Reader($databaseFile);
echo json_encode($reader->get($ipAddress));
// print_r($reader->get($ipAddress));
$reader->close();

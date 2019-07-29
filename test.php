<?php
include_once 'spyc/Spyc.php';
include_once 'device-detector/autoload.php';

use DeviceDetector\DeviceDetector;

$dd = new DeviceDetector();

$ua = "Mozilla/5.0 (iPhone; CPU iPhone OS 12_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 MicroMessenger/7.0.5(0x17000523) NetType/WIFI Language/en";
var_dump($dd->getInfoFromUserAgent($ua));
$ua = "Mozilla/5.0 (Linux; Android 9; CLT-AL00 Build/HUAWEICLT-AL00; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 MQQBrowser/6.2 TBS/044807 Mobile Safari/537.36 MMWEBID/1957 MicroMessenger/7.0.4.1420(0x2700043C) Process/tools NetT";
var_dump($dd->getInfoFromUserAgent($ua));
$ua = "Mozilla/5.0 (iPad; CPU OS 13_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/75.0.3770.103 Mobile/15E148 Safari/605.1";
var_dump($dd->getInfoFromUserAgent($ua));

<?php

require('vendor/autoload.php');

use \PhpMqtt\Client\MqttClient;
use \PhpMqtt\Client\ConnectionSettings;

$server   = 'mqtt.ohstem.vn';
$port     = 1883;
$clientId = array(
  "nhombaton/feeds/V1",
  "nhombaton/feeds/V2",
  "nhombaton/feeds/V3",
  "nhombaton/feeds/V4",
  "nhombaton/feeds/V12",
  "nhombaton/feeds/V13",
  "nhombaton/feeds/V14",
  "nhombaton/feeds/V15",
  "nhombaton/feeds/V16"
);
$username = 'nhombaton';
$password = '';
$clean_session = false;
$mqtt_version = MqttClient::MQTT_3_1_1;

//Dữ liệu đẩy lên database
$V1 = 0; // Nhiệt độ
$V2 = 0; // Độ ẩm
$V3 = 0; // Độ ẩm đất 
$V4 = 0; // Ánh sáng
$V12 = 0; // Công tắc điều chỉnh giá trị đèn LED => Không cần đưa vào database
$V13 = 0; // Hiển thị giá trị đèn LED
$V14 = 0; // Khởi động thủ công (0: Tự động, 1: Thủ công)
$V15 = 0; // Hiển thị giá trị máy bơm
$V16 = 0; // Công tắc điều chỉnh giá trị máy bơm => Không cần đưa vào database

$connectionSettings = (new ConnectionSettings)
  ->setUsername($username)
  ->setPassword($password)
  ->setKeepAliveInterval(6000) //Thời gian sống của chương trình, ở đây mình xét 6000s
  ->setLastWillTopic('nhombaton/feeds/')
  ->setLastWillMessage('client disconnect')
  ->setLastWillQualityOfService(1);



for($i = 0; $i < 10; $i++){
  $mqtt = new MqttClient($server, $port, $clientId[$i], $mqtt_version);
  $mqtt->connect($connectionSettings, $clean_session);
  printf("client connected\n");
}


$mqtt->subscribe('nhombaton/feeds/V1', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  $V1 = intval($message);
});
$mqtt->subscribe('nhombaton/feeds/V2', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  $V2 = intval($message);
});
$mqtt->subscribe('nhombaton/feeds/V3', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  $V3 = intval($message);
});
$mqtt->subscribe('nhombaton/feeds/V4', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  $V4 = intval($message);
});
$mqtt->subscribe('nhombaton/feeds/V12', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  $V12 = intval($message);
});
$mqtt->subscribe('nhombaton/feeds/V13', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  $V13 = intval($message);
});
$mqtt->subscribe('nhombaton/feeds/V14', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  $V14 = intval($message);
});
$mqtt->subscribe('nhombaton/feeds/V15', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  $V15 = intval($message);
});
$mqtt->subscribe('nhombaton/feeds/V16', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  $V16 = intval($message);
});
$mqtt->loop(true); // Lệnh này không cần thiết vì trong chương trình không sử dụng subscribe
?>
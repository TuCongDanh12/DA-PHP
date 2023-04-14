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
  "nhombaton/feeds/V10",
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
});
$mqtt->subscribe('nhombaton/feeds/V2', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
});
$mqtt->subscribe('nhombaton/feeds/V3', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
});
$mqtt->subscribe('nhombaton/feeds/V4', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
});
$mqtt->subscribe('nhombaton/feeds/V10', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
});
$mqtt->subscribe('nhombaton/feeds/V12', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
});
$mqtt->subscribe('nhombaton/feeds/V13', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
});
$mqtt->subscribe('nhombaton/feeds/V14', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
});
$mqtt->subscribe('nhombaton/feeds/V15', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
});
$mqtt->subscribe('nhombaton/feeds/V16', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
});
$mqtt->loop(true); // Lệnh này không cần thiết vì trong chương trình không sử dụng subscribe
?>
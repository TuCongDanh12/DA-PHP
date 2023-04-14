<?php

require __DIR__ . '/vendor/autoload.php';

use \PhpMqtt\Client\Facades\MqttClientFacade as MQTT;
use \ElephantIO\Client as SocketIO;

$MQTT_SERVER = "mqtt.ohstem.vn";
$MQTT_PORT = 1883;
$MQTT_USERNAME = "nhombaton";
$MQTT_PASSWORD = "";
$link = "nhombaton/feeds/";
$list_feed = [
  "V1",
  "V2",
  "V3",
  "V4",
  "V10",
  "V12",
  "V13",
  "V14",
  "V15",
  "V16"
];

MQTT::connect([
    'host' => $MQTT_SERVER,
    'port' => $MQTT_PORT,
    'username' => $MQTT_USERNAME,
    'password' => $MQTT_PASSWORD,
]);

foreach ($list_feed as $feed) {
    MQTT::subscribe($link . $feed, function ($topic, $message) {
        echo "Nhan du lieu: " . $topic . " " . $message . "\n";
        $socket = new SocketIO('http://localhost:3000');
        switch ($topic) {
            case 'nhombaton/feeds/V1':
                $socket->initialize();
                $socket->emit('templateValue', $message);
                $socket->close();
                break;
            case 'nhombaton/feeds/V2':
                $socket->initialize();
                $socket->emit('humiValue', $message);
                $socket->close();
                break;
            case 'nhombaton/feeds/V3':
                $socket->initialize();
                $socket->emit('SandHumiValue', $message);
                $socket->close();
                break;
            case 'nhombaton/feeds/V4':
                $socket->initialize();
                $socket->emit('lightValue', $message);
                $socket->close();
                break;
            default:
                break;
        }
    });
}

$io = new SocketIO('http://localhost:3000');

$io->on('connect', function () use ($io) {
    $io->on('automationModel', function ($msg) {
        $io->emit('automationModel', $msg);
        MQTT::publish('nhombaton/feeds/V14', $msg);
    });

    $io->on('setLedValue', function ($msg) {
        $io->emit('setLedValue', $msg);
        MQTT::publish('nhombaton/feeds/V12', $msg);
    });

    $io->on('setPumpValue', function ($msg) {
        $io->emit('setPumpValue', $msg);
        MQTT::publish('nhombaton/feeds/V16', $msg);
    });
});

$io->initialize();
$io->connect();
$io->keepAlive();
?>
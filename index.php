<?php 

require_once ('vendor/autoload.php');
use App\Libraries\Route;
// require_once ('app/Libraries/Route.php');

$dt= new Route('site');
// echo $_REQUEST['option'];

?>
<!-- // use \PhpMqtt\Client\MqttClient;
// use \PhpMqtt\Client\ConnectionSettings;

// $server   = 'mqtt.ohstem.vn';
// $port     = 1883;
// $clientId = array(
//   "nhombaton/feeds/V1",
//   "nhombaton/feeds/V2",
//   "nhombaton/feeds/V3",
//   "nhombaton/feeds/V4",
//   "nhombaton/feeds/V10",
//   "nhombaton/feeds/V12",
//   "nhombaton/feeds/V13",
//   "nhombaton/feeds/V14",
//   "nhombaton/feeds/V15",
//   "nhombaton/feeds/V16"
// );
// $username = 'nhombaton';
// $password = '';
// $clean_session = false;
// $mqtt_version = MqttClient::MQTT_3_1_1;

// $connectionSettings = (new ConnectionSettings)
//   ->setUsername($username)
//   ->setPassword($password)
//   ->setKeepAliveInterval(6000) //Thời gian sống của chương trình, ở đây mình xét 6000s
//   ->setLastWillTopic('nhombaton/feeds/')
//   ->setLastWillMessage('client disconnect')
//   ->setLastWillQualityOfService(1);

// $mqtt = new MqttClient($server, $port, $clientId[0], $mqtt_version); // Sửa lại

// if (isset($_POST['submit'])) {
//   $input_data = $_POST['input_data'];
//   $topic = 'nhombaton/feeds/V1'; // Đặt tên topic muốn publish dữ liệu lên
//   $mqtt->connect($connectionSettings, $clean_session);
//   $mqtt->publish($topic, $input_data, 0, false);
//   printf("Data published to topic %s: %s\n", $topic, $input_data);
// } -->



<!-- <form method="post" id="mqtt-form">
<input type="text" name="input_data" />
<button type="submit" name="submit">Send</button>
</form> -->

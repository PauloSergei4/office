<?php
require "../vendor/autoload.php";

use Lzq\Mqtt\SamConnection;
use Lzq\Mqtt\SamMessage;

//create a new connection object
$conn = new SAMConnection();

//start initialise the connection
$result = $conn->connect('mqtt', array('SAM_HOST' => 'mqtt.ihome.org.ua', 'SAM_PORT' => '1883'));

//create a new MQTT message with the output of the shell command as the body
$msgCpu = new SAMMessage($_REQUEST['message']);

//send the message on the topic cpu
$conn->send('topic://'.$_REQUEST['target'], $msgCpu);
         
$conn->disconnect();         

echo 'MQTT Message to ' . $_REQUEST['target'] . ' sent: ' . $_REQUEST['message']; 
?>
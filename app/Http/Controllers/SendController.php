<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lzq\Mqtt\SamMessage;
use Lzq\Mqtt\SamConnection;
use GuzzleHttp\Client;

class SendController extends Controller
{
//    public function index()
//    {
//        return view('admin.mqtt.index');
//    }

    public function send(Request $request)
    {

        $topic = $request->input('messageTarget');
        $message = $request->input('messageBody');
        $mode = $request->input('mode');


        $conn = new SAMConnection();//create a new connection object

        $conn->connect('mqtt', array('SAM_HOST' => 'mqtt.ihome.org.ua', 'SAM_PORT' => '1883'));//start initialise the connection

        $msgCpu = new SAMMessage($mode.$message);//create a new MQTT message with the output of the shell command as the body

        $conn->send('topic://'.$topic, $msgCpu);//send the message on the topic cpu

        $conn->disconnect();

        return redirect()->back()->with('notification', 'Сообщение отправлено');
    }

}
const mqtt = require('mqtt');
const express = require('express');
const app = express();
const http = require('http');
const port = process.env.PORT || 3000;
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server);

const MQTT_SERVER = "mqtt.ohstem.vn";
const MQTT_PORT = 1883;
const MQTT_USERNAME = "nhombaton";
const MQTT_PASSWORD = "";
const link = "nhombaton/feeds/";
const list_feed = [
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
// Bien truyen du lieu
var V1;
var V2;
var V3;
var V4;
var V10;
var V12;
var V13;
var V14;
var V15;
var V16;

const fetch = (...args) => import('node-fetch').then(({default: fetch}) => fetch(...args));

fetch('http://localhost/index.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    data: 'value'
  })
})
.then(response => response.json())
.then(data => {
  console.log(data);
})
.catch(error => console.error(error));

const client = mqtt.connect(`mqtt://${MQTT_SERVER}:${MQTT_PORT}`, {
  username: MQTT_USERNAME,
  password: MQTT_PASSWORD
});

client.on('connect', () => {
  console.log('Ket noi thanh cong');
  for (const feed of list_feed) {
    client.subscribe(link + feed, (err) => {
      if (err) {
        console.error(err);
      } else {
       //NOTHING
      }
    });
  }
});

client.on('message', (topic, message) => {
  console.log(`Nhan du lieu: ${topic.toString()} ${message.toString()}`);
  if(topic.toString() == 'nhombaton/feeds/V1'){
    io.emit('templateValue', message.toString());
    V1 = message.toString();
  } else if(topic.toString() == 'nhombaton/feeds/V2'){
    io.emit('humiValue', message.toString());
    V2 = message.toString();
  } else if(topic.toString() == 'nhombaton/feeds/V3'){
    io.emit('SandHumiValue', message.toString());
    V3 = message.toString();
  } else if(topic.toString() == 'nhombaton/feeds/V4'){
    io.emit('lightValue', message.toString());
    V3 = message.toString();
  } else {
    //NOTHING
  }
});



app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});

io.on('connection', (socket) => {
  socket.on('automationModel', msg => {
    io.emit('automationModel', msg);
    client.publish('nhombaton/feeds/V14', msg.toString());
    V14 = msg.toString();
  });
});

io.on('connection', (socket) => {
  socket.on('setLedValue', msg => {
    io.emit('setLedValue', msg);
    client.publish('nhombaton/feeds/V12', msg.toString());
    V12 = msg.toString();
  });
});

io.on('connection', (socket) => {
  socket.on('setPumpValue', msg => {
    io.emit('setPumpValue', msg);
    client.publish('nhombaton/feeds/V16', msg.toString());
    V16 = msg.toString();
  });
});

server.listen(port, () => {
  console.log(`Socket.IO server running at http://localhost:${port}/`);
});


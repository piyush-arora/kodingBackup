var mqtt    = require('mqtt');
var client  = mqtt.connect('mqtt://test.mosquitto.org');
 
 
var TOPIC1 =  'hacklabESP8266' ;
var TOPIC2 = 'hacklabUNITY';


var MESSAGE1 = 'STATUS';
var MESSAGE2 = 'CURRENT';

client.on('connect', function () {
    console.log("connected to test broker");
    
  client.subscribe('hacklabESP8266');
    console.log("subscribed to topic : hacklab esp8266");
  client.subscribe('hacklabUNITY');
  console.log("subscribed to topic : hacklab UNITY");
  //client.publish('presence', 'Hello mqtt');
});
 
 
 
 // SERVER LOGIC
client.on('message', function (topic, message) 
{
  console.log("message received");
 // console.log(topic);
  //console.log(message.toString());
  
  
  if(topic == TOPIC2 && message.includes(MESSAGE1))
  {
      console.log("received data from UNITY");
      console.log("message:" + message);
      
      console.log("sending data to ESP8266");
      client.publish(TOPIC1,message);
      console.log("data sent");
      
      
  
      
  }
  // received from ESP8266
  else if(topic == TOPIC1 && message.includes(MESSAGE2))
  {
      console.log("received data from ESP8266");
      console.log("message:" + message);
      
      console.log("sending data to UNITY");
      client.publish(TOPIC2,message);
      console.log("data sent");
      
      
  }
  
  
  
  
});
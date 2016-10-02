// Get the firebase
var firebase = require("firebase");


// Initialize the app
firebase.initializeApp({
  serviceAccount: "./serviceAccountCredentials.json",
  databaseURL: "https://piyush123-cb4ce.firebaseio.com/"
});


// get the database
var db = firebase.database();


// switch database
var mySwitch = db.ref("switch");

// child of switch as users
var myUsers = mySwitch.child("users");

// insert the data for users
myUsers.set(
                {
                     Piyush: {
                                    date_of_birth: "Nov 10 1993",
                                    full_name: "Piyush Arora"
                             },
                     Ashok: {
                                    date_of_birth: "December 9, 1955",
                                    full_name: "Ashok"
                             }
                }
            );

// child of Switch as sensor data
var mySensorData= mySwitch.child("sensor_data");


// insert the sensor_data
mySensorData.set(
                    {
                        Switch1: {
                                        current_sensor : 1.0985 ,
                                        illuminance : 0.878 ,
                                        light_status : "off"
                                 },
                                 
                        Switch2: {
                                        current_sensor : 3.0985 ,
                                        illuminance : 0.838 ,
                                        light_status : "on"
                                 },
                                 
                        
                    }
    
                );


// child of switch as app data
var myAppData= mySwitch.child("app_data");

// inser the app data
myAppData.set(
                    {
                        app1: {
                                        appid : "ASLKSLK" ,
                                        
                                 },
                                 
                        app2: {
                                        appid : "ASKJSKJ" ,
                                 },
                                 
                        
                    }
    
                );



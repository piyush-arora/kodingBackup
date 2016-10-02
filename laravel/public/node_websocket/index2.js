#!/usr/bin/env node

// My constants

var PORT = 8082;


var WebSocketServer = require('websocket').server;

var http = require('http');





// create http server 

var server = http.createServer(
                                    // respone to the web requests 
                                    function(request, response) 
                                    {
                                            console.log((new Date()) + ' Received request for ' + request.url);
                                            //response.writeHead(404);
                                            response.end();
                                            
                                    }
                                );



// listen to the server at port 8080
server.listen(PORT, 
                        // display message that the http server has started
                        function() 
                        {
                                console.log((new Date()) + ' switch web socket  has started at ' + PORT);
                        }
             );



// create websocket server 
wsServer = new WebSocketServer(
                                    {
                                        httpServer: server,
                                        
                                        autoAcceptConnections: false
                                    }
                                    
                              );


// Respond to request made on the websocket
wsServer.on('request', 
                        function(request) 
                        {   
                                // accpet the connection
                                var connection = request.accept();  
                                console.log((new Date()) + ' Connection accepted.');
                                
                                // reponse to the message received
                                connection.on('message', 
                                                        function(message) 
                                                        {
                                                                // message received from switch
                                                                if (message.type === 'utf8') 
                                                                {
                                                                    console.log('Received Message: ' + message.utf8Data);
                                                                    connection.sendUTF(connection.remoteAddress);
                                                                    
                                                                }
                                                                
                                                                // message received from unity
                                                                else if (message.type === 'binary') 
                                                                {
                                                                    console.log('Received Binary Message of ' + message.binaryData.length + ' bytes' + message.binaryData);
                                                                    connection.sendUTF("piyush");
                                                                    //connection.sendBytes(message.binaryData);
                                                                }
                                                        }
                                            );
                            
                                // respone when the device is disconneted
                                connection.on('close', 
                                                        function(reasonCode, description) 
                                                        {
                                                                console.log((new Date()) + ' Peer ' + connection.remoteAddress + ' disconnected.');
                                                        }
                                            );
                        }
);

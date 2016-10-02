<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT, GET, POST");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    
    if(isset($_GET['n']))
    {
        echo "blink(2);
             function blink(pin) 
            {
              pin = pin || 0; 
              var level = GPIO.read(pin); // read current state of pin
              GPIO.setMode(pin, 0, 0);  // set the pin as output
              GPIO.write(pin, !level);  // Change the level 
              
              setTimeout( // delay 
                function() 
                {   
                  blink(pin);
                }
                , 1000); 
            }
  ";
            
        
    }

?>


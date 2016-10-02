<?php

    $car_handle = fopen("car.txt","w");
    
    if(isset($_GET['data']))
    {
        $sensor_data = $_GET['data'];
        
        if($sensor_data == "car")
        {
            echo '0';
        
            
        }
        
        elseif ($sensor_data == "light1") {
            echo "0";
            
        }
        
        elseif($sensor_data == "light2")
        {
            echo "1";
        }
    }
    
    if(isset($_GET['sensor']))
    {
        $sensor_data = $_GET['sensor'];
        
        if($sensor_data == "car")
        {
            echo '0';
        
            
        }
        
        elseif ($sensor_data == "light1") {
            echo "0";
            
        }
        
        elseif($sensor_data == "light2")
        {
            echo "1";
        }
    }


?>
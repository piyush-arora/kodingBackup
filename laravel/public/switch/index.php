<?php
    
    
    
    
    

    
    if(isset($_GET['get_data']))
    {
        
        //echo file_get_contents("switch.json");
        if($_GET['get_data'] == '1')
        {
            
            $json = file_get_contents("switch.json");
            
            $obj = json_decode($json);
            
            print $obj->{'status'}; 
            
            
        }
        
        else if($_GET['get_data'] == '2')
        {
            
            $json = file_get_contents("switch.json");
            
            $obj = json_decode($json);
            
            print $obj->{'bright'}; 
            
            
        }
        
           else if($_GET['get_data'] == '3')
        {
            
            $json = file_get_contents("switch.json");
            
            $obj = json_decode($json);
            
            print $obj->{'current'}; 
            
            
        }
        
        
        
    }
    
    
    else if(isset($_GET['send_status']))
    {
        
        
        $switch_data = array('app_id' => 1, 'switch_id' => 2, 'current' => 3, 'bright' => 4, 'status' => 1);
        $switch_data['status'] = $_GET['send_status'];
        $json_data = json_encode($switch_data);
        $handle = fopen("switch.json","w");
        fwrite($handle,$json_data);
        fclose($handle);   
        
        
        
    }
    
    
    else if(isset($_GET['send_status']))
    {
        
        
        $switch_data = array('app_id' => 1, 'switch_id' => 2, 'current' => 3, 'bright' => 4, 'status' => 1);
        $switch_data['status'] = $_GET['send_status'];
        $json_data = json_encode($switch_data);
        $handle = fopen("switch.json","w");
        fwrite($handle,$json_data);
        fclose($handle);   
        
        
        
    }
    
    else if(isset($_GET['send_bright']))
    {
        $switch_data = array('app_id' => 1, 'switch_id' => 2, 'current' => 3, 'bright' => 4, 'status' => 1);
        $switch_data['bright'] = $_GET['send_bright'];
        $json_data = json_encode($switch_data);
        $handle = fopen("switch.json","w");
        fwrite($handle,$json_data);
        fclose($handle);   
        
        
        
    }
    
    
    else if(isset($_GET['send_current']))
    {
        $switch_data = array('app_id' => 1, 'switch_id' => 2, 'current' => 3, 'bright' => 4, 'status' => 1);
        $switch_data['current'] = $_GET['send_current'];
        $json_data = json_encode($switch_data);
        $handle = fopen("switch.json","w");
        fwrite($handle,$json_data);
        fclose($handle);   
        
        
        
    }


    else if(
                isset($_GET['status'] )  &&
                isset($_GET['current'] )  &&
                isset($_GET['bright'] )  
            
            )
    {
        
        //echo "aa gaya";
        
                //$_GET['status'].$_GET['current'].$_GET['bright']);
        //
        $switch_data = array('app_id' => 1, 'switch_id' => 2, 'current' => 3, 'bright' => 4, 'status' => 1);
        $switch_data['current'] = $_GET['current'];
        $switch_data['bright'] = $_GET['bright'];
        $switch_data['status'] = $_GET['status'];
        $json_data = json_encode($switch_data);
        $handle = fopen("switch.json","w");
        fwrite($handle,$json_data);
        fclose($handle);   
        
        
        
    }

?>
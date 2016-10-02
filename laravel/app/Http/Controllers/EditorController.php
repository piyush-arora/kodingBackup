<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use Socialize;

class EditorController extends Controller
{
    //
    
     public function editor_arduino()
    {
       
        return view('Pages.Editor.arduino_editor');
    }
    
      public function editor_pi()
    {
       
        return view('Pages.Editor.pi_editor');
    }
    
    
      public function editor_blockly()
    {
       
        return view('Pages.Editor.blockly');
    }
    
    
     public function editor_blockly1()
    {
       
        return view('Pages.Blockly.blockly');
    }
    
     public function editor_stm()
    {
      
       
        return view('Pages.Editor.stm_editor');
    }
    
    
      public function compile_pi()
    {
       if($_POST['my_data'])
        {
            $code= "import sys";
            $code = $code . "\n";
            $code=  $code ."from SimpleWebSocketServer import WebSocket, SimpleWebSocketServer";
            $code = $code . "\n";
            $code = $code . "sys.stderr = open('/var/www/laravel/public/boards/pi/errorlog.txt', 'w')";
            $code = $code . "\n";
            $code=  $code . $_POST['my_data'];
            $code = $code . "\n";
            $code = $code . "sys.stderr.close()";
            $code = $code . "\n";
            $code = $code . "sys.stderr = sys.__stderr__";
            $code = $code . "\n";
            $code = $code . "GPIO.get_json()";
            
            
            $handle=fopen('./boards/pi/my_code.py','w');
            fwrite($handle,$code);
            fclose($handle);

        }

    // python ./boards/pi/my_code.py > ./boards/pi/Results.txt
        
        
     $command = escapeshellcmd('/var/www/laravel/public/boards/pi/my_code.py');
     
       //$res =  shell_exec('sudo python ./boards/pi/my_code.py > ./boards/pi/Results.txt');

        $output = shell_exec("python ./boards/pi/my_code.py");
        
        if(isset($output) |  filesize( "./boards/pi/errorlog.txt")==0 )
        {
            echo $output;
                // echo "COMPILE SUCCESS !!!!!!";
        }
        
        else
        {
            // error
            
            $compile_result = file_get_contents('./boards/pi/errorlog.txt');
            echo $compile_result;
            
            
            
        }
        //$compile_result = file_get_contents('./boards/pi/errorlog.txt');
       // echo 'hello';
        
        //echo $compile_result;
        
    }
    
    
    
    public function compile_arduino()
    {

       
  
      
      
        if($_POST['my_data'])
        {
            $code=$_POST['my_data'];
            //echo $code;
            
           $handle=fopen('./boards/arduino/src/blink.pde','w') or die("cannot open file");
           
            fwrite($handle,$code);
            fclose($handle);
        
        }

        
       $output1 = shell_exec('platformio run -d ./boards/arduino 2>&1 | tee compile_result.txt');
        
        //$output1 = shell_exec('sudo ssh -t localhost "sudo platformio run -d /var/www/laravel/public//boards/arduino 2>&1 | tee /var/www/laravel/public/compile_result.txt');
        
        echo $output1;
        
        //exec('(platformio run -d ./boards/arduino) | y | 2>&1 | tee compile_result.txt');
        
        $compile_result = file_get_contents('compile_result.txt');
        

        echo $compile_result;
        //        return view('Pages.editor',compact('compile_result'));


    }
    
    
}

<?php

header('Access-Control-Allow-Origin: *');  
$dll_data = file_get_contents("./MyAssembly.dll");
if($dll_data)
    echo $dll_data;
    
    else echo "grrrrrrr";


//header('Access-Control-Allow-Origin: *');  


/*header("Access-Control-Allow-Credentials: true,
        Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time,
        Access-Control-Allow-Methods: GET, POST, OPTIONS,
        Access-Control-Allow-Origin: *");
  */      
//header("Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time");
//header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
//header("Access-Control-Allow-Origin: *");

//$dll_data = file_get_contents.("/MyAssembly.dll");
//$attachment_location = "./MyAssembly.dll";
        //if (file_exists($attachment_location)) {

            //header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
            //header("Cache-Control: public"); // needed for internet explorer
            //header("Content-Type: application/zip");
            //header("Content-Transfer-Encoding: Binary");
            //header("Content-Length:".filesize($attachment_location));
            //header("Content-Disposition: attachment; filename=file.zip");
          //  readfile($attachment_location);
            //die();        
        //} else {
           // die("Error: File not found.");
        //} 
        
        
        //echo $dll_data;
        
?>
<?php


if(isset($_GET['data']))
{
    $handle = fopen("toggle_data.txt","w");
    $data = $_GET['data'];
    
    fwrite($handle,$data);
    
}



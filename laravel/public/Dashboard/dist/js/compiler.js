
$(document).ready(function()
{
    $("#loading_arduino").hide();
    $("#loading_stm").hide();
     $("#loading_pi").hide();
    
    $("#compile_button_arduino").click(function()
    {
        $("#loading_arduino").show();
         var code = editor.getValue();
        // alert('COMPILING CODE ........'+"\n"+'CHECK THE COMPILE WINDOW');
        
        $.post("/editor/compile_arduino",
        {
            my_data: code,
            
        },
        function(data, status)
        {
            if(status == "success")
            {
                $("#loading_arduino").hide();
                document.getElementById("compiler").innerHTML = data;
            }
             else
             
             alert("Compiler not working now !!!! \n try again later");
        });
        
        //$("#test").hide();
    });
    
    $("#compile_button_stm").click(function()
    {
        
         var code = editor.getValue();
         $("#loading_stm").show();
         //alert('COMPILING CODE ........'+"\n"+'CHECK THE COMPILE WINDOW');
        
        $.post("/editor/compile_stm",
        {
            my_data: code,
            
        },
        function(data, status)
        {
            if(status == "success")
            {
                $("#loading_stm").hide();
                 document.getElementById("compiler").innerHTML = data;
            }
             
             else
             
             alert("Compiler not working now !!!! \n try again later");
        });
        
        //$("#test").hide();
    });
    
    
     $("#compile_button_pi").click(function()
    {
        
         var code = editor.getValue();
         $("#loading_pi").show();
         //alert('COMPILING CODE ........'+"\n"+'CHECK THE COMPILE WINDOW');
        
        $.post("/editor/compile_pi",
        {
            my_data: code,
            
        },
        function(data, status)
        {
            if(status == "success")
            {
                $("#loading_pi").hide();
                 document.getElementById("compiler").innerHTML = data;
            }
             
             else
             
             alert("Compiler not working now !!!! \n try again later");
        });
        
        //$("#test").hide();
    });
    
});


 
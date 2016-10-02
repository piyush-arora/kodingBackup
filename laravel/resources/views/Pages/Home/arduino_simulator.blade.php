@extends('template')



    @section('active_boards')

        active

    @endsection


     @section('page_title')

        Arduino Simulator

    @endsection

    @section('page_subtitle')

        This simulator is designed by 123dcircuits and autodesk <br>
        <b> For more information about the simulation please visit https://123d.circuits.io </b>
        

    @endsection

        @section('content')

        <div class="row">

            <!---------------------->
            <!--ARDUINO NANO-->
            <!---------------------->
            
            <div class="col-md-12">
                    <!-- /.box-body -->
                    
                    
           <iframe class = "box table-responsive" 
           frameborder='0'
           height='448'
           marginheight='0'
           marginwidth='0'
           scrolling='yes'
           src='https://123d.circuits.io/circuits/973265-led-blink/edit' 
           width='650'>
           </iframe>
        
           </div>
        
        
        </div>


        

        @endsection


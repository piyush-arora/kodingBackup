@extends('template1')



    @section('active_boards')

        active

    @endsection


     @section('page_title')

        BOARDS 

    @endsection

    @section('page_subtitle')

        Choose your favourite board to work with 
        <br>
        <b>(This Website is still under construction!!!!)</b>

    @endsection

        @section('content')

        <div class="row">
            
            
             <!---------------------->
            <!--Raspberry pi-->
            <!---------------------->
            
            <div class="col-md-3">
            <a href="./blockly">
                <div class="box box-default collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Raspberry pi</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                        <div class="user-panel">
                            <img src="Dashboard/dist/img/pi.png" class="img-circle" >
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                       The Raspberry Pi is a low cost, credit-card sized computer that plugs into a computer monitor or TV, 
                       and uses a standard keyboard and mouse. It is a capable little device that enables people of all ages
                       to explore computing, and to learn how to program in languages like Scratch and Python. It’s capable
                       of doing everything you’d expect a desktop computer to do, from browsing the internet and playing
                       high-definition video, to making spreadsheets, word-processing, and playing games.
                       </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
                <!--
                <button type="submit" class="btn btn-block btn-success .btn-sm col-md-4" >Choose</button>
                -->
                </a>
                <br>
            </div>
            
            
            
            <!---------------------->
            <!--ARDUINO NANO-->
            <!---------------------->
            
            <div class="col-md-3">
            <!--
            <a href="./editor_arduino">
            
            -->
                <div class="box box-default collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Arduino Nano</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                        <div class="user-panel">
                            <img src="Dashboard/dist/img/arduino.png" class="img-circle" >
                        </div>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                       The Uno is a microcontroller board based on the ATmega328P. It has 14 digital input/output pins 
                       (of which 6 can be used as PWM outputs), 6 analog inputs, a 16 MHz quartz crystal, a USB connection,
                       a power jack, an ICSP header and a reset button. It contains everything needed to support the microcontroller;
                       simply connect it to a computer with a USB cable or power it with a AC-to-DC adapter or battery to get started. 
                     </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
                <!--
                <button type="submit" class="btn btn-block btn-success .btn-sm col-md-4" >Choose</button>
                </a>
                -->
                
                
                <br>
            </div>

           

           

        </div>

        @endsection


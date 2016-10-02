@extends('template1')


@section('active_editor')

    active

@endsection

@section('page_title')

   Raspberry Pi 

@endsection

@section('page_subtitle')

    Work on your raspberry pi here

@endsection

@section('content')

    <div class="box table-responsive" >
         <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#tab_1" data-toggle="tab">
                    my_code.py
                </a>
              </li>
              <li >
                <a href="#tab_2" data-toggle="tab">
                    Simulation
                </a>
              </li>
              
            </ul>
        </div>
        
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <article>
                    <script>
                        CodeMirror.commands.autocomplete = function(cm) {
                            cm.showHint({hint: CodeMirror.hint.anyword});
                        }
        
                        value = "import RPi.GPIO as GPIO"+"\n";
                        value = value + "import time"+"\n";
                        value = value + "\n"+"\n";
                        value = value + "ledPin = 23"+ "\n" ;
                        value = value + "\n";
                        value = value + "GPIO.setmode(GPIO.BCM)"+"\n";
                        value = value + "\n" ;
                        value = value + "GPIO.setup(ledPin, GPIO.OUT)"+"\n";
                        value = value + "\n"+"\n";
                        value = value + "GPIO.output(ledPin, GPIO.LOW)"+ "\n" ;
                        value = value + "time.sleep(1)"+ "\n" ;
                        value = value + "GPIO.output(ledPin, GPIO.HIGH)"+ "\n" ;
                        value = value + "time.sleep(1)"+ "\n";
        
        
                        var editor = CodeMirror(document.body.getElementsByTagName("article")[0], {
                            value: value,
                            lineNumbers: true,
                            mode: {
                                      name: "python",
                                      version: 3,
                                      singleLineStringErrors: false
                                
                                  },
                            keyMap: "sublime",
                            autoCloseBrackets: true,
                            matchBrackets: true,
                            showCursorWhenSelecting: true,
                            extraKeys: {"Ctrl-Space": "autocomplete"},
                            theme: "monokai",
                            tabSize: 5
                        });
                    </script>

                </article>


            </div>
            
              <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              
              <canvas class="emscripten " id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px">
              </canvas>
                <script type='text/javascript'>
              var Module = {
                TOTAL_MEMORY: 268435456,
                errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
                compatibilitycheck: null,
                dataUrl: "http://hackincloud.com/Release/Web Output.data",
                codeUrl: "http://hackincloud.com/Release/Web Output.js",
                memUrl: "http://hackincloud.com/Release/Web Output.mem",
              };
            </script>
            <script src="http://hackincloud.com/Release/UnityLoader.js"></script>
                
              
              </div>
              <!-- /.tab-pane -->
             
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
       

       


@endsection

@section('button_footer')

    <div class="box-body">

        
        <a class="btn btn-app" id="compile_button_pi" > 
            <i class="fa fa-repeat"></i> Compile
        </a>
        
        
        
        
        <div class="row">
        
            <div class="col-md-12 ">
                <div class="overlay">
                    <div class="box box-default ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Compile Window</h3>
                                
                                <div class="box-tools pull-right">
                                     <i  class="fa fa-refresh fa-spin" id="loading_pi"></i>
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" ><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <!-- /.box-tools -->
                        </div>
                <!-- /.box-header -->
                        <div class="box-body">
                            <div id="compiler">
                            </div>
                <!-- /.box-body -->
                       
                        </div>
            <!-- /.box -->

                    </div>

                
                </div>  
         
            </div>

        </div>
    </div>
@endsection




test
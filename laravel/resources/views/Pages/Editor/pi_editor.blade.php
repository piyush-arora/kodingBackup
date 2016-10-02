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

                <article>
                    <script>
                        CodeMirror.commands.autocomplete = function(cm) {
                            cm.showHint({hint: CodeMirror.hint.anyword});
                        }
        
                        value = "import RPi.GPIO as GPIO"+"\n";
                        //value = value + "import time"+"\n";
                        value = value + "\n"+"\n";
                        value = value + "ledPin = 23"+ "\n" ;
                        value = value + "\n";
                        value = value + "GPIO.setmode(GPIO.BCM)"+"\n";
                        value = value + "\n" ;
                        value = value + "GPIO.setup(ledPin, GPIO.OUT)"+"\n";
                        value = value + "\n"+"\n";
                        //value = value + "GPIO.output(ledPin, GPIO.LOW)"+ "\n" ;
                        //value = value + "time.sleep(1)"+ "\n" ;
                        value = value + "GPIO.output(ledPin, GPIO.HIGH)"+ "\n" ;
                        //value = value + "time.sleep(1)"+ "\n";
        
        
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





@extends('template1')


@section('active_editor')

    active

@endsection

@section('page_title')

    Arduino Editor

@endsection

@section('page_subtitle')

    An online editor for compiling the arduino code in the cloud

@endsection

@section('content')

    <div class="box table-responsive" >
         <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Tab 1</a></li>
              <li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
              <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            </div>
         <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <article>
                 <script>
                CodeMirror.commands.autocomplete = function(cm) {
                    cm.showHint({hint: CodeMirror.hint.anyword});
                }

                value = "void setup()"+"\n";
                value = value + "{"+"\n";
                value = value + "\n"+ "\n" ;
                value = value + "\n";
                value = value + "}"+"\n";
                value = value + "\n" ;
                value = value + "void loop()"+"\n";
                value = value + "{"+"\n";
                value = value + "\n"+ "\n" ;
                value = value + "\n"+ "\n" ;
                value = value + "}"+"\n";


                var editor = CodeMirror(document.body.getElementsByTagName("article")[0], {
                    value: value,
                    lineNumbers: true,
                    mode: "text/x-csrc",
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
              
              <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px"></canvas>
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
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
       

       


@endsection

@section('button_footer')

    <div class="box-body">

        
        <a class="btn btn-app" id="compile_button_arduino" > 
            <i class="fa fa-repeat"></i> Compile
        </a>
        
        
        
        
        <div class="row">
        
            <div class="col-md-12 ">
                <div class="overlay">
                    <div class="box box-default ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Compile Window</h3>
                                
                                <div class="box-tools pull-right">
                                     <i  class="fa fa-refresh fa-spin" id="loading_arduino"></i>
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





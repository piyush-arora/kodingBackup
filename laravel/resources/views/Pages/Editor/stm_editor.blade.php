@extends('template')


@section('active_editor')

    active

@endsection

@section('page_title')

    STM Editor

@endsection

@section('page_subtitle')

    An online editor for compiling the stm code in the cloud

@endsection

@section('content')

    <div class="box table-responsive" >


        <article>
            <script>


                CodeMirror.commands.autocomplete = function(cm) {
                    cm.showHint({hint: CodeMirror.hint.anyword});
                }

                value = "#include \"stm32f4xx.h\""+"\n\n" ;
                value = value + "#define LEDPORT (GPIOD)"+"\n";
                value = value + "#define LED1 (12)"+ "\n" ;
                value = value + "#define LED2 (13)"+"\n";
                value = value + "#define ENABLE_GPIO_CLOCK (RCC->AHB1ENR |= RCC_AHB1ENR_GPIODEN)"+"\n";
                value = value + "#define GPIOMODER ((GPIO_MODER_MODER13_0|GPIO_MODER_MODER12_0))" + "\n" ;
                value = value + "\n"+"\n";
                value = value + "int main(void)"+"\n";
                value = value + "{"+ "\n" ;
                value = value + "\n"+ "\n" ;
                value = value + "  ENABLE_GPIO_CLOCK; 		 					// enable the clock to GPIO"+"\n";
                value = value + "  LEDPORT->MODER |= GPIOMODER;				// set pins to be general purpose output"+"\n";
                value = value + "  for (;;)"+"\n";
                value = value + "  {"+"\n";
                value = value + "     LEDPORT->ODR ^= (1<<LED1|1<<LED2); 		// toggle diodes"+"\n";
                value = value + "  }"+"\n";
                value = value + "  return 0;"+"\n";
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








@endsection

@section('button_footer')

    <div class="box-body">

        
        <a class="btn btn-app" id="compile_button_stm" > 
            <i class="fa fa-repeat"></i> Compile
        </a>
        

        <div class="row">
        <div class="col-md-12 ">
            <div class="box box-default ">
                <div class="box-header with-border">
                    <h3 class="box-title">Compile Window</h3>

                    <div class="box-tools pull-right">
                        <i  class="fa fa-refresh fa-spin" id="loading_stm"></i>
                                   
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
@endsection





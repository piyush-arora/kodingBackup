@extends('template1')



    @section('active_boards')

        active

    @endsection


     @section('page_title')

        BOARDS 

    @endsection

    @section('page_subtitle')

        Choose your favourite board to work with

    @endsection

        @section('content')
            
            
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
        
          @endsection
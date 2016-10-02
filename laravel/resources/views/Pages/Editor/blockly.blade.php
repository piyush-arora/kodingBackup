@extends('template1')

<!-- Scripts for Blockly  -->

  <script src="Blockly/demos/interpreter/../../blockly_compressed.js"></script>
  <script src="Blockly/demos/interpreter/../../blocks_compressed.js"></script>
  <script src="Blockly/demos/interpreter/../../javascript_compressed.js"></script>
  <script src="Blockly/demos/interpreter/../../msg/js/en.js"></script>
  <script src="Blockly/demos/interpreter/../../blocks/Rasp/GPIO.js"></script>
  
  <script src="Blockly/demos/interpreter/Rpi.js"></script>
  
  <!--Scripts of unity-->
  
  <script src="Blockly/demos/interpreter/b/TemplateData/UnityProgress.js"></script>
    
    



    @section('active_boards')

        active

    @endsection


     @section('page_title')

        BLOCKLY

    @endsection

    @section('page_subtitle')

        Choose your favourite board to work with

    @endsection

        @section('content')

        <div class="row">
            <div class="col-md-12">
                 <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1" data-toggle="tab">
                                Tab 1
                            </a>
                        </li>
                        <li>
                            <a href="#tab_2" data-toggle="tab">
                                Tab 2
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Options <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" onclick="SetFullscreen(1)";>
                                        Full Screen
                                    </a>
                                </li>
                            </ul>
                        </li>
                
                        <li class="pull-right">
                            <a href="#" class="text-muted">
                                <i class="fa fa-gear"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                
                                <p>
                                    <button onclick="parseCode()">Run Code</button>
                                    <button onclick="stepCode()" id="stepButton" disabled="disabled">Step JavaScript</button>
                                    <button onclick="run_simulation()">Run Simulation</button>
                                    <button onclick="stop_simulation()">Stop Simulation</button>
                                  </p>

                                  <div id="blocklyDiv" style="height: 480px; width: 600px;"></div>    
                                                
                                  <xml id="toolbox" style="display: none">
                                        <category name="Logic">
                                            <block type="controls_if"></block>
                                            <block type="logic_compare"></block>
                                            <block type="logic_operation"></block>
                                            <block type="logic_negate"></block>
                                            <block type="logic_boolean"></block>
                                        </category>
                                        <category name="Loops">
                                            <block type="controls_repeat_ext">
                                                    <value name="TIMES">
                                                        <block type="math_number">
                                                            <field name="NUM">1000</field>
                                                        </block>
                                                    </value>
                                            </block>
                                            <block type="controls_whileUntil"></block>
                                        </category>
                                        <category name="Math">
                                            <block type="math_number"></block>
                                            <block type="math_arithmetic"></block>
                                            <block type="math_single"></block>
                                        </category> 
                                        <category name="Text">
                                            <block type="text"></block>
                                            <block type="text_length"></block>
                                            <block type="text_print"></block>
                                            <block type="text_prompt_ext">
                                                <value name="TEXT">
                                                    <block type="text"></block>
                                                </value>
                                            </block>
                                        </category>
                                        <category name="Variables" custom="VARIABLE"></category>
                                        <category name="Functions" custom="PROCEDURE"></category>
                                        <category name="Raspberry pi" >
                                            <block type="pinMode"></block>
                                            <block type="digitalWrite"></block>
                                            <block type="delay"></block>
                                        </category>
                                    </xml>

                                    <script>
                                            var workspace = Blockly.inject('blocklyDiv',
                                                {media: 'Blockly/demos/interpreter/../../media/',
                                                toolbox: document.getElementById('toolbox')});
                                                Blockly.Xml.domToWorkspace(document.getElementById('startBlocks'),
                                                workspace);

                                            var myInterpreter = null;

    
                                            var highlightPause = false;

                                            function highlightBlock(id) 
                                            {
                                                workspace.highlightBlock(id);
                                                highlightPause = true;
                                            }

                                            function parseCode() 
                                            {
                                                var code = Blockly.JavaScript.workspaceToCode(workspace);
                                                //alert('Ready to execute this code:\n\n' + code);
                                                eval(code);
                                            }

                                            function run_simulation()
                                            {
                                              SendMessage("Blockly","run_simulation");
                                        
                                            }
                                        
                                        
                                            function stop_simulation()
                                            {
                                                SendMessage("Blockly","stop_simulation");
                                            }
                                        
                                            function stepCode() 
                                            {
                                              try 
                                              {
                                                var ok = myInterpreter.step();
                                              }
                                              finally 
                                              {
                                                if (!ok)
                                                {
                                                  // Program complete, no more code to execute.
                                                  document.getElementById('stepButton').disabled = 'disabled';
                                                  return;
                                                }
                                              }
                                              if (highlightPause) 
                                              {
                                                // A block has been highlighted.  Pause execution here.
                                                highlightPause = false;
                                              } 
                                              else 
                                              {
                                                // Keep executing until a highlight statement is reached.
                                                stepCode();
                                              }
                                            }
                                     </script>
                                     
                        </div>



              <!-- /.tab-pane -->
              
              
                        <div class="tab-pane" id="tab_2">
                    
                    
                            <div >
                                <canvas  id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px"></canvas>
                     
                            </div>
                            <script type='text/javascript'>
                            
                                var Module = {
                                    TOTAL_MEMORY: 1073741824,
                                    errorhandler: null,     // arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
                                    compatibilitycheck: null,
                                    dataUrl: "Blockly/demos/interpreter/b/Release/WebOutput.data",
                                    codeUrl: "Blockly/demos/interpreter/b/Release/WebOutput.js",
                                    memUrl: "Blockly/demos/interpreter/b/Release/WebOutput.mem",
    
                                    };
                            </script>
                        
                            <script src="Blockly/demos/interpreter/b/Release/UnityLoader.js"></script>
                        </div>
                    
                    
              <!-- /.tab-pane -->
                    
              <!-- /.tab-p</div>ane -->
                </div>
            </div>
        </div>
                

            

        @endsection

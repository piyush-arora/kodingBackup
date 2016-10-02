<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
  <script src="Dashboard/block/blockly_compressed.js"></script>
  <script src="Dashboard/block/blocks_compressed.js"></script>
  <script src="Dashboard/block/msg/js/en.js"></script>
  
  
</head>
<body>





<div id= "blocklyArea">

      <div id="blocklyDiv" style="height: 480px; width: 600px;"></div>

</div>
  <xml id="toolbox" style="display: none">
    <block type="controls_if"></block>
    <block type="logic_compare"></block>
    <block type="controls_repeat_ext"></block>
    <block type="math_number"></block>
    <block type="math_arithmetic"></block>
    <block type="text"></block>
    <block type="text_print"></block>
  </xml>


  



  
    <script>
    var workspace = Blockly.inject('blocklyDiv',
      {
      toolbox: document.getElementById('toolbox')
          
      });
    </script>
  

</body>
</html>

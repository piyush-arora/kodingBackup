//var zetta = require('zetta');
//var LED = require('zetta-led-mock-driver');
//var Photocell = require('zetta-photocell-mock-driver');
//var duskToDawnLight = require('./apps/dusk_to_dawn_light');

//zetta()
//  .name('Piyush-Arora')
//  .use(LED)
//  .use(Photocell)
//  .use(duskToDawnLight)
//  .link('http://hello-zetta.herokuapp.com/')  // can be removed
//  .listen(1337, function(){
 //   console.log('Zetta is running at http://127.0.0.1:1337');
//});



var zetta = require('zetta');

zetta()
  .name('smart switch')    
  .listen(3000, function(err) {
    console.log('Server listening on port 3000');
    
    
    
  });
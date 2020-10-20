var h = require('http');
var ev = require('events');
var fs = require('fs');
var ee = new ev.EventEmitter();
ee.addListener('logrequest',logRequest);

var logRequest = function(r)
{
  console.log("logrequest eventHandler");
  fs.appendFile('log.txt',str,function(){
	  
   var str = "Request recieved at "+new Date().toString()+" for "+r.url+"\n";	  
	  if(!err)
	  {
		 console.log("request logged in file"); 
	  }
  });
}


var server = createServer(function(req,res){
	 if(req.url == '/favicon.ico')
		 return;
      ee.emit('logrequest',req);
     res.writeHead(200,{'Content-Type':'text/html'});
	 res.wrte("<p>This request is logged</p>");
	 res.end();
});
server.listen(8100);

console.log("server started");
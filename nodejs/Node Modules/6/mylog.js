

//  stop seeing 404 errors in your client console

var http = require('http');
var event = require('events');
var file = require('fs');
//create EventEmitter instance for handling events
var eventEmitter = new event.EventEmitter
//addEventListener for listening the events
eventEmitter.addListener('logrequest',function(request)
{
   console.log("Log Request event handler invoked...");
   //fetch current time for log request
   var str = "Request received at "+new Date().toString()+" for "+request.url+"\n";
   //store logs in one temp file
   file.appendFile('mylog.txt', str, function(error)
   {
         if(!error)
	      console.log("request is logged in log file.");			
    });
});

http.createServer(function (q, r) { 

  // control for favicon

  if (q.url === '/favicon.ico') 
  {
	      
    r.writeHead(200, {'Content-Type': 'image/x-icon'} );
	
	 eventEmitter.emit('logrequest',q);
	 
    r.end();
    console.log('favicon requested');
    return;
  }

  // not the favicon? say hai
  console.log('hello');
  r.writeHead(200, {'Content-Type': 'text/plain'} );
  r.write('Hello, world!');
  r.end();
  
}).listen(8000);

console.log('Server running at http://127.0.0.1:8000/');

var u = require('http');

var u = require('url');

var server = http.createServer(function(req,res){
     var url_parts = url.parse(req.url,true);
	 var path  = url_parts.pathname;
	 var file = path.substring(1);
	 
});

server.listen(8100);

console.log("server started on port 8100");

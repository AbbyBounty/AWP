//importing 'http' core module
var http = require("http");

////importing 'url' core module
var url = require("url");

//create your own web server
http.createServer(function(request, response)
{
    var urlparam = url.parse(request.url,true);
	
    var uname =   urlparam.query.name;
	
    response.writeHead(200, {'Content-Type':'text/html'});
    response.write("<h1> Welcome :: "+ uname +" </h1>");
	
    response.end();
	
}).listen(9000);
console.log("Sever started on port:9000");
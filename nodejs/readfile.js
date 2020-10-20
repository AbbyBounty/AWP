var fs = require('fs');

var u = require("url");


fs.readFile('data.txt',function(err,data){
   if(!err)
   console.log(data.toString());
});

console.log("reading in process....");


var url_parts = u.parse("http://localhost:8081/data.txt?color=red",true);

console.log(url_parts.host);

console.log(url_parts.pathname);

console.log(url_parts.query.color);


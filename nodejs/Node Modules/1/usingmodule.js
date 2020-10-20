var http = require('http');
var mymod = require('./mymodule');



http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  //res.write("The date and time are currently: " + dt.myDateTime());
console.log("12 is prime : "+mymod.isPrime(12));

console.log("28 is perfact : "+mymod.isPerfect(28));

console.log(mymod.calFact(5));
  res.end();
}).listen(8080);






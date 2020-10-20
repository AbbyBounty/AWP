var http = require('http'); // Require HTTP module
var pageViewCount = 0; // Declare and initialise the page view count
var fs = require("fs");

var server = http.createServer(function (req, res) {
  res.writeHead(200, { 'Content-Type': 'text/plain' }); // Headers

  if (req.url !== '/favicon.ico') 
 {
    pageViewCount++;
}
   // Increase the page view count for every successful page load request

  console.log('There are currently ' + pageViewCount + ' views'); 
  // Output in console the amount of total page views
  
 var data = pageViewCount;
//res.end();
 fs.writeFile('temp.txt', data, function (err) {
  if (err) throw err;
  console.log('Saved!');
  //return res.end(`Visit Count ${data}`);
}); 
  
  fs.readFile('temp.txt', function (err, data) {
      if (err) {
         return console.error(err);
      }
     return res.end(`Visit Count ${data}`);
   });
  
});

server.listen(8000);
console.log('Server is currently running');
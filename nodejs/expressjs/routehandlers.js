var exp = require('express');

var app = exp();

app.listen(8100,function() {
	console.log("server started on port 8100");
});

app.get('/home',function (req,res){
	res.send("<h1>Hello from home</h1>");
});

app.get('/products',function (req,res){
	res.send("<h1>Hello from products</h1>");
});

app.get('/home.html',function(req,res){
	res.sendFile(__dirname+'/home.html'); 
});

app.all('/*',functin (req,res){
	res.send("invalid URL");
});

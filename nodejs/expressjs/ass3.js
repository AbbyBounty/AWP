
var exp = require('express');

var app = exp();

app.listen(9000,function(){
    console.log("server started at 9000");
});

app.get('/logincheck/:id/:name',function(req,res){
	var id = req.params.id;
	var name = req.params.name;
    if(id==101&&name=='Bakul')
	   res.send("true");

    else
    res.send("<h3>login failed</h3>");
});



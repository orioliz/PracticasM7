var http=require('http');

var server=http.createServer(function(request, response){
	response.writeHead(200, {'Content-type':'text/html'});
	response.write('<h2>Hello World!!!!!!!!!</h2>');
	response.end();
});  

server.listen(8888);
console.log('server iniciado ok');
var http = require('http');

function handleRequest(request, response){
    response.end('<b>Bienvenido a Node !</b> ' + request.url);
}

var server = http.createServer(handleRequest);

server.listen(3000, function(){
    console.log("Connexió establerta");
});
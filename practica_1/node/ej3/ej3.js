var os=require('os');

console.log('Sistema operatiu:'+os.platform());
console.log('Versió del sistema operatiu:'+os.release());
console.log('Memoria total:'+os.totalmem()+' bytes');
console.log('Memoria lliure:'+os.freemem()+' bytes');


server.listen(8888);


console.log('server iniciado ok');
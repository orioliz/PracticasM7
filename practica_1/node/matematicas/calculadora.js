var Calculadora = function(numeroUno,numeroDos){
   this.numeroUno = numeroUno;
   this.numeroDos = numeroDos;
}

Calculadora.prototype.print = function(resultado){
   console.log(resultado);
}

Calculadora.prototype.suma = function(){
   var resultado = this.numeroUno + this.numeroDos;
   this.print(resultado);
}

Calculadora.prototype.resta = function(){
   var resultado = this.numeroDos - this.numeroUno ;
   this.print(resultado);
}

Calculadora.prototype.calculoMultiplicar = function(self){
   var resultado = self.numeroUno * self.numeroDos;
   self.print(resultado);
}

Calculadora.prototype.multiplica = function(){
   var self = this;
   this.calculoMultiplicar(self);
}

module.exports = Calculadora;
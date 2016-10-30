var Mates=function() {
	this.PI=3.14;

	this.operadors{
		op1:0,
		op2:0
	};

	this.suma=function(op1,op2){
		var res=op1+op2;
		this.operadors={
			op1:op1,
			op2:op2
			}
		console.log('El resultado de '+op1+' y '+op2+' es:'+res);
		console.log(this.operadors);
		return this.operadors;
	};

	this.resta=function() {
		var res=op1-op2;
		this.operadors={
			op1:op1;
			op2:op2;
			}
		console.log('El resultado de '+op1+' y '+op2+' es:'+res);
		console.log(this.operadors);
		return this.operadors;
	};

	this.multi=function() {
		var res=op1*op2;
		this.operadors={
			op1:op1,
			op2:op2,
			}
		console.log('El resultado de '+op1+' por '+op2+' es:'+res);
		console.log(this.operadors);
		return this.operadors;
	};

};


module.exports=Mates;
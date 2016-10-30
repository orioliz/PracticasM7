var Agenda=function(title,initial) {

	this.title=title;
	this.contents=initial;

	this.changeTitle=function(title){
		this.title=title;
	};
	this.push=function(num,tel){
		this.contents[nom]=tel;
	};
	this.erase=function(){
		delete this.contents[nom];
	};
	this.list=function(){
		//listar 
		for (var i in this.contents){
			console.log(i+ ": "+this.contents[i]);
		};
	};




};
module.exports=Agenda;
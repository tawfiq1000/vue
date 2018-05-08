new Vue({
	el:'#vue-app',
	data:{
		name:'abir',
		job:'web developer',
		website:'http://www.google.com',
		websiteTag:'<a href="http://www.google.com">protfolio</a>',
		age:25,
		x:0,
		y:0,
	},

	methods:{

		greet:function(time){
			return "good "+time+" "+this.name;
			console.log('a');
		},
		add:function(value){
			return this.age+=value;
			console.log('a');
		},
		subtract:function(value){
			return this.age-=value;
			console.log('a');
		},
		updatedXY:function(event){
			this.x=event.offsetX;
			this.y=event.offsetY;
			console.log('a');
		},
		click:function(){
			 alert("u clicked me");
		},
		logName:function(){
			console.log('u just put ur name');
		},
		logAge:function(){
			console.log('u just put ur age');
		},

	}	
	

});	


new Vue({
	el:'#vue-css',
	data:{
		available:false,
		nearby:false,
	},
	methods:{

	},
	computed:{
		compClasses:function(){
			return{
				available:this.available,
				nearby:this.nearby,
			}
		}
	}

});
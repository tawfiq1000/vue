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
		},
		add:function(value){
			return this.age+=value;
		},
		subtract:function(value){
			return this.age-=value;
		},
		updatedXY:function(event){
			this.x=event.offsetX;
			this.y=event.offsetY;
		},
		click:function(){
			 alert("u clicked me");
		}

	}	
	

});	
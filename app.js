new Vue({
	el:'#vue-app',
	data:{
		name:'abir',
		job:'web developer',
		website:'http://www.google.com',
		websiteTag:'<a href="http://www.google.com">protfolio</a>',
	},

	methods:{

		greet:function(time){
			return "good "+time+" "+this.name;
		}
	}	
	

});	
new Vue({
	el:'#vue-app',
	data:{
		name:'abir',
		job:'web developer',
	},
	methods:{

		greet:function(time){
			return "good "+time+" "+this.name;
		}
	}	
	

});	
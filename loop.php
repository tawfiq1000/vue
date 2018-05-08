<!DOCTYPE html>
<html>
<head>
	<title>DYNAMIC CSS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="vue-loop">
		<ul>
			<li v-for="(name,index) in names">{{index}}.{{name}}</li>
		</ul>
		<h2>in detail about our ninjas</h2>
		<ul>
			<li v-for="(ninja,index) in ninjas">{{index}}.{{ninja.name}}-{{ninja.age}}</li>
		</ul>
		
	
	</div>
	
	<script>
		new Vue({
			el:'#vue-loop',
			data:{
				names:['jhon','doe','kim','alex'],
				ninjas:[
				{name:'jhon',age:25},
				{name:'doe',age:30},
				{name:'kim',age:33},
				{name:'alex',age:28},

				]
			},
			methods:{

			},
			computed:{

			}

		});
	</script>
</body>
</html>
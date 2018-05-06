<!DOCTYPE html>
<html>
<head>
	<title>Computed Properties</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="app">
		<h1>Computed Properties</h1>
		<button v-on:click="a++">increment 1 for a</button>
		<button v-on:click="b++">increment 1 for b</button>

		<p>A:<mark>{{a}}</mark></p>
		<p>B:<mark>{{b}}</mark></p>
		<br>
		<br>
		<br>
		<p>A+Age:<mark>{{addToA}}</mark></p>
		<p>B+Age:<mark>{{addToB}}</mark></p>


		
	</div>


	<script type="text/javascript">
		new Vue({
			el:'#app',
			data:{
				age:25,
				a:0,
				b:0,
				
			},
			methods:{
				// addToA:function(){
				// 	console.log('i am run');
				// 	return this.a+this.age
				// },
				// addToB:function(){
				// 	console.log('run');
				// 	return this.b+this.age
				// },

			},
			computed:{
				addToA:function(){
					console.log('i am run');
					return this.a+this.age
				},
				addToB:function(){
					console.log('run');
					return this.b+this.age
				},

			}
			
		});
	</script>

</body>
</html>
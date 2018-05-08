<!DOCTYPE html>
<html>
<head>
	<title>DYNAMIC CSS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="vue-conditional">
		<h1>Conditionals</h1>
		<button v-on:click="success=!success">toggole success message</button>
		<button v-on:click="error=!error">toggole error message</button>
		<!-- <p v-if="error">there has been an error</p>
		<p v-else-if="success">there has been an error</p> -->
		<p v-show="error">error</p>
		<p v-show="success">woo</p>
	
	</div>
	<script src="app.js"></script>
	<script>
		new Vue({
			el:'#vue-conditional',
			data:{
				success:false,
				error:false,
			},

		});
	</script>
</body>
</html>
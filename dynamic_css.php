<!DOCTYPE html>
<html>
<head>
	<title>DYNAMIC CSS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="vue-css">
	<h1>dynamic css</h1>
	<h2>example 1</h2>
	<div v-on:click="available=!available" v-bind:class="{available:available}">
		<span>TS</span>
	</div>


	<h2>example 2</h2>
		<button v-on:click= "nearby=!nearby">toggole nearby</button>
		<button v-on:click="available=!available">toggole available</button>
		<div v-bind:class="compClasses">
			<span>tawfiq</span>
			
		</div>
	</div>
	<script src="app.js"></script>
</body>
</html>
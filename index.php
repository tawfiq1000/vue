<!DOCTYPE html>
<html>
<head>
	<title>Vue</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<div id="vue-app">
		<h1>{{name}}</h1>
		<p>{{greet('night')}}</p>
		<a v-bind:href="website">protfolio of {{name}}</a>
		<input type="text" name="" v-bind:value="name">
		<p v-html="websiteTag"></p>

	</div>
<script src="app.js"></script>
</body>
</html>
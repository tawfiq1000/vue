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
		<p>my name is {{name}}</p>
		<p v-html="websiteTag"></p>
		<button @click.once="add(1)">add a year age</button>
		<button @click="subtract(1)">subtract one year age</button>
		<button v-on:dblclick="add(10)">add 10 year age</button>
		<button v-on:dblclick="subtract(10)">subtract ten year age</button>

		<h2>your age is {{age}}</h2>
		<div id=canvas v-on:mousemove="updatedXY">

			{{x}},{{y}}
		</div>
		<a v-on:click.prevent="click" href="http://www.google.com">tawfiq imam website</a>
			

	</div>
<script src="app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Vuejs</title>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/vue/1.0.21/vue.js"></script>
</head>
<body>
	<div id="app">
		
		<h1>{{ message }}</h1>

		<input v-model="message"></input>

		<hr>

		<pre>
			{{ message | json}}
		</pre>

	</div>



	<script>
	var data = {

		message: "Olá Mundo!"

	};

		new Vue({
			el: '#app',

			data: data

		});



	</script>


</body>
</html>
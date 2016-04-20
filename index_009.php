<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Vuejs</title>

	<style>
		.centro {
			margin: 0 auto;
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			margin-top: 30%;
		}
	</style>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


	<!-- Vuej -->
	<script type="text/javascript" src="http://cdn.jsdelivr.net/vue/1.0.21/vue.js"></script>
</head>
<body>
	<div id="app" class="container centro">
	<div class="row">

		<h1>{{ fullName }}</h1>

		<input type="text" v-model="first" placeholder="Primeiro nome">
		<input type="text" v-model="last" placeholder="Último nome">

		<hr>
		<pre>
			{{ count | json}}
		</pre>

	</div>
	</div>

	<template id="counter-template">
		<h1>{{ subject }}</h1>
		<!-- <button @click="count += 1">{{ count }}</button> -->
		<button @click="updateCount">{{ count }}</button>
	</template>

	<script>

		new Vue({
			el: '#app',

			data: {
				first: 'Evert',
				last: 'Ramos'
				// ,fullName: 'Evert Ramos'
			},

			// watch: {
			// 	first: function(first) {
			// 		// alert(first);
			// 		this.fullName = first + ' ' + this.last
			// 	}
			// }

			computed: {

				fullName: function() {
					return this.first + ' ' + this.last;
				}

			}
		});

	</script>

</body>
</html>
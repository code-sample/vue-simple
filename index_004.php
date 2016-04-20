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

		<button @click="updateCount">
		<!-- <button @click="count += 1"> -->
			Contagem: {{ count }}
		</button>

		<hr>


		<pre>
			{{ message | json}}
		</pre>

	</div>
	</div>


	<script>
		new Vue({
			el: '#app',

			methods: {
				updateCount: function() {
					this.count += 1;
				}
			},

			data: {
				count: 0
			}

		});



	</script>


</body>
</html>
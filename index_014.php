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
			margin-top: 10%;
		}
	</style>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<style>
		.completed {
			text-decoration: line-through;
		}
	</style>

</head>
<body>
	<div id="app" class="container centro">
	<div class="row">
		
		<tasks :list="tasks"></tasks>
		
		<hr>
		<pre>
			{{ list | json}}
		</pre>

	</div>
	</div>
	
	<template id="tasks-template">
	<div>
		<h1>
			Minhas tarefas 
			<span v-show="remaining">[{{ remaining }} de {{ list.length }}]</span>
		</h1>
		<ul v-show="list.length">
			<li v-for="task in list" 
				:class="{'completed' : task.completed }"				
				@click="task.completed = ! task.completed"
			>
				{{ task.body }}

				<strong @click="deleteTask(task)"> x</strong>
			</li>
		</ul>

		<p v-else>Sem tarefas agendadas</p>

		<button @click="clearCompleted">Limpar tarefas concluídas</button>
	</div>

	</template>

	<!-- Vuej -->
	<script type="text/javascript" src="http://cdn.jsdelivr.net/vue/1.0.21/vue.js"></script>
	<script src="./assets/js/main_014.js"></script>

</body>
</html>
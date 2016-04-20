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


	<!-- Vuej -->
	<script type="text/javascript" src="http://cdn.jsdelivr.net/vue/1.0.21/vue.js"></script>
</head>
<body>
	<div id="app" class="container centro">
	<div class="row">

		<div v-for="plan in plans">
			<plan :plan="plan" :active.sync="active" inline-template>
				<div>
					<span>
						{{ plan.name }} - 
					</span>
					<span>
						{{ plan.price }}/Mês
					</span>

					<button @click="setActivePlan" 
							v-show="plan.name !== active.name"
					>
						{{ isUpgrade ? 'Upgrade' : 'Downgrade' }}
					</button>

					<span v-else>
						Selecionado
					</span>
				</div>
				
			</plan>
		</div>

		<hr>
		<pre>
			{{ active | json}}
		</pre>

	</div>
	</div>

	<script>

		Vue.component('plan', {
			plan: {

				// template: '#plan-template',

				props: [
					'plan',
					'active'
				],

				methods: {
					setActivePlan: function() {
						this.active = this.plan;
					}
				},

				computed: {
					isUpgrade: function() {
						return this.plan.price > this.active.price
					}
				}

			}

		});

		new Vue({
			el: '#app',

			data: {
				plans: [
					{ name: 'Empresarial', price: 100 },
					{ name: 'Profissional', price: 50 },
					{ name: 'Pessoal', price: 10 },
					{ name: 'Gratuito', price: 0 }
				],
				active: []
			}

		});

	</script>

</body>
</html>
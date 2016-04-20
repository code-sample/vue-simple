new Vue({
	el: '#app',

	data: {
		tasks: [
			{ body: 'Comprar leite', completed: false},
			{ body: 'Comprar sabão', completed: false},
			{ body: 'Comprar pasta de dente', completed: false},
			{ body: 'Comprar ração para cachorro', completed: true}
		]
	},

	methods: {
		toggleCompletedFor: function(task) {
			task.completed = ! task.completed
		}
	}

})

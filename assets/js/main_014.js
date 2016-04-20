Vue.component('tasks', {

	props: ['list'],

	template: '#tasks-template',

	computed: {

		remaining: function() {
			return this.list.filter(this.inProgress).length;
		}

		// remaining: function() {
		// 	var vm = this;
		// 	return this.list.filter(function(task) {
		// 		// return ! task.completed;
		// 		return ! vm.isCompleted(task);
		// 	}).length;
		// }
	},

	methods: {
		isCompleted: function(task) {
			return task.completed;
		},

		inProgress: function(task) {
			return ! this.isCompleted(task);
		},

		deleteTask: function(task) {
			this.list.$remove(task);
		},

		clearCompleted: function() {
			this.list = this.list.filter(this.inProgress)
		}
	}

});

new Vue({
	el: '#app',

	data: {
		tasks: [
			{ body: 'Comprar leite', completed: false},
			{ body: 'Comprar sabão', completed: false},
			{ body: 'Comprar pasta de dente', completed: false},
			{ body: 'Comprar ração para cachorro', completed: true}
		]
	}

	// methods: {
	// 	toggleCompletedFor: function(task) {
	// 		task.completed = ! task.completed
	// 	}
	// }

})

var binding = new Vue({
	el: '#binding',
	data: {
		message: ''
	}
});

//This is array of objects
var todosToRender = [
		{ text: 'Learn Vue Js' },
      { text: 'Learn capistrano' },
      { text: 'Build Something Awesome' }
	];

var list = new Vue({
	el: '#list',
	data: {
    todos: todosToRender
  }
});

//Remember that userInput is a view model. el, dara, message, methods, etc are objects in this model
var userInput = new Vue({
	el: '#user-input',
	data: {
		message: ''
	},
	methods: {
		reverseMessage: function() {
			this.message = this.message.split('').reverse().join('')
		}
	}
});

var addTodo = new Vue({
	el: '#todo-list',
	data: {
		todos: [],
		newTodo: '',
	},
	methods: {
		addTodo: function() {
			var text = this.newTodo.trim();
			if (text) {
				this.todos.push({todo: text});
				this.newTodo = '';
			}
		},
		removeTodo: function(index) {
			this.todos.splice(index, 1);
		}
	}
});

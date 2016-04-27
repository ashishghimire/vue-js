var binding = new Vue({
    el: '#binding',
    data: {
        message: ''
    }
});

//This is array of objects
var todosToRender = [
    {text: 'Learn Vue Js'},
    {text: 'Learn capistrano'},
    {text: 'Build Something Awesome'}
];

var list = new Vue({
    el: '#list',
    data: {
        todos: todosToRender
    }
});

//Remember that userInput is a Vue instance/ view model. el, data, message, methods, etc are objects in this model
var userInput = new Vue({
    el: '#user-input',
    data: {
        message: ''
    },
    // define methods under the **`methods`** object
    methods: {
        reverseMessage: function () {
            // **`this`** inside methods points to the Vue instance
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
        addTodo: function () {
            var text = this.newTodo.trim();
            if (text) {
                this.todos.push({todo: text});
                this.newTodo = '';
            }
        },
        removeTodo: function (index) {
            this.todos.splice(index, 1);
        }
    }
});

var votes = new Vue({
    el: '#votes',
    data: {votes: 0},
    methods: {
        downvote: function () {
            if (this.votes !== 0) {
                this.votes--;
            }
        }
    }
});


function getDefaultData() {
    return {
        screenVal: 0,
        query: '',
        result: '',
        currentVal: null,
        currentOperator: null,
        stack: []
    }
}

var calculator = new Vue({
    el: '#calculator',
    data: function () {
        return getDefaultData();
    },
    methods: {
        operate: function (operator) {
            this.stack.push(this.screenVal);
            this.stack.push(operator);
            if (!this.currentOperator) {
                this.currentVal = this.screenVal;
                this.query = this.stack.join('');
                this.screenVal = 0;
            } else {
                this.calculate(operator);

            }
            this.currentOperator = operator;

        },
        calculate: function (operator = null) {
            if (this.currentOperator) {
                switch (this.currentOperator) {
                    case '+' :
                        this.result = parseInt(this.currentVal) + parseInt(this.screenVal);
                        break;
                    case '-' :
                        this.result = parseInt(this.currentVal) - parseInt(this.screenVal);
                        break;
                    case '*' :
                        this.result = parseInt(this.currentVal) * parseInt(this.screenVal);
                        break;
                    case '/' :
                        this.result = parseInt(this.screenVal) !== 0 ? parseInt(this.currentVal) / parseInt(this.screenVal) : 'ERROR!! Division by zero';
                        break;
                }

                if (operator) {
                    this.query = this.stack.join('');
                    this.screenVal = 0;
                } else {
                    this.query += this.screenVal;
                    this.screenVal = !isNaN(this.result) ? this.result : 0;
                    this.stack = [];
                }
                this.currentVal = !isNaN(this.result) ? this.result : null;
            }
            else {
                this.query = this.screenVal;
                this.stack = [];
            }
            this.currentOperator = null;
        },
        clear: function () {
            this.$data = getDefaultData();
        }
    }
});

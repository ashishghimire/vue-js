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


function getCalculatorDefaults() {
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
        return getCalculatorDefaults();
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
        calculate: function (operator) {
            if (this.currentOperator) {
                switch (this.currentOperator) {
                    case '+' :
                        this.result = parseFloat(this.currentVal) + parseFloat(this.screenVal);
                        break;
                    case '-' :
                        this.result = parseFloat(this.currentVal) - parseFloat(this.screenVal);
                        break;
                    case '*' :
                        this.result = parseFloat(this.currentVal) * parseFloat(this.screenVal);
                        break;
                    case '/' :
                        this.result = parseFloat(this.screenVal) !== 0 ? parseFloat(this.currentVal) / parseFloat(this.screenVal) : 'ERROR!! Division by zero';
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
            this.$data = getCalculatorDefaults();
        }
    }
});

var computedProperty = new Vue({
    el: '#computed-properties',
    data: {
        input: 1
    },
    computed: {
        //computed getter
        computedValue: function () {
            return this.input + 1;
        }
    }
});

var binaryCalc = new Vue({
    el: '#binary-calc',
    data: {
        a: 1,
        b: 2,
        operator: " ",
    },
    computed: {
        calculate: function () {
            switch (this.operator) {
                case "+":
                    return this.a + this.b
                    break;
                case "-":
                    return this.a - this.b
                    break;
                case "*":
                    return this.a * this.b
                    break;
                case "/":
                    return this.a / this.b
                    break;
            }
        }
    },
});

var filterArray = new Vue({
    el: '#filter-array',
    data: {
        opinions: [
            {person: 'Ashish', opinion: 'honesty is the best policy', upvotes: 6},
            {person: 'Brad', opinion: 'yolo', upvotes: 8},
            {person: 'John', opinion: 'punk is not dead', upvotes: 7}
        ]
    },
    computed: {
        popularOpinions: function () {
            return this.opinions.filter(function (item) {
                return item.upvotes > 5;
            }).sort(function (a, b) {
                return b.upvotes - a.upvotes;
            });
        }
    },
});

function getCandidatesData() {
    return {
        candidates: [
            {name: 'Ashish', votes: 0},
            {name: 'Diken', votes: 0},
            {name: 'Ayush', votes: 0}
        ]
    };
}
var election = new Vue({
    el: '#mayor',
    data: function () {
        return getCandidatesData();
    },
    computed: {
        mayors: function () {
            var votes = this.candidates.map(function (obj) {
                return obj.votes;
            });
            var maxVotes = Math.max(...votes);
            var mayors = this.candidates.filter(function (obj) {
                return obj.votes == maxVotes;
            });
            return mayors;
        }
    },
    methods: {
        clearVotes: function () {
            this.$data = getCandidatesData();
        }
    }
});

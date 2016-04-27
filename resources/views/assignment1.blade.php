@extends('app')
<div id = 'todo-list'>
	<input v-model ="newTodo" v-on:keyup.enter = "addTodo" placeholder = "Add a task and press enter">
	<ul>
		<li v-for = 'todo in todos'>
			<span>@{{todo.todo}}</span>
			<button v-on:click = "removeTodo($index)">✗</button>
		</li>
	</ul>
</div>

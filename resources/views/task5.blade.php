@extends('app')
<div id = 'calculator'>
	<p>
		<input v-model='screenVal' type='number'>
		&nbsp;
		<button @click = 'calculate(null)'>Result</button>
	</p>
	<p>
		<button @click = "operate('+')">+</button>
		<button @click = "operate('-')">-</button>
		<button @click = "operate('*')">*</button>
		<button @click = "operate('/')">/</button>
		&nbsp;
		<button @click = 'clear'>AC</button>
	</p>
	<p>Query : @{{query}}</p>
	<p>Result : @{{result}}</p>
</div>

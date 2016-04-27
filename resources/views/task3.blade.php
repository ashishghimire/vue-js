@extends('app')
<div id="user-input">
	@{{ message }}
	<input v-model = 'message'>
	<button v-on:click = 'reverseMessage'>Reverse</button>
</div>
@extends('app')
<div id='votes'>
	<p>No. of votes: @{{ votes }}</p>
	<p>
	<!-- '@' is a shorthand for 'v-on:'. The more u know :)-->
		<button @click='votes++'>Upvote</button>
		<button @click='downvote'>Downvote</button>
	</p>
</div>
@extends('app')
<body v-on:keyup.67='clearVotes' id='mayor'>
<strong>
    <p>Now that you have a basic understanding of Vue’s event handling, methods, computed properties etc,
        you should try something a bit more challenging. Start by creating an array of “Mayor” candidates.
        Each candidate has a “name” and a number of “votes”. Use a button to increase the count of votes
        for each candidate. Use a computed property to determine who is the current “Mayor”, and display
        his name.</p>
    <p>Finally when key ‘c’ is pressed the elections start from the beginning, and all votes become 0.</p>
</strong>
<div class="container">
    <h3>Here are the list of nominees</h3>
    <ul>
        <li v-for="candidate in candidates">
            @{{ candidate.name }}
            <button class="btn-success" @click='candidate.votes++'>&#x25B2;</button>
            &nbsp;
            @{{ candidate.votes }}
        </li>
    </ul>
    <h1 v-if="mayors.length > 1">No new mayors yet</h1>
    <h1 v-else>@{{ mayors[0].name }} is the new mayor with maximum @{{mayors[0].votes | pluralize 'vote'}} @{{ mayors[0].votes }}</h1>
    <p>(Press 'c' to reset)</p>
    <pre>@{{ $data|json }}</pre>
</div>
</body>
@extends('app')
<div id="filter-array">
    <h1>Here are some popular opinions with votes > 5 (@{{ opinions.length }})</h1>
    <ul>
        <li v-for='opinion in popularOpinions'>
            @{{ opinion.person }} said @{{ opinion.opinion }} and has upvote of @{{ opinion.upvotes }}
        </li>
    </ul>
    <pre>@{{ $data | json }}</pre>
</div>
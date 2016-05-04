@extends('app')
<div id="filter">
    <input v-model="searchString">
    <ul>
        <li v-for = 'book in books | searchFor searchString'>
            @{{ book.title }}
            @{{ book.author }}
        </li>
    </ul>
</div>
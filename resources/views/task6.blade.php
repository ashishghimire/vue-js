@extends('app')
<div id="computed-properties">
    <input v-model="input" number>
    <p>input: @{{ input  }}</p>
    <p>computed: @{{ computedValue  }}</p>
</div>
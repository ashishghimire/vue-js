@extends('app')
<div id="slide">
    <input v-model="total">
    <div v-if="enteredTotal">
        <input v-model="slide1" @change="bindValue"> &nbsp; <input v-model="slide2" @change="bindValue">
        <div id="slider"></div>
        <pre>@{{ $data | json }}</pre>
    </div>
</div>
@extends('app')
<div id="binary-calc">
    <h1>Type 2 numbers and choose operation.</h1>
    <div class="form-inline">
        <!-- Notice here the special attribute 'number'
        is passed in order to parse inputs as numbers.-->
        <input v-model="a" number class="form-control">
        <select v-model="operator" class="form-control">
            <option selected>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <!-- Notice here the special attribute 'number'
        is passed in order to parse inputs as numbers.-->
        <input v-model="b" number class="form-control">
    </div>
    <h2>Result: @{{a}} @{{operator}} @{{b}} = @{{calculate}}</h2>
<pre>
@{{$data | json}}
</pre>
</div>

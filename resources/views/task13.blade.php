@extends('app')
<div id="component">
    <my-component>lol</my-component>
    <child msg="Hello"></child>
    <child my-msg = "YOLO"></child>
    <input v-model="componentTest">
    <child v-bind:parent-msg = "componentTest"></child>
    <strong v-bind:class = "componentTest">Check my class please</strong>
</div>

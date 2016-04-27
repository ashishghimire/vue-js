@extends('app')
<div id="binding">
  <p>@{{message}}</p>
  <input v-model="message">
</div>
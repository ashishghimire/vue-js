@extends('app')
<div id="list">
  <ul>
    <li v-for="todo in todos">
      @{{ todo.text }}
    </li>
  </ul>
</div>
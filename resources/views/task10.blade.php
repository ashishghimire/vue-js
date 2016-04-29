@extends('app')
<div id="editor">
    <input v-model = "message" v-bind:class="tooltip" @keyup.enter="hideTooltip">
    <div @click.prevent = "editMsg">
        @{{ message }}
    </div>
</div>
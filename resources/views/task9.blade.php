@extends('app')
<style>
    * {
        margin: 0;
        padding: 0;
    }

    a, a:visited {
        outline: none;
        color: #389dc1;
    }

    a:hover {
        text-decoration: none;
    }

    nav {
        display: inline-block;
        margin: 60px auto 45px;
        background-color: #5597b4;
        box-shadow: 0 1px 1px #ccc;
        border-radius: 2px;
    }

    nav a {
        display: inline-block;
        padding: 18px 30px;
        color: #fff !important;
        font-weight: bold;
        font-size: 16px;
        text-decoration: none !important;
        line-height: 1;
        text-transform: uppercase;
        background-color: transparent;

        -webkit-transition: background-color 0.25s;
        -moz-transition: background-color 0.25s;
        transition: background-color 0.25s;
    }

    nav a:first-child {
        border-radius: 2px 0 0 2px;
    }

    nav a:last-child {
        border-radius: 0 2px 2px 0;
    }

    nav a:first-child {
        border-radius: 2px 0 0 2px;
    }

    nav a:last-child {
        border-radius: 0 2px 2px 0;
    }

    section, footer, header, aside, nav {
        display: block;
    }

    nav.home .home,
    nav.about .about,
    nav.profile .profile,
    nav.feed .feed,
    nav.menu .menu{
        background-color: #e35885;
    }

    p {
        font-size: 22px;
        font-weight: bold;
        color: #7d9098;
    }
</style>

<div id="navigation">
    <nav v-bind:class="active">
        <a href="#" class='home' @click="makeActive('home')">Home</a>
        <a href="#" class='about' @click="makeActive('about')">About</a>
        <a href="#" class = 'profile' @click="makeActive('profile')" >Profile</a>
        <a href="#" class = 'feed' @click="makeActive('feed')">Feed</a>
        <a href="#" class = 'menu' @click="makeActive('menu')">Menu</a>
    </nav>
    <div class="container">
        <p> You chose @{{ active|capitalize }}</p>
    </div>
</div>
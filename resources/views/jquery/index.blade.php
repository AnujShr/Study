@extends('layouts.master')
<style>
    body {
        font: normal 100%/1.3em sans-serif;
        margin: 20px;
        color: #333;
        background-color: #fff;
    }

    h1 {
        font-size: 2em;
        font-weight: normal;
        margin: 0 0 0.3em 0;
    }

    p {
        margin: 0 0 1em 0;
    }

    ul {
        padding: 0;
        margin: 1em 3em;
    }

    li {
        margin: 0.5em 0;
    }

    .note {
        font-style: italic;
        padding: 2px 4px;
        background-color: #eee;
        border: 2px solid #333;
    }
</style>
<header>
    <h1>My jQuery Page</h1>
</header>

{{--<article>--}}

    {{--<p id="intro">Welcome to the jQuery tutorial page.</p>--}}

    {{--<p>1 Today you will learn about:</p>--}}

    {{--<ul>--}}
        {{--<li>downloading jQuery</li>--}}
        {{--<li>including jQuery in your page</li>--}}
        {{--<li>using a Content Delivery Network (CDN)</li>--}}
    {{--</ul>--}}

    {{--<p class="note">2 Note: I hope you understand CSS selectors!</p>--}}

{{--</article>--}}

<div>
    <ol>
        <li id="i1">Item 1 </li>
        <li id="i2">Item 2 </li>
        <li id="i3">Item 3 </li>
        <li id="i4">Item 4 </li>
        <li id="i5">Item 5 </li>
    </ol>
</div>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>blog</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="/css/index.css" rel="stylesheet" >
    </head>
    <body>
        <x-app-layout>
            <s-slot name="header">
                blog
            </s-slot>
            {{ Auth::user()->name}}
        </x-app-layout>
    </body>
</html>
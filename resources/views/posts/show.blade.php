<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>blog</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="/css/index.css" rel="stylesheet" >
    </head>
    <body>
        <h1 class="text-center">blog</h1>
        <section class="px-1">
            <dl>
                <div class="my-4">
                    <dt class="underline decoration-sky-500">{{$post->title}}</dt>
                    <dd>{{$post->body}}</dd>
                </div>
            </dl>
            <a href="/posts/{{$post->id}}/edit">編集</a>
            <a href="/posts">戻る</a>
        </section>
    </body>
</html>
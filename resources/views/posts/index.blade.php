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
                @foreach ($posts as $post)
                <div class="my-4">
                    <a href="/posts/{{$post->id}}" class="underline decoration-sky-500">{{$post->title}}</a>
                    <dd>{{$post->body}}</dd>
                </div>
                @endforeach
            </dl>
        </section>
        <div class='paginate w-full'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
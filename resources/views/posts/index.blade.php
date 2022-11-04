<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>blog</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="/css/index.css" rel="stylesheet" >
    </head>
    <body>
        <h1>blog</h1>
        <section>
            <dl>
                @foreach ($posts as $post)
                <div>
                    <dt class="underline decoration-sky-500">{{$post->title}}</dt>
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
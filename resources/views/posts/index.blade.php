<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>blog</title>
    </head>
    <body>
        <h1>blog</h1>
        <section>
            <dl>
                @foreach ($posts as $post)
                <div>
                    <dt>{{$post->title}}</dt>
                    <dd>{{$post->body}}</dd>
                </div>
                @endforeach
            </dl>
        </section>
    </body>
</html>
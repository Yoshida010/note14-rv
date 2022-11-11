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
            <h1 class="text-center">blog</h1>
            <section class="px-1">
                <dl>
                    @foreach ($posts as $post)
                    <div class="my-4">
                        <a href="/posts/{{$post->id}}" class="underline decoration-sky-500">{{$post->title}}</a>
                        <dd>{{$post->body}}</dd>
                    </div>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    @endforeach
                </dl>
            </section>
            <div>
                @foreach($questions as $question)
                    <div>
                        <a href="https://teratail.com/questions/{{ $question['id'] }}" target="_blank" rel="noopenner noreferer">
                            {{ $question['title'] }}
                        </a>
                    </div>
                @endforeach
            </div>
            <div class='paginate w-full'>
                {{ $posts->links() }}
            </div>
            <a href="posts/create">投稿</a>
            {{ Auth::user()->name}}
        </x-app-layout>
    </body>
</html>
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
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <a href="/posts/{{$post->id}}/edit">編集</a>
            <form id="deleteForm" action="/posts/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button id="deleteBtn" class="delete-btn">削除</button>
            </form>
            <a href="/">戻る</a>
        </section>
        <script>
            const btn = document.getElementById('deleteBtn');
            btn.addEventListener('click', () => {
                const result = window.confirm('投稿を削除しますか？');
                if(result) {
                    document.getElementById('deleteForm').submit();
                }
            })
        </script>
    </body>
</html>
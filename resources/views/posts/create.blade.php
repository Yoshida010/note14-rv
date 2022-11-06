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
                <form action="/posts" method="POST">
                    @csrf
                    <div class="title">
                        <h2>Title</h2>
                        <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}" />
                        <p class="title__error" style="color:red">{{$errors -> first('post.title')}}</p>
                    </div>
                    <div class="body">
                        <h2>Body</h2>
                        <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{old('post.body')}}</textarea>
                        <p class="body__error" style="color:red">{{$errors -> first('post.body')}}</p>
                    </div>
                    <input type="submit" value="store"/>
                </form>
            </dl>
            <a href="/posts">戻る</a>
        </section>
    </body>
</html>
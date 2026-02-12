<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Posts</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        h1 { color: #333; }
        .post { border-bottom: 1px solid #ccc; padding: 10px 0; }
        .title { font-weight: bold; font-size: 1.2em; }
        .content { margin-top: 5px; }
    </style>
</head>
<body>
    <h1>All Posts</h1>

    @foreach ($posts as $post)
        <div class="post">
            <div class="title">{{ $post->title }}</div>
            <div class="content">{{ $post->content }}</div>
        </div>
    @endforeach

    @if ($posts->isEmpty())
        <p>No posts found.</p>
    @endif
</body>
</html>

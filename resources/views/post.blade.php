<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
<article>
    <?= $post;?>
</article>
<a href="{{route('posts'),$post}}">Go back</a>
</body>

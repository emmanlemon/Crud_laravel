<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/view.css') }}">
    <title>View Blog</title>
</head>
<body>
    <div class="view">
        <div class="posts">
            <label>Name of the Author:<label>
            <p>{{ $posts->name}}</p> 
        </div>
        <div class="posts">
            <label>ID:<label> 
                <p>{{ $posts->id}}</p>
        </div>
        <div class="posts">
            <label>Content: <label>
                <p>{{ $posts->content }}</p> 
        </div>
        <div class="posts">
            <label>Genre:<label> 
                <p>{{ $posts->genre }}</p>
        </div>
        <div class="posts">
            <label>Date Published: <label>
                <p>{{ $posts->published_at }}</p>
        </div>
        <div class="posts">
            <label>Date Post:<label> <p>{{ $posts->created_at }}</p>
        </div>       
    </div>
</body>
</html>
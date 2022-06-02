<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/show.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Plus+Jakarta+Sans:wght@200&display=swap" rel="stylesheet">
    <title>Blog Post</title>
</head>
<body>
    <div class="back"><a href="{{ url('/') }}">Home</a></div>
    <div class="container">
        <div class="title">POSTS</div>
        @if(count($post) > 0)
        @foreach ($post as $posts)
        <div class="blog_post">
            <label for=""><a href="blog/view/{{ $posts->id }} ">{{ $posts->blog_title }}</a></label>
                <p>Name of the Author: {{ $posts->name}}</p>
                <p>Content: {{ $posts->content }}  </p> 
                <p>Genre: {{ $posts->genre }}</p>
                <p>Date Published: {{ $posts->published_at }}</p>
                <p>Date Post: {{ $posts->created_at }}</p>
                <form method="POST" action="blog/{{$posts->id}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                        <input type="submit" class="button" value="Delete">
                </form>
                <a href="update/{{ $posts->id }}">Update</a>
            </div>
        @endforeach
        @else
        <P>nothing</P>
        @endif
    </div> 
</body>
</html>

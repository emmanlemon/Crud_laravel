<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/update.css') }}">
    <title>Update Blog</title>
</head>
<body>
    <a href="{{ url('/') }}">Home</a>
    <div class="create_blog">
        <form action="{{ route('update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$Blog->id}}">
            <span><p>Update Blog Post</p></span>
            <div class="container">
                <label>Name:</label>
                <input type="text" name="name" value={{$Blog->name}} placeholder="Input Your name">
                @error('name')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="container">
                <label>Title:</label>
                <input type="text" name="blog_title" placeholder="Input your Blog Title" value={{$Blog->blog_title}}>
                @error('blog_title')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="container">
                <label>Content</label>
                <textarea name="content" placeholder="Input your Content" value={{$Blog->content}}></textarea>
                @error('content')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="publish">
                <label>Date Published:</label>
                <input type="date" name="published_at" value={{$Blog->published_at}}>
            </div>
            <div class="container">
                <label for="genre">Genre:</label>
                <select name="genre">
                    <option value="Action">Action</option>
                    <option value="Classics">Classics</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
        <button name="btn">Update Blog</button>
        <button type="reset" name="btn">Reset</button>
        </form>
    </div>
</body>
</html>
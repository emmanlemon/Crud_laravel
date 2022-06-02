<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/create.css') }}">
    <title>Create Blog</title>
</head>
<body>
    <a href="{{ url('/') }}">Home</a>
    <div class="create_blog">
        <form action="{{ route('store') }}" method="post">
            @csrf
            <span><p>Create Blog Post</p></span>
            <div class="container">
                <label>Name:</label>
                <input type="text" name="name" placeholder="Input Your name" value={{ old('name') }}>
                @error('name')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="container">
                <label>Title:</label>
                <input type="text" name="blog_title" placeholder="Input your Blog Title" value={{ old('blog_title') }}>
                @error('blog_title')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="container">
                <label>Content</label>
                <textarea name="content" placeholder="Input your Content" value={{ old('content')}}></textarea>
                @error('content')
                <div class="error">
                    <span>{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="publish">
                <label>Date Published:</label>
                <input type="date" name="published_at">
            </div>
            <div class="container">
                <label for="genre">Genre:</label>
                <select name="genre">
                    <option value="Action">Action</option>
                    <option value="Classics">Classics</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Comedy">Fantasy</option>
                    <option value="Horror">Fantasy</option>
                </select>
            </div>
        <button name="btn">Create Blog</button>
        <button type="reset" name="btn">Reset</button>
        </form>
    </div>
</body>
</html>
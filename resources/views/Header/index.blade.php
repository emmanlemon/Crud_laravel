<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/header.css') }}">
    <title>Document</title>
</head>
<body>
    <section class="header">
        <nav>
            <img src="images/coffee-logo.png" alt="">
            <p>IT's Blog</p>
            <div class="nav-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="/blog/create">Create</a></li>
                    <li><a href="/blog">Read</a></li>
                </ul>
            </div>
            <div class="login">
                <label for="student_id">User ID</label>
                <input type="text" id="student_id" name="student_id">
                <label for="student_id">Password</label>
                <input type="password" id="student_id" name="student_id">
                <button class="button">Login</button>
                <button class="button">Sign Up</button>
            </div>
        </nav>
    </section>
@yield('content')

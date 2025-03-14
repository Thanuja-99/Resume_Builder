<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        header nav {
            float: right;
            margin-top: 10px;
        }
        .dashboard {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .dashboard h2 {
            margin-top: 0;
        }
        .dashboard .resume-list {
            list-style: none;
            padding: 0;
        }
        .dashboard .resume-list li {
            background: #f4f4f4;
            margin: 10px 0;
            padding: 10px;
            border-left: #77aaff 5px solid;
        }
        .dashboard .resume-list li a {
            text-decoration: none;
            color: #333;
        }
        .dashboard .resume-list li a:hover {
            color: #77aaff;
        }
        .btn {
            display: inline-block;
            background: #77aaff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background: #5599ff;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Resume Builder</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="dashboard">
            <h2>Your Resumes</h2>
            <ul class="resume-list">
                @foreach($resumes as $resume)
                    <li><a href="{{ url('/resumes/' . $resume->id) }}">{{ $resume->title }}</a></li>
                @endforeach
            </ul>
            <a href="{{ url('/resumes/create') }}" class="btn">Create New Resume</a>
        </div>
    </div>
</body>
</html>
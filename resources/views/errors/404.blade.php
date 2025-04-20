<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 72px;
            margin: 0;
        }
        p {
            font-size: 24px;
            color: #666;
        }
        a {
            text-decoration: none;
            color: #3490dc;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Page not found.</p>
        <a href="{{ url('/') }}">Go back home</a>
    </div>
</body>
</html>
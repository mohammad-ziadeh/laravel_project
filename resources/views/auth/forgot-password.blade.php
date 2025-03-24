<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            background-image: url('images/diver-sea-surrounded-by-wild-nature.jpg');
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            align-items: center;
            height: 150vh;
        }

        .container {
            width: 100%;
            max-width: 450px;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        input,
        button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input:focus,
        button:focus {
            border-color: #4A90E2;
            outline: none;
        }

        button {
            background-color: #4A90E2;
            color: white;
            cursor: pointer;
            border: none;
            font-weight: bold;
        }

        button:hover {
            background-color: #357ABD;
        }

        .error {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
            text-align: left;
        }

        a {
            color: #4A90E2;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Forgot your password?</h2>
        <div class="mb-4 text-sm text-gray-600">
            No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        </div>

        <div class="mb-4">
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                <p class="error">{{ $errors->first('email') }}</p>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit">
                    Email Password Reset Link
                </button>
            </div>
        </form>

        <div class="footer">
            <p>Remembered your password? <a href="{{ route('login') }}">Login here</a></p>
        </div>
    </div>

</body>
</html>

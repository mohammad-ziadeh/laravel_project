<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
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

        .message {
            margin-bottom: 20px;
            color: #555;
            font-size: 14px;
        }

        .status-message {
            margin-bottom: 20px;
            font-size: 14px;
            color: #4caf50;
        }

        button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #4A90E2;
            color: white;
            cursor: pointer;
            border: none;
            font-weight: bold;
        }

        button:hover {
            background-color: #357ABD;
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
        <h2>Email Verification</h2>

        <div class="message">
            <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
        </div>

        <!-- Status Message -->
        <div class="status-message">
            <!-- If status is 'verification-link-sent' show this message -->
            <p>A new verification link has been sent to the email address you provided during registration.</p>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <!-- Resend Verification Email -->
            <form method="POST" action="{{ route('verification.send') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">
                    Resend Verification Email
                </button>
            </form>

            <!-- Log Out -->
            <form method="POST" action="{{ route('logout') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                    Log Out
                </button>
            </form>
        </div>
    </div>

</body>
</html>

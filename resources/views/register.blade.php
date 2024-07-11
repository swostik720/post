<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .register-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .register-container label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            color: #666;
        }
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .register-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
            background-color: #4CAF50;
            color: white;
        }
        .register-container button.cancel-button {
            background-color: #f44336;
        }
        .register-container button:hover {
            background-color: #45a049;
        }
        .register-container .login-link {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .register-container .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Register</h2>
        <form action="/register" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password">
            
            <button type="submit">Register</button>
            <button type="button" class="cancel-button" onclick="window.location.href='/';">Cancel</button>

            <a href="/login" class="login-link">Already have an account? Login now</a>
        </form>
    </div>

</body>
</html>

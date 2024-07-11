<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
        .forgot-password-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .forgot-password-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .forgot-password-container label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            color: #666;
        }
        .forgot-password-container input[type="text"],
        .forgot-password-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .forgot-password-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
            background-color: #007bff;
            color: white;
        }
        .forgot-password-container button.cancel-button {
            background-color: #f44336;
        }
        .forgot-password-container button:hover {
            background-color: #0056b3;
        }
        .forgot-password-container .login-link {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .forgot-password-container .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="forgot-password-container">
        <h2>Forgot Password</h2>
        <form action="/forgot_password" method="POST">
            <label for="email_or_username">Email or Username:</label>
            <input type="text" id="email_or_username" name="email_or_username" required>
            
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>
            
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            
            <button type="submit">Reset Password</button>
            <button type="button" class="cancel-button" onclick="window.location.href='/';">Cancel</button>

            <a href="/login" class="login-link">Already have an account? Login now</a>
        </form>
    </div>

</body>
</html>

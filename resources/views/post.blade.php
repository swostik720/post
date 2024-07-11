<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group .btn-container {
            margin-top: 10px;
        }
        .form-group .btn-container button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group .btn-container button[type="reset"] {
            background-color: #f44336;
        }
        .form-group .btn-container button[type="reset"]:hover,
        .form-group .btn-container button[type="submit"]:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Create Post</h2>

        <form action="/store-post" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="form-group">
                <label for="contents">Contents:</label>
                <textarea id="contents" name="contents" required>{{ old('contents') }}</textarea>
            </div>

            <div class="form-group btn-container">
                <button type="submit">Create Post</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>

</body>
</html>

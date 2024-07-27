<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .video-button {
            display: inline-block;
            margin: 20px;
            padding: 15px 30px;
            font-size: 20px;
            color: white;
            background-color: #ff4757;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            transition: transform 0.3s ease, background-color 0.3s;
        }

        .video-button:hover {
            transform: scale(1.1);
            background-color: #ff6b81;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1>Welcome to the Dashboard</h1>
            <p>You have successfully logged in.</p>
            <button class="video-button" onclick="redirectToVideo()">Deadpool & Wolverine</button>
        </div>
    </div>
    <script>
        function redirectToVideo() {
            window.location.href = 'video.php';
        }
    </script>
</body>
</html>

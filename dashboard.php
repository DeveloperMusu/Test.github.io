<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .menu {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
        }

        .menu-button {
            width: 30px;
            height: 30px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .menu-button div {
            width: 100%;
            height: 4px;
            background-color: #333;
            position: absolute;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .menu-button div:nth-child(1) {
            top: 0;
        }

        .menu-button div:nth-child(2) {
            top: 50%;
            transform: translateY(-50%);
        }

        .menu-button div:nth-child(3) {
            top: 100%;
            transform: translateY(-100%);
        }

        .menu-content {
            display: none;
            position: absolute;
            top: 50px;
            left: 0;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        .menu-content a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
            border-bottom: 1px solid #eee;
        }

        .menu-content a:last-child {
            border-bottom: none;
        }

        .menu-content a:hover {
            background-color: #f6f6f6;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
        }

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
    </style>
</head>
<body>
    <div class="menu">
        <div class="menu-button" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="menu-content" id="menu-content">
            <a href="dashboard.php">Dashboard</a>
        </div>
    </div>
    <div class="container">
        <div class="form-box">
            <h1>Welcome to the Dashboard</h1>
            <p>You have successfully logged in.</p>
            <button class="video-button" onclick="redirectToVideo()">Deadpool & Wolverine</button>
        </div>
    </div>
    <script>
        function toggleMenu() {
            const menuContent = document.getElementById('menu-content');
            if (menuContent.style.display === 'block') {
                menuContent.style.display = 'none';
            } else {
                menuContent.style.display = 'block';
            }
        }

        function redirectToVideo() {
            window.location.href = 'video.php';
        }
    </script>
</body>
</html>

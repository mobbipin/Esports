<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Tournament</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .logout {
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .logout:hover {
            color: #ff5252;
        }

        .subheader {
            background-color: #ddd;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .tournament-name {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .page-buttons button {
            margin-right: 10px;
            cursor: pointer;
            padding: 8px 15px;
            border: none;
            background-color: #4caf50;
            color: #fff;
            font-size: 0.9rem;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .page-buttons button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .main-section {
            padding: 20px;
            position: relative;
        }

        .mid-part-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #4caf50, #2196f3);
            opacity: 0.8;
            animation: gradientAnimation 8s infinite linear;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .tournament-details {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .tournament-details:hover {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

        .tournament-details h2 {
            color: #333;
        }

        .tournament-details img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .tournament-details img:hover {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .org-copyright {
            font-size: 0.8rem;
        }

        .social-media a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .social-media a:hover {
            color: #0600a6;
        }
    </style>
</head>
<body>

<!-- Header Section -->
<header>
    <div class="logo">Your Logo</div>
    <div class="logout">Logout</div>
</header>

<!-- Subheader Section -->
<div class="subheader">
    <div class="tournament-name">Tournament Name</div>
    <div class="page-buttons">
        <button onclick="showPage('teams')">Teams</button>
        <button onclick="showPage('groups')">Groups</button>
        <button onclick="showPage('stages')">Stages</button>
        <button onclick="showPage('matches')">Matches</button>
        <button onclick="showPage('info')">Info</button>
    </div>
</div>

<!-- Main Section -->
<div class="main-section">
    <!-- Background Animation -->
    <div class="mid-part-animation"></div>

    <!-- Tournament Details -->
    <div class="tournament-details">
        <!-- Replace the following with your actual data -->
        <h2>Tournament Name</h2>
        <img src="{{ asset('images/tournament-logo.png') }}" alt="Tournament Logo">
        <p>Tournament Banners, Description, Teams, etc.</p>
    </div>
</div>

<!-- Footer Section -->
<footer>
    <div class="org-copyright">© 2023 Your Organization</div>
    <div class="social-media">
        <a href="https://www.instagram.com/your_insta" target="_blank">Instagram</a>
        <a href="https://discord.gg/your_discord" target="_blank">Discord</a>
    </div>
</footer>

<!-- JavaScript -->
<script src="{{ asset('js/tournament-script.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>

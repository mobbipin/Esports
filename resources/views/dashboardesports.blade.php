<x-app-layout>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tournament Page</title>
		<link rel="stylesheet" href="{{ asset('assets/css/mainstyle.css') }}">

	</head>
	<body>
	
		<!-- Header -->
		<header>
			<div class="logo">Your Logo</div>
			<div class="logout">
				<button>Logout</button>
			</div>
		</header>
	
		<!-- Subheader -->
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
	
		<!-- Mid Section - Tournament Details -->
		<div class="mid-section">
			<div class="tournament-details">
				<!-- Demo Tournament Info -->
				<h2>Demo Tournament</h2>
				<img src="{{ asset('images/tournament_logo.png') }}" alt="Tournament Logo">
				<div class="banners">Banners and Images</div>
				<p>Description of the tournament goes here.</p>
	
				<!-- Teams, Schedule, etc. -->
				<!-- Add your dynamic content here based on the actual tournament data -->
			</div>
		</div>
	
		<!-- Footer -->
		<footer>
			<div class="org-copyright">© 2023 Your Organization</div>
			<div class="social-links">
				<a href="https://www.instagram.com" target="_blank">Instagram</a>
				<a href="https://www.discord.com" target="_blank">Discord</a>
			</div>
		</footer>
	
		<!-- JavaScript for Page Navigation -->
		<script src="{{ asset('js/script.js') }}"></script>
	
	</body>
	</html>
	
	</x-app-layout>
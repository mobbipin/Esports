<x-app-layout>

<<<<<<< HEAD
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
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/mainstyle.css') }}">
</head>
<body>
    <div class="grid-container">

        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">search</span>
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                
            </div>
        </header>
        <!-- End Header -->

        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-icons-outlined">inventory</span>MOB Esports
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>
                
                <li class="sidebar-list-item">
                    <a href="/dashboardesports" >
                    <span class="material-icons-outlined">home</span>Home
                    </a>
                </li>            
                <li class="sidebar-list-item">
                    <a href="/Tournaments" >
                        <span class="material-icons-outlined">dashboard</span> Tournaments
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="/Teams" >
                        <span class="material-icons-outlined">groups</span>Teams
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="/Stages" >
                        <span class="material-icons-outlined">signal_cellular_alt</span>Stages
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="/Match" >
                        <span class="material-icons-outlined">gamepad</span> Match
                    </a>
                </li>
                
                <li class="sidebar-list-item">
                    <a href="/Info" >
                        <span class="material-icons-outlined">info</span> Info
                    </a>
                </li>
        
                <!-- Add more sidebar items as needed -->
            </ul>
        </aside>
        <!-- End Sidebar -->

        <!-- Main -->
        <main class="main-container">
            <div class="main-title">
                <p class="font-weight-bold">DASHBOARD</p>
            </div>

            <div class="main-cards">
                <!-- Add Blade syntax for dynamic content in the cards -->
                {{-- Example --}}
                <div class="card">
                    <div class="card-inner">
                        <p class="text-primary">Welcome User</p>
                        <span class="material-icons-outlined">accessibility_new</span>
                    </div>
                    
                </div>
                {{-- End Example --}}

                <!-- Add more cards as needed -->
            </div>
            <!--
            <div class="charts">
                Add Blade syntax for dynamic content in the charts 
                {{-- Example --}}
                <div class="charts-card">
                    <p class="chart-title">Top 5 Products</p>
                    <div id="bar-chart"></div>
                </div>
                {{-- End Example --}}

                 Add more charts as needed -->
            </div>
        </main>
        <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>


</x-app-layout>
>>>>>>> master

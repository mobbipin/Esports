<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
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

        <div class="main-container">
        <!-- Content Section for Tournaments -->
        	<div class="tournament-section">
            	<h2>Tournaments</h2>

            <!-- Display Current/Running Tournaments -->
            		<div class="current-tournaments">
                	<h3>Current Tournaments</h3>
                {{-- Example: --}}
                		<ul>
                    @foreach($currentTournaments as $tournament)
                        			<li>{{ $tournament->name }}</li>
                    @endforeach
                		</ul>
                {{-- End Example --}}
            	</div>

            <!-- Create Tournament Form -->
            	<div class="create-tournament">
                	<h3>Create Tournament</h3>
                <!-- Add form for creating a new tournament -->
                	<form action="{{ route('tournaments.store') }}" method="POST">
                    @csrf
                    <!-- Add form fields as needed (e.g., name, date, etc.) -->
                    	<label for="tournament_name">Tournament Name:</label>
                    	<input type="text" id="tournament_name" name="tournament_name" required>
                    	<button type="submit">Create</button>
                	</form>
            	</div>
        </div>
    </div>
</x-app-layout>
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
        <link rel="stylesheet" href="{{ asset('assets/css/teamspage.css') }}">
    </head>
    <body>
        <div class="grid-container">
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

<!-- Main Container -->
    <!-- HTML with styled title and buttons -->
        <main class="main-container">
    
<!-- Buttons for Loading Existing Teams and Adding New Teams -->
        <abstract class="main-buttons">
        <class="search-bar">
        <input type="text" id="team-search" placeholder="Search teams...">
        <button class="btn-search" onclick="searchTeams()"><span class="material-icons-outlined">search</span>
            <button class="btn-load-teams" onclick="loadExistingTeams()">Load Existing Teams</button>
            <button class="btn-add-teams" onclick="openAddNewTeams()">Enter a New Team</button>
        </abstract>

         <!-- Adding team form -->
        <div>
        <form id="team-form" class="team-form">
            <label for="team-name">Team Name</label>
            <input type="text" id="team-name" name="team-name" required>

            <label for="team-tag">Team Tag</label>
            <input type="text" id="team-tag" name="team-tag" required>

            <label for="team-description">Description</label>
            <textarea id="team-description" name="team-description" rows="3" required></textarea>

            <label for="team-logo">LOGO</label>
            <input type="file" id="team-logo" name="team-logo" accept="image/*">

            <label for="team-country">Country</label>
            <input type="text" id="team-country" name="team-country" required>

            <label for="team-email">Email</label>
            <input type="text" id="team-email" name="team-email" required>

            <button type="submit">Submit</button>
        </form>
        </div>
    


    
    </x-app-layout>
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
<!-- Main Container -->
<main class="main-container">
    <div class="main-title">
        <p class="font-weight-bold">DASHBOARD</p>
    </div>

    <!-- Buttons for Loading Existing Tournaments and Adding New Tournaments -->
    <div class="main-buttons">
        <button class="btn-load-tournaments" onclick="loadExistingTournaments()">Load Existing Tournaments</button>
        <button class="btn-add-tournament" onclick="openAddNewTournamentForm()">Add New Tournament</button>
    </div>

    <!-- Existing Tournaments Section (Initially Hidden) -->
    <div id="existing-tournaments-section" style="display: none;">
        <!-- Add Blade syntax for dynamic content related to existing tournaments -->
        {{-- Example --}}
        <div class="card">
            <div class="card-inner">
                <p class="text-primary">Tournament 1</p>
                <!-- Add more details or dynamic content related to each existing tournament -->
            </div>
        </div>
        {{-- End Example --}}
        <!-- Add more content related to existing tournaments as needed -->
    </div>

    <!-- New Tournament Section (Initially Hidden) -->
    <div id="new-tournament-section" style="display: none;">
        <!-- Form for adding a new tournament -->
        <div class="section" id="addNewTournament">
            <h2>Add New Tournament</h2>
            <form id="tournamentForm" action="{{ url('/save-tournament') }}" method="post">
                @csrf <!-- Include the CSRF token -->

                <label for="title">Tournament Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="description">Tournament Description:</label>
                <textarea id="description" name="description" required></textarea>

                <label for="game">Tournament Game:</label>
                <select id="game" name="game" required>
                    <option value="pubg">PUBG</option>
                    <option value="bgmi">BGMI</option>
                    <option value="ff">Free Fire</option>
                    <option value="valorant">Valorant</option>
                    <option value="cs">Counter-Strike</option>
                    <!-- Add more options as needed -->
                </select>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>

                <!-- Add more form fields as needed -->

                <button type="submit">Save Tournament</button>
            </form>
        </div>
    </div>
</main>

<script>
    function openAddNewTournamentForm() {
        // Hide existing tournaments section
        document.getElementById('existing-tournaments-section').style.display = 'none';

        // Show new tournament section
        document.getElementById('new-tournament-section').style.display = 'block';
    }
</script>

    
    </x-app-layout>
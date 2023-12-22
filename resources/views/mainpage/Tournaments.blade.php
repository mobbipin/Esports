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
        <link rel="stylesheet" href="{{ asset('assets/css/tournamentpage.css') }}">
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
                <ul> <!-- Make sure to open the ul tag -->
                    <li class="sidebar-list-item">
                        <a href="/dashboardesports">
                            <span class="material-icons-outlined">home</span>Home
                        </a>
                    </li>
                
                    <li class="sidebar-list-item">
                        <a href="/Tournaments">
                            <span class="material-icons-outlined">dashboard</span> Tournaments
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="/Teams">
                            <span class="material-icons-outlined">groups</span>Teams
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="/Stages">
                            <span class="material-icons-outlined">signal_cellular_alt</span>Stages
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="/Match">
                            <span class="material-icons-outlined">gamepad</span> Match
                        </a>
                    </li>
                    
                    <li class="sidebar-list-item">
                        <a href="/Info">
                            <span class="material-icons-outlined">info</span> Info
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- End Sidebar -->
            
            <!-- Main Container -->
            <main class="main-container">

    
                <!-- Buttons for Loading Existing Tournaments and Adding New Tournaments -->
                <div class="button-container">
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
                            <!-- Existing form fields -->
                            <button type="button"  id="showbutton" onclick="showRegistrationForm()">Show Tournament Registration Form</button>
    
                            <!-- Additional div for Tournament Registration Form (initially hidden) -->
                            <div id="tournamentRegistrationForm" style="display: none;">
                                <h2>Tournament Registration Form</h2>
    
                                <!-- Include items from the form-group -->
                                <div class="form-group">
                                    <h3>Tournament Title</h3>
                                    <input type="text" id="title_registration" name="title_registration" placeholder="Tournament Title" required>
                                </div>
    
                                <div class="form-group">
                                    <h3>Tournament Description</h3>
                                    <textarea id="description_registration" name="description_registration" placeholder="Tournament Description" required></textarea>
                                </div>
    
                                <div class="form-group">
                                    <h3>Tournament Game</h3>
                                    <select id="game_registration" name="game_registration" required>
                                        <option value="pubg">PUBG</option>
                                        <option value="bgmi">BGMI</option>
                                        <option value="ff">Free Fire</option>
                                        <option value="valorant">Valorant</option>
                                        <option value="cs">Counter-Strike</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <h3>Location</h3>
                                    <input type="text" id="location_registration" name="location_registration" placeholder="Location" required>
                                </div>
    
                                <!-- Add more form fields as needed -->
                            </div>
                            <button type="submit" class="save-tournament-btn">Save Tournament</button>
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
    
                function showRegistrationForm() {
                    // Hide the existing form
                    document.getElementById('showbutton').style.display = 'none';
    
                    // Show the Tournament Registration Form
                    document.getElementById('tournamentRegistrationForm').style.display = 'block';
                }
            </script>
        </div>
    </body>
    </html>
</x-app-layout>
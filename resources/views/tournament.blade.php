<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Management</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>

<div class="container">
    <div class="section" id="loadTournament">
        <h2>Load Previous Tournament</h2>
        
        @if(count($tournaments) > 0)
            <ul>
                @foreach($tournaments as $tournament)
                    <li>
                        <strong>{{ $tournament->title }}</strong><br>
                        <p>{{ $tournament->description }}</p>
                        <!-- Add more details as needed -->
                    </li>
                @endforeach
            </ul>
        @else
            <p>No previous tournaments available.</p>
        @endif
    </div>

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

            <div class="section" id="addNewTournament">
                <h2>Add New Tournament</h2>
                <form id="tournamentForm" action="{{ url('/save-tournament') }}" method="post">
                    @csrf <!-- Include the CSRF token -->
                    <!-- ... (your existing form fields) ... -->
                    <button type="submit">Save Tournament</button>
                </form>
            </div>
            
        </form>
    </div>
</div>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

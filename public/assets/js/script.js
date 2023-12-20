function saveTournament() {
    // Get form data or construct your data object
    var formData = {
        // Add your form data here
        "title": $("#title").val(),
        "description": $("#description").val(),
        "game": $("#game").val(),
        "location": $("#location").val(),
        // Add other form fields as needed
    };

    // Get the CSRF token
    var csrfToken = "{{ csrf_token() }}";

    // Send the AJAX request
    $.ajax({
        url: "{{ route('save-tournament') }}",
        type: "POST",
        data: {
            "_token": csrfToken,
            formData: formData
        },
        success: function(response) {
            // Handle success
            alert('Tournament saved!');
        },
        error: function(error) {
            // Handle error
            alert('Error saving tournament.');
        }
    });
}

// Attach saveTournament function to form submission
$(document).ready(function() {
    $("#tournamentForm").submit(function(event) {
        event.preventDefault();
        saveTournament();
    });
});

// tournament-script.js

function initializeTournamentPage() {
    function showPage(page) {
        // Add logic to show the corresponding page content
        console.log(`Switching to ${page} page.`);
        // You can use AJAX or other methods to load dynamic content based on the button clicked.
    }

    // You can add more specific JavaScript functionality for the tournament page here
}

// Call the function to initialize the tournament page
initializeTournamentPage();


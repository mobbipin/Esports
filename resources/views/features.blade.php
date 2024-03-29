<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Features</title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('admin_assets/css/style2.css')}}" />
  </head>
  <body>
    <div class="wrapper">
      <div id="search-container">
        <input
          type="search"
          id="search-input"
          placeholder="Search feature name here.."
        />
        <button id="search">Search</button>
      </div>
      <div id="buttons">
        <button class="button-value" onclick="filterProduct('all')">All</button>
        <button class="button-value" onclick="filterProduct('Lineups')">
          Lineups
        </button>
        <button class="button-value" onclick="filterProduct('Post-Game')">
          Post-Game
        </button>
        <button class="button-value" onclick="filterProduct('In-Game')">
          In-Game
        </button>
        
      </div>
      <div id="products"></div>
    </div>
    <div class="return-to-home" onclick="returnToHomepage()">
      <span class="icon">&larr;</span> Return to Homepage
    </div>
    <!-- Script -->
    <script src="script2.js"></script>
  </body>
</html>
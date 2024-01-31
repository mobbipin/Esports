<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MOB ESPORTS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('admin_assets/css/style.css')}}">
        <style>
    .auth-links {
        position: absolute;
        top: 10px;
        right: 100px;
    }
</style> 
    </head>
    <body class="antialiased">
    <div class="relative sm:flex sm:justify-between sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @if (Route::has('login'))
                <div class="auth-links">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary btn-lg">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary btn-lg ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/services">Our Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactus">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/portfolio" > Portfolio</a>
          </li>
        </ul>
        <!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>
  <div class="jumbotron container">
    <nav>
      <img src="{{URL('admin_assets/images/moblogo.png')}}" class="logo">
    </nav>
  </div>

  <h1 class="display-4">MOB Broadcasting and Production</h1>
  <h2 class="led">MOB CREATIVES expands upon its new branch into Broadcasting and Production.</h2>
  <br>
  <p class="lead">We are excited upon our new venture into the Broadcasting and Production Sector. We are looking forward to providing you with the best Broadcasting and Production. </p>
  <p class="lead">"Hey Viewers, MOB CREATIVES here! We're on a mission to transform your Valorant gaming experience into something truly extraordinary. Our expertise lies in the world of esports, and we've honed our skills with games like PUBG Mobile. Now, we're channeling that passion into making your Valorant sessions epic. But we're not just about the games – we're your partners in excitement. Hosting thrilling tournaments, crafting creative tournament roadmaps, and offering a bunch of other cool features is what we do best. Got something special in mind? Have questions? Reach out to us anytime; we're here to make your gaming journey awesome!"

    "Ready for a gaming adventure? At MOB CREATIVES, we're all about turning your Valorant games into unforgettable stories. Our team is passionate about esports, and with our roots in PUBG Mobile, we've got the expertise to make your gaming moments shine. But that's not the end of the story –
    <br>
    ‣ Organize exciting tournaments
    <br>
    ‣ Tournament Roadmap Creation
    <br>
    ‣ Live Events
    <br>
    ‣ Quality Assurance and Quality Control
    <br>
    ‣ Content Creation
    <br>
    ‣ Pre and Post Tournament Marketing (inc. Social Media Posts/Graphics about Tournamnet)
    <br>
    ‣ Event Scheduling
    <br>
    ‣ Planning and Budgeting
    <br>
    ‣ Audience Engagement
    <br>
    ‣ Technical Support
    <br>
    ‣ Post-Event Analysis  and more features to enhance your streaming world.
    <br>
     Have a unique idea or any queries? Shoot us a message; we're here to enhance your viewing experience!"</p>
    <h2>Our Goal</h2>
    <div class="carousel" data-flickity='{ "wrapAround": true }'>
        <div class="carousel-cell iframe-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/ndbggJ4G-K8?si=co7VKPdpNUaWgsdl&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen muted></iframe>

        </div>
    </div>
    </section>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var searchForm = document.querySelector('.d-flex');

    searchForm.addEventListener('submit', function (event) {
      event.preventDefault(); // Prevents the default form submission
      var searchTerm = document.querySelector('.form-control').value;
      // Do something with the search term, e.g., perform a search
      console.log('Search term:', searchTerm);
    });
  });
</script>

</html>

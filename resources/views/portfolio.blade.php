
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('admin_assets/css/style3.css')}}">
</head>
<body>
    <h1 class="portfolio-title">Our Portfolio</h1>
    <div class="wrapper">
        <div class="container">
            <i class="fa-brands fa-intercom"></i>
            <span class="num" data-val="300">300</span>
            <span class="text">Tournaments </span>
        </div>
        <div class="container">
            <i class="fa-solid fa-users"></i>
            <span class="num" data-val="2200">2200</span>
            <span class="text">Teams Participated</span>
        </div>
        <div class="container">
            <i class="fa-solid fa-earth-americas"></i>
            <span class="num" data-val="05">05</span>
            <span class="text">Host Countries</span>
        </div>
        <div class="container">
            <i class="fa-solid fa-users-viewfinder"></i>
            <span class="num" data-val="5000">5000</span>
            <span class="text">Views</span>
        </div>

    </div>
    
    <a href="/" class="return-to-home" >
    <span class="icon">&larr;</span> Return to Homepage</a>

    <!-- custom js -->
    <script src="{{ asset('admin_assets/vendor/jquery-easing/script.js') }}"></script>

</body>
</html>
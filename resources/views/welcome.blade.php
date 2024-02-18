<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>MOB CREATIVES - Broadcasting and Production</title>
          <meta name="title" content="MOB CREATIVES - Broadcasting and Production">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,600,0,0" />

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
    
  <header class="header">
    <div class="container">

      <a href="#" class="logo">
        <img src="{{URL('admin_assets/images/moblogo.png')}}" width="128" height="63" alt="MOB CREATIVES">
      </a>

      <!-- <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Services</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Portfolio</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Features</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Contact Us</a>
          </li>

        </ul>
      </nav> -->

      <a href="{{ route('register') }}" class="btn btn-primary">
        <span class="span">Register</span>

        <span class="material-symbols-rounded">arrow_forward</span>
      </a>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <span class="nav-toggle-icon icon-1"></span>
        <span class="nav-toggle-icon icon-2"></span>
        <span class="nav-toggle-icon icon-3"></span>
      </button>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero has-bg-image" aria-label="home" style="background-image: url('{{ asset('admin_assets/images/bgg2.png')}}')">
        <div class="container">

          <div class="hero-content">

            <p class="section-subtitle :dark">MOB CREATIVES expands upon its venture on New Sector</p>

            <h1 class="h1 section-title">Broadcasting and Production</h1>

            <p class="section-text">We are looking forward to providing you with the best Broadcasting and Production</p>

            <a href="{{ route('login') }}" class="btn">
              
              <span class="span">LOG IN</span>

              <span class="material-symbols-rounded">arrow_forward</span>
            </a>

          </div>
        </div>
      </section>






      <section class="section service has-bg-image" aria-labelledby="service-label"
        style="background-image: url('{{ asset('admin_assets/images/service-bg.jpg')}}')">
        <div class="container">

          <p class="section-subtitle :light" id="service-label">Our services</p>

          <h2 class="h2 section-title">We Provide Great Services For your Tournaments</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <i class="fab fa-chromecast" style="font-size: 100px;"></i>

                </figure>

                <h3 class="h3 card-title">Broadcasting</h3>

                <p class="card-text">
                 Immerse your Audience with our Cutting-Edge E-Sports Brodcasting
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <i class="fa-solid fa-video" style="font-size: 100px;"></i>
                </figure>

                <h3 class="h3 card-title">Production</h3>

                <p class="card-text">
                  Ensure a Seamless, Visually Stunning Top-tier Prodcution 
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <i class="fa-solid fa-wand-magic-sparkles" style="font-size: 100px;"></i>
                </figure>

                <h3 class="h3 card-title">Animations</h3>

                <p class="card-text">
                  We Create Captivating Widgets, Transitions, adding a exiting touch to your streams
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <i class="fa-solid fa-user-group" style="font-size: 100px;"></i>
                </figure>

                <h3 class="h3 card-title">Tournament Hosting</h3>

                <p class="card-text">
                  Our Platform ensures smooth Tournament Registration, Details....
                </p>


                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

            <li class="service-banner">
              <img src="{{URL('admin_assets/images/mobb.png')}}" width="50" height="50" loading="lazy" 
                class="move-anim">
            </li>

            <li>
              <div class="service-card">

                <figure class="card-icon">
                  <i class="fas fa-cog fa-spin" style="font-size: 100px;" ></i>
                </figure>

                <h3 class="h3 card-title">Technical Support</h3>

                <p class="card-text">
                  Troubleshooting and addressing technical issues promptly during live Broadcast
                </p>

                <a href="#" class="btn-link">Read more</a>

              </div>
            </li>

          </ul>

          <a href="#" class="btn">
            <span class="span">View All Services</span>

            <span class="material-symbols-rounded">arrow_forward</span>
          </a>

        </div>
      </section>





      

      <section class="section about has-before" aria-labelledby="about-label" style="background-image: url('{{ asset('admin_assets/images/image2.png')}}') ; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
          
          <div class="about-content">

            <p class="section-subtitle :dark">Our Portfolio</p>

            <h2 class="h2 section-title">Explore Our Work</h2>

            <p class="section-text">
              Check out our work till Today. We are just starting on Valorant. These stats are for our previous game title PUBG Mobile
            </p>

            <p class="section-text">
              As we begin our work in Valorant we will add our stats for it accordingly.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">800K+</strong> Total Views
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">5+</strong> Host Countries
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">300+</strong> Teams Participated
                </p>
              </li>

              <li class="about-item">
                <p>
                  <strong class="display-1 strong">300+</strong> Tournaments Hosted
                </p>
              </li>

            </ul>

          </div>

        </div>
      </section>





      

      <section class="section work" aria-labelledby="work-label">
        <div class="container">

          <p class="section-subtitle :light" id="work-label">Our Features</p>

          <h2 class="h2 section-title">Overlays/Graphics we will display in Stream. </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="{{URL('admin_assets/images/D1.jpg')}}" width="350" height="406" loading="lazy" alt="Today's recap"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Post-Game</p>

                  <h3 class="h3 card-title">Today's Recap</h3>

                  <a href="#" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="{{URL('admin_assets/images/D2.jpg')}}" width="350" height="406" loading="lazy" alt="Type 0f Win"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Post-Game</p>

                  <h3 class="h3 card-title">Type of Win</h3>

                  <a href="#" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="work-card">

                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                  <img src="{{URL('admin_assets/images/TI1.png')}}" width="35" height="40" loading="lazy" alt="Team Information"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Pre-Game</p>

                  <h3 class="h3 card-title">Team Information</h3>

                  <a href="#" class="card-btn">
                    <span class="material-symbols-rounded">arrow_forward</span>
                  </a>
                </div>

              </div>
            </li>
            

          </ul>

        </div>
      </section>

    </article>
  </main>






  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="{{URL('admin_assets/images/moblogo.png')}}" width="128" height="63" alt="MOB CREATIVES">
          </a>

          <p class="footer-text">
           If you have any types of query related to our services and product, you can message us at our Socials or Call/Mail us at our Mail or Number respectively.
          </p>

          <ul class="social-list">

            <li>
              <a href="https://www.facebook.com/profile.php?id=100063618992620" class="social-link">
                <img src="{{URL('admin_assets/images/facebook.svg')}}" alt="facebook">
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/mob_cr3atives_/" class="social-link">
                <img src="{{URL('admin_assets/images/instagram.svg')}}" alt="instagram">
              </a>
            </li>

            <li>
              <a href="https://twitter.com/_MobCr3atives_" class="social-link">
                <img src="{{URL('admin_assets/images/twitter.svg')}}" alt="twitter">
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="h3">Broadcasting Hours</p>
          </li>

          <li>
            <p class="p">Monday – Thursday</p>

            <span class="span">12.00 – 22.45</span>
          </li>

          <li>
            <p class="p">Friday</p>

            <span class="span">Holiday, No Work</span>
          </li>

          <li>
            <p class="p">Saturday - Sunday</p>
            

            <span class="span">12.00 – 03.45</span>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h3">Contact Info</p>
          </li>

          <li>
            <a href="tel:+01234567890" class="footer-link">
              <span class="material-symbols-rounded">call</span>

              <span class="span">+977 9761654803</span>
            </a>
          </li>

          <li>
            <a href="mailto:info@autofix.com" class="footer-link">
              <span class="material-symbols-rounded">mail</span>

              <span class="span">support@mobcr3atives.com</span>
            </a>
          </li>

          <li>
            <address class="footer-link address">
              <span class="material-symbols-rounded">location_on</span>

              <span class="span">Adarsha Colony, Kapan, Kathmandu</span>
            </address>
          </li>

        </ul>

      </div>

      

    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">Copyright 2024, MOB CREATIVES All Rights Reserved.</p>

        <img src="{{URL('admin_assets/images/footer-shape-2.png')}}" width="778" height="335" loading="lazy" alt="Shape"
          class="shape shape-2">
       
        
      </div>
    </div>

  </footer>





  <!-- custom js -->
  <script src="{{ asset('admin_assets/vendor/jquery-easing/script.js') }}"></script>

</body>

</html>

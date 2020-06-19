


<!DOCTYPE html>
<html lang="en">
  <head>
      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

      
      
      
      
    <title>Laravel Home Page</title>
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
      
<!-- Menu -->  
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{route('main')}}">Welcome</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            
          <li class="nav-item active"><a href="{{route('main')}}" class="nav-link">Home</a></li>
            
          <li class="nav-item"><a href="{{route('movie.index')}}" class="nav-link">Movies</a></li>
          
          <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
         
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
    
    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">You can consult Your Movie list  <strong>Here</strong>.</h1>
              
              
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                
                
                <a href="{{route('movie.index')}} " class="btn btn-primary btn-outline-white px-5 py-3">Get Started</a>
                
              </p>
              
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-light">
    <section class="ftco-section-featured ftco-animate">
      <div class="container-fluid" data-scrollax-parent="true">
        <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: '-30%'}">

          <div class="col-md-3 mb-3">
            <a href="#" class="featured-img">
              <div class="text-1 p-4 d-flex align-items-center">
                
              </div>
              <img src="images/image_1.jpg" class="img-fluid" alt="">
              <div class="text p-4 d-flex align-items-center">
                <div class="user d-flex align-items-center">
                  
                  <h3>The Body <br><span class="position">Thriller</span></h3>
                </div>
              </div>
            </a>
          </div>
          
          <div class="col-md-6">
            <div class="row no-gutters">
              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-end">

                  <div class="col-md-8">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        
                      </div>
                      <img src="images/image_5.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          
                          <h3>Mulan <br><span class="position">Fantasy</span></h3>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        
                      </div>
                      <img src="images/image_4.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          
                          <h3>Level 16 <br><span class="position">Thriller</span></h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-start">
                  <div class="col-md-8">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                       
                      </div>
                      <img src="images/image_6.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                         
                          <h3>Alladin <br><span class="position">Fantasy</span></h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                       
                      </div>
                      <img src="images/image_3.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          
                          <h3>Roi Lion <br><span class="position">Animation</span></h3>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <a href="#" class="featured-img">
              <div class="text-1 p-4 d-flex align-items-center">
                
              </div>
              <img src="images/image_2.jpg" class="img-fluid" alt="">
              <div class="text p-4 d-flex align-items-center">
                <div class="user d-flex align-items-center">
                  
                  <h3>Good Will Huntion <br><span class="position">Romance</span></h3>
                </div>
              </div>
            </a>
          </div>

        </div>
        <div class="row mt-5 d-flex justify-content-center">
          <div class="col-md-8 text-center heading-section ftco-animate">
              
            <h2 class="h1">This is  <strong class="px-3">YOUR APP CRUD</strong> to Organise your movie list, you can Create, Read, Update and Delete.</h2>
              
            <a  href="{{route('movie.index')}}" class="btn btn-primary mt-3 py-3 px-5">Get Started</a>
          </div>
        </div>
      </div>
    </section>
    </div>
    
      
            <!--pied de la page-->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                
              <h2 class="ftco-heading-2">Welcome</h2>
                
             
            </div>
          </div>
            
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('main')}}" class="py-2 d-block">Home</a></li>
                
                <li><a href="{{route('movie.index')}}" class="py-2 d-block">Movies</a></li>
                  <li><a href="{{route('about')}}" class="py-2 d-block">About</a></li>
              </ul>
            </div>
          </div>
            
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
          

      </div>
    </footer>
    
    
  

    

  <script src="https://kit.fontawesome.com/yourcode.js"></script>
      
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/particle.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
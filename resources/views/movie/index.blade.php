<!DOCTYPE html>
<html lang="en">
  <head>
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      
    <title>Movie Home CRUD</title>
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
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{route('main')}}">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{route('main')}}" class="nav-link">Home</a></li>
               <li class="nav-item"><a href="{{route('movie.index')}}" class="nav-link">Movies</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
            
            
            <li class="nav-item cta"><a href="{{route('create.movie')}}" class="btn btn-warning"><span>Add New Movie</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('main')}}">Home</a></span> <span>Movies</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Movies</h1>
          </div>
        </div>
      </div>
    </div>
    
    
 
      
      
      
    <section class="ftco-section">
       
        
        <br> <br> <br><br>
  @if($message = Session::get('success'))
   <div class="alert alert-success">
   <strong>Success!</strong> Movie added successfuly.
   </div> 
   @endif

  @if($message = Session::get('update'))
   <div class="alert alert-success">
   {{$message}}
   </div> 
   @endif


  @if($message = Session::get('delete'))
   <div class="alert alert-success">
   {{$message}}
   </div> 
   @endif

            
    <table class="table table-bordered">
        
        <thead>
        <tr>
            <th width="150px"><strong><p class="text-body"> Picture</p></strong></th>
            <th width="90px"><strong><p class="text-body"> Name</p></strong></th>
           <th width="50px"><strong><p class="text-body"> Year</p></strong></th>
           <th width="50px"><strong><p class="text-body"> Type</p></strong></th>
           <th width="310px"><strong><p class="text-body"> Summary</p></strong></th>
           
           <th width="250px"><strong><p class="text-body"> Action</p></strong></th>
        </tr>
        </thead>
        
        <tbody>
          @foreach($movie as $mv)  
        <tr>
             <td><img src="{{ URL::to($mv->movie_picture)}}" height="300px;" width="200px;"> </td>
            <td><strong><p class="text-body">  {{$mv->movie_name}}</p></strong>  </td>
            <td><strong><p class="text-body"> {{$mv->movie_year}}</p></strong></td>
            <td><strong><p class="text-body"> {{$mv->movie_type}}</p></strong></td>
            <td><strong><p class="text-body"> {{$mv->movie_summary}}</p></strong></td>
            
            
            <td>
                <a class="btn btn-info" href="{{URL::to('show/movie/'.$mv->movie_name)}}">Show</a>
                <a class="btn btn-success" href="{{URL::to('edit/movie/'.$mv->movie_name)}}">Edit</a>
                <a class="btn btn-danger" href="{{URL::to('delete/movie/'.$mv->movie_name)}}" onclick="return confirm('Are you sure?')">Delete</a>
            </td>  
        </tr>
          @endforeach   
        </tbody>
        
    </table>

           
      </section>
      
      
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
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
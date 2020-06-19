<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      
    <title>Movie Home CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      </head>
    
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
          <a class="navbar-brand" href="{{route('main')}}"><p class="text-warning">Welcome</p></a>
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
           
              <br> <br> <br>
         
              <p class="breadcrumbs"><strong>U</strong>pdate Your Movie <strong>Here</strong></p>
          </div>
        </div>
      </div>
    </div>
    
      
       <br> <br> <br>
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
          

          
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
              
            <!--Mon formulaire-->
                    
<form action="{{url('update/movie/'.$movie->movie_name)}}" method="POST" enctype="multipart/form-data">
    @csrf

            
              <div class="form-group"> 
                <input type="text" name="movie_name" class="form-control" value="{{$movie->movie_name}}">
              </div>
            
              <div class="form-group">
                <input type="text" name="movie_year" class="form-control" value="{{$movie->movie_year}}">
              </div>
            
              <div class="form-group">
               <input type="text"  name="movie_type" class="form-control"  value="{{$movie->movie_type}}">
              </div>

            
            
              <div class="form-group">
              <textarea name="movie_summary" id="" cols="30" rows="7" class="form-control" placeholder="Summary">{{$movie->movie_summary}}    </textarea>
              </div>
            
             <div class="form-group">
               <p class="text-body"><strong>Picture</strong><br></p>
               <input type="file" name="movie_picture">              
            </div>
            
            
              <div class="form-group">
                <input type="submit" value="Update" class="btn btn-primary">
              </div>
    
                          <div class="form-group">
            <a  class="btn btn-success" href="{{route('movie.index')}} ">Return</a>
        </div>

            
            </form>
              
              
          
           </div>
            
             <div class="col-md-6" id="">
                          <img src="{{ URL::to($movie->movie_picture)}}" height="340px;" width="200px;"> 
               <input type="hidden" name="old" value="{{$movie->movie_picture}}">

            </div>
         
        </div>
          
          
      </div>
    </section>
      
      
    
      
    
    <br><br><br><br>


  </body>
</html>
    
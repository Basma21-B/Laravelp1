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
      
      
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <br><br>
               <p class="breadcrumbs"><strong>M</strong>ovie Details <strong>Here</strong></p>
          </div>
        </div>
      </div>
    </div>
      
      

<br><br><br>
<section class="ftco-section contact-section ftco-degree-bg">

    <div class="container bg-light">
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          
              
              
    
   
        
  
        
        
            <div class="form-group">
            <strong>Name</strong>
            <input type="text"  class="form-control" value="{{$data->movie_name}}">
              
            </div>
        
        
       
            <div class="form-group">
            <strong>Year</strong>
                <input type="text" class="form-control" value=" {{$data->movie_year}}">
               
            </div>
       
 
        
        
            <div class="form-group">
            <strong>Type</strong>
                <input type="text" class="form-control" value="{{$data->movie_type}}">
                
            </div>
        
                
          
            <div class="form-group">
            <strong>Summary</strong>
                  <textarea  cols="30" rows="7" class="form-control" >{{$data->movie_summary}}    </textarea>
                
               
            </div>
        
                      <div class="form-group">
            <a  class="btn btn-success" href="{{route('movie.index')}} ">Return</a>
        </div>

              
        
        
        
        
        
        
        
             
            </div>
            
            
             <br><br><br><br>
                         <div class="col-md-6" id="">
                          <img src="{{ URL::to($data->movie_picture)}}" height="340px;" width="200px;"> 
                             
               
            </div>
    </div>
    </div>

      </section>
      
      <br><br><br><br>
      
      
      </body>
  
</html>

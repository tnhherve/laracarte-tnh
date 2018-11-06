
   <!--  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Laracarte</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <div class="container">  
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Artisans</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="#">laravel.com</a>
                <a class="dropdown-item" href="#">laravel.io</a>
                <a class="dropdown-item" href="#">laracasts</a>
                <a class="dropdown-item" href="#">larajobs</a>
                <a class="dropdown-item" href="#">laravel News</a>
                <a class="dropdown-item" href="#">laraChat</a>
              </div>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
           <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>    
      </div>
    </nav> -->

     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal"><a href="{{ route('home') }}">{{config('app.name')}}</a> </h5>
      <nav class="my-2 my-md-0 mr-md-3 navbar-left">
        <a class="p-2 text-dark active" href="{{ route('home') }}">Home</a>
        <a class="p-2 text-dark" href="{{ route('about') }}">About</a>
        <a class="p-2 text-dark" href="#">Artisans</a>
        <a class="p-2 text-dark dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="#">laravel.com</a>
                <a class="dropdown-item" href="#">laravel.io</a>
                <a class="dropdown-item" href="#">laracasts</a>
                <a class="dropdown-item" href="#">larajobs</a>
                <a class="dropdown-item" href="#">laravel News</a>
                <a class="dropdown-item" href="#">laraChat</a>
              </div>
        <a class="p-2 text-dark" href="#">Contact</a>       
      </nav>
      <a class="btn btn-outline-primary" href="#">Login</a>
      <a class="btn btn-outline-primary" href="#">Register</a>
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fooders</title>
</head>
<body class="bg-dark bg-opacity-10 d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-3 mb-lg-0">
              <li class="nav-item ps-5">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                @auth
                  @if(Auth::user()->role == "Admin")
                  <a class="nav-link active ps-3" aria-current="page" href="/manageFood">Manage Order</a>
                  @endif
                @endauth
              </li>
            </ul>
            <form class="d-flex" action="" method="get">
              <i class="bi bi-search"></i> <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search" value="{{request('search') ?? ""}}">
            </form>
            
            @if(!Auth::check())
              <a class="nav-link active" aria-current="page" href="/login" style="color: lightgray">Login</a>
              <a class="nav-link active" aria-current="page" href="/register" style="color: lightgray">Register</a>
            @endif

            @auth
              @if(Auth::user()->role == "Admin")
              <div class="dropdown me-5 ms-2">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-circle" style="color: white"></i>
                </button>3
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/profile">Profile</a></li>
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
              </div>
              @elseif(Auth::user()->role == "Member")
              <div class="dropdown me-3 ms-2">
                <a href="/cart"><i class="m-2 bi bi-cart3" style="color: white"></i></a>
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-circle" style="color: white"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/profile">Profile</a></li>
                  <li><a class="dropdown-item" href="/transactionhistory">Transaction History</a></li>
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
              </div>
              @endif
            @endauth
          
        </div>
        </div>
      </nav>
    
      @yield('isiPage')


      <footer class="footer bg-dark mt-auto">
        <div class="container">
          <div class="row" style="width: 100%">
              <div class="copyright mt-3 mb-2 text-center" >
                <p style="color: white"><small>© 2021 Fooders. All rights reserved.</small></p>
              </div>
          </div>
        </div>
      </footer>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>
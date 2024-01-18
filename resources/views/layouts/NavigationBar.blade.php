<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>navBar</title>
    </head>
    <body>
        
        <div class="text-center">
            <h1 class="p-3 mb-2 bg-warning text-dark">Giant Book Supplier</h1>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="/HomePage">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Publisher
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/PublisherDetail/1">Gramedia</a>
                                <a class="dropdown-item" href="/PublisherDetail/2">Erlangga</a>
                                <a class="dropdown-item" href="/PublisherDetail/3">Grasindo</a>
                                <a class="dropdown-item" href="/PublisherDetail/4">Falcon</a>
                                <a class="dropdown-item" href="/PublisherDetail/5">Bentang Pustaka</a>
                            </div>
                            </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/ContactPage">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Book Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/BookDetail/1">Comic</a>
                            <a class="dropdown-item" href="/BookDetail/2">Novel</a>
                            <a class="dropdown-item" href="/BookDetail/3">Self Improvement</a>
                            <a class="dropdown-item" href="/BookDetail/4">Kids</a>
                            <a class="dropdown-item" href="/BookDetail/5">Education</a>
                        </div>
                        </li>
                    </ul>
                    
                </div>
            
          </nav>
          
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <div>
             @yield('headings')
        </div>
        <footer>
            <div class="text-center">
                <p class="p-3 mb-2 bg-secondary text-white">@Giant Book Supplier 2022</p>
            </div>
        </footer>
    </body>        
</html>
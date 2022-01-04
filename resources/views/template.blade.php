<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HappyBookStore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="p-5 bg-primary text-white text-center">
        <h1>HAPPY BOOK STORE</h1>
    </div>
    <div>
        <div class="navbar-expand-lg navbar-light bg-light">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        @php
                            $category=App\Models\Category::All();
                        @endphp
                        @foreach ($category as $ctgry)
                            <li>
                                <a class="dropdown-item" href="/category/{{$ctgry->category}}">{{$ctgry->category}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact/">Contact</a>
                </li>
            </ul>
        </div>

        <div class="d-flex justfy-content-around">
            <div class="w-25">
        </div>

        <div class="container mt-5 w-100">
            @yield('container')
        </div>

        <div class="w-50 ms-2 mt-5 ml-2">
            <h3 class="bg-warning w-50 p-3">Category</h3>
            <ul class="list-group pt-3">
                @php
                    $category=App\Models\Category::All();
                @endphp
                @foreach ($category as $ctgry)
                    <li class="list-group pt-1">
                        <a class="text-decoration-none" href="/category/{{$ctgry->category}}">{{$ctgry->category}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="p-3 mt-5 bg-primary text-white text-center">
        <span>© Happy Book Store 2021</span>
    </div>
</body>
</html>

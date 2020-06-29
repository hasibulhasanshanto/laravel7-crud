<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>@yield('title')</title>
</head>

<body>

    <div class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4">Laravel 7 CRUD</h1>
            <p class="lead">Made by: Hasibul Hasan</p>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>


    <div class="jumbotron text-center mt-3" style="margin-bottom:0">
        <p>Footer</p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-lightd d-flex justify-content-center align-items-center vh-100">
    <div class="container ">
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{asset('storage/images/logo.png')}}" alt="">
        </div>
        @component('__partials.messages')
        @endcomponent
        <div class="d-flex justify-content-center align-items-center"> 
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="m-1">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username">
                </div>
                <div class="m-1">
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password">
                </div>
                <div class="align-center m-1">
                    <input type="submit" name="" id="" class="btn btn-dark w-100 fs-medium">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
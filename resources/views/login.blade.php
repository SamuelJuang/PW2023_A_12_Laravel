<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .form-control {
            border-radius: 10px;
            border-color: hsl(0, 0%, 0%);
        }
        body{
            object-fit: cover;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }
        
        body{
            animation:fadeIn 1s both;
        }
    </style>
</head>

<body>
    <div class="row align-items-center m-0">
        <div class="col-md-6">
            <div class="container-fluid px-5">
                <div class="d-flex justify-content-center" style="padding: 30px;">
                    <img src="{{ asset('images/logo kereta api.svg') }}" alt="SVG" width="150px">
                </div>
                <div class="px-5 mx-5">
                    @if(session('error'))
                    <div class="alert alert-danger">
                        <b>Oops!</b> {{ session("error") }}
                    </div>
                    @endif
                    <form action="{{ route('actionLogin') }}" method="POST">
                        @csrf
                        <label class="form-label"for="login">Email</label>
                        <input class="form-control" required type="login" name="email" id="email">
                        <label class="form-label" for="password" style="padding-top: 10px;">Password</label>
                        <input class="form-control" required  type="password" name="password" id="password">
                        <p class="fw-light" style="color: #252525; font-size: 12px; padding-top: 10px;">Belum punya akun? <a href="/register" style="color:#252525;" class="fw-semibold">Register</a></p>
                        <div class="d-grid gap-2" >
                            <button class="btn btn-primary" style="border-radius: 10px" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0 gambarReg">
            <img src="{{ asset('images/RailwayStation.png') }}" alt="Railway Station" style="width: 100%; height: 100vh;">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
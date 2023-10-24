<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .form-control {
            border-radius: 10px;
            border-color: #000000;
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
                <form action="">
                        <label class="form-label" for="username">Username</label>
                        <input class="form-control" required type="text" name="username" id="username" style="padding-top: 5px;">
                        <label class="form-label" for="telp" style="padding-top: 10px;">Nomor Telepon</label>
                        <input class="form-control" required type="tel" name="telp" id="telp" style="padding-top: 5px;">
                        <label class="form-label" for="email" style="padding-top: 10px;">Email</label>
                        <input class="form-control" required type="email" name="email" id="email" style="padding-top: 5px;">
                        <label class="form-label" for="password" style="padding-top: 10px;">Password</label>
                        <input class="form-control" required type="password" name="password" id="password" style="padding-top: 5px;">
                        <div class="d-grid gap-2" style="padding-top: 20px;">
                            <button onclick="redirectToLoginPage()"  class="btn btn-primary" style="border-radius: 10px" type="button">Register</button>
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
    <script>
        // Setelah pendaftaran berhasil, arahkan pengguna ke halaman login
        function redirectToLoginPage() {
          window.location.href = "/login"; // Ganti dengan URL halaman login yang sesuai
        }
      </script>
      
</body>

</html>
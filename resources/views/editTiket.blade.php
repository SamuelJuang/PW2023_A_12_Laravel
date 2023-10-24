<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Lottie Player -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- JQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Animations -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman Edit Tiket</title>
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <style>
        body {
            overflow: hidden;
            background-image: "{{asset('images/tempTrainStation.jpg')}}";
            height: 100vh;
            background-size: cover;
            background-image: url('https://images.unsplash.com/photo-1495313196544-7d1adf4e628f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80');
            background-color: rgba(0, 0, 0, 0.6);
            background-blend-mode: darken;
            background-repeat: no-repeats;
        }

        hr {
            border: 0;
            clear: both;
            display: block;
            width: 100%;
            background-color: #ffffff;
            height: 3px;
            opacity: 100%;
        }


        footer {
            font-size: small;
            position: fixed;
            left: 0px;
            bottom: 0px;
            height: 30px;
            width: 100%;
            opacity: 0.5;
        }

        .adminPage{
        color: white;
    }
    
    
    body{
        background-color: rgba(0, 0, 0, 0.6);
        background-blend-mode: darken;
    }
    </style>
</head>

<body>
    <div class="container mx-5">
        <div class="d-flex align-content-between">
            <div class="container-fluid">
                <h3 class="text-white mt-3"><strong>Halaman Admin</strong></h3>
            </div>
            <div class="row container-fluid" style="margin-top: 3px;">
                <form action="{{ url('/logout') }}">
                    <button class="btn btn-danger float-end my-3 rounded px-5 mx-5" type="submit">
                        Logout
                    </button>
                </form>
            </div>
        </div>
        <hr>
    </div>
<div class="text-white px-2 mx-2">
    <form class="editTiketContainer" action="">
            <label class="form-label" for="username">Asal</label>
            <input class="form-control" type="text" name="username" id="username" style="padding-top: 5px;">
            <label class="form-label" for="telp" style="padding-top: 10px;">Kelas Kereta</label>
            <input class="form-control" type="text" name="telp" id="telp" style="padding-top: 5px;">
            <label class="form-label" for="rating" style="padding-top: 10px;">Rating</label>
            <input class="form-control" type="email" name="email" id="email" style="padding-top: 5px;">
            <label class="form-label" for="password" style="padding-top: 10px;">Ketersediaan</label>
            <input class="form-control" type="text" name="tersedia" id="password" style="padding-top: 5px;">

            <label class="form-label" for="username">Stasiun Awal</label>
            <input class="form-control" type="text" name="username" id="username" style="padding-top: 5px;">
            <label class="form-label" for="telp" style="padding-top: 10px;">Stasiun Tujuan</label>
            <input class="form-control" type="text" name="telp" id="telp" style="padding-top: 5px;">
            <label class="form-label" for="email" style="padding-top: 10px;">Jam Keberangkatan</label>
            <input class="form-control" type="email" name="email" id="email" style="padding-top: 5px;">
            <label class="form-label" for="password" style="padding-top: 10px;">Harga</label>
            <input class="form-control" type="text" name="tersedia" id="password" style="padding-top: 5px;">
        </form>
        <br>
   </div>

    <div class="d-flex flex-row-reverse">
        <button onclick="redirectToEditTiket()" class="btn btn-primary px-5 mx-3" id="tambah">
            Edit Tiket
        </button>
        <button onclick="" class="btn btn-danger px-5 mx-3" id="tambah">
            Hapus Tiket
        </button>
    </div>
</div>
  <!-- endof modal -->

  <!-- success payment animation -->
<div id="darkenScreen"></div>
<div id="videoContainer">
    <dotlottie-player id="lottiePlayer" src="https://lottie.host/1f25b754-dfaf-4e88-955b-0b913c12c407/UXE2t7llC3.json" background="transparent" speed="0.8" style="width: 300px; height: 300px;" ></dotlottie-player>
    <p class="text-white ms-5"><strong>Berhasil mengedit tiket!</strong></p>
</div>
 <script>
    function redirectToTambahTiket() {
        window.location.href = "/tambahTiket"; // Ganti dengan URL halaman login yang sesuai
    }
    
    function redirectToEditTiket() {
        window.location.href = "/editTiket"; // Ganti dengan URL halaman login yang sesuai
    }

    function redirectHome(){
        window.location.href = "{{url('profile')}}";
    }

    window.addEventListener("pageshow", function(event) {
            if (event.persisted) {
                var lottiePlayer = document.getElementById("lottiePlayer");
                lottiePlayer.currentFrame = 0;
            }
        });
</script>   
</body>
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

        .profile {
            height: 20vh;
        }
        .transform-active {
    background-color: #45CEE0;
    height: 200px;
    width: 200px;
    }   
  
    ::-webkit-scrollbar {
        width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        background: #292b2c;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: #0275d8;
        border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #0275d8;
        }
        .container-md{
            border: solid 2px black;
        }
        .star:hover{
            opacity: 1;
        }
        p.card-title{
            cursor: pointer;
        }

        .adminPage{
        color: white;
    }
    .paymethodContainer input[type ="radio"]{
        display: none;
        position: absolute;
        top: 0;
        left: 0;
    }
    .ticketSelectionContainer input[type ="radio"]{
        display: none;
        position: absolute;
        top: 0;
        left: 0;
    }

    .paymethodContainer label {
    display: inline-block;
    padding: 10px 20px;
    border: solid 1px black;
    color: #0275d8;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.2s;
    }
    
    .paymethodContainer input[type="radio"]:checked + label,
    .paymethodContainer input[type="radio"]:hover + label {
        background-color: #0275d8 !important;
        color: white;
        border-color: white;
    }

    .ticketSelectionContainer input[type ="radio"]:checked + label,
    .ticketSelectionContainer input[type ="radio"]:hover + label
    {
        animation: Border 1s infinite alternate;
    }

    .paymethodContainer input[type="radio"]:checked + label{
        animation: Border 1s infinite alternate;
    }
    
    body{
        background-color: rgba(0, 0, 0, 0.6);
        background-blend-mode: darken;
    }
    .transform {
    -webkit-transition: all 2s ease;  
    -moz-transition: all 2s ease;  
    -o-transition: all 2s ease;  
    -ms-transition: all 2s ease;  
    transition: all 2s ease;
    }

    .mystyle{
        transition: all 0.2s;
        animation: Border 1s infinite alternate;
    }


    .transform-active {
    background-color: #45CEE0;
    height: 200px;
    width: 200px;
    }   
  
    ::-webkit-scrollbar {
    width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
    background: #292b2c;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #0275d8;
    border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: #0275d8;
    }

    /* Success Video CSS */
    #darkenScreen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: none; 
        /* sembunyiin dulu penggelapannya */
    }

    #videoContainer {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none; 
        /* ini juga di sembunyiin dulu */
    }
    

    </style>
</head>

<body>
<br>
<h2 class="adminPage"><strong>Halaman Edit Tiket</strong></h2>
<hr>
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
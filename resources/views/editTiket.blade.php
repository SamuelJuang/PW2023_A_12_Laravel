@extends('PageNavFoot')

@section('content')
<h5 class="adminPage"><strong>Edit Tiket</strong></h5>
<hr>
<!-- Lottie Player -->
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
<!-- JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Animations -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
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
<div class="text-white px-2 mx-2">
    <form action="">
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
    <p class="text-white ms-5"><strong>Berhasil Edit Tiket!</strong></p>
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

@endsection
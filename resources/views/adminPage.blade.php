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
    <title>Halaman Admin</title>
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
<div class="container">
   <div class="container" style="width: 100%; height: 50vh; overflow-y: auto; margin-bottom: 5vh;">
        <div class="row">
            <!-- Tickets -->
            @forelse ($ticket as $item)
                    <div class="col-6 my-2 ticketSelectionContainer">
                        <input type="radio" name="ticketSelection" id="{{ $item['id'] }}" value="{{ $item['id'] }}">
                        <label for="{{ $item['id'] }}" style="border-radius:7px;">
                            <div class="card " style="width: 30rem; height: 17rem;" id="{{ $item['id'] }}" onclick="checkTickets()">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between text-primary">
                                        <p class="card-title">
                                            <strong>    
                                                {{ $item['namakereta'] }}
                                            </strong>
                                        </p>
                                        <p class="card-title">
                                        <strong>
                                            IDR {{ number_format($item['harga']) }}
                                        </strong>
                                        </p>    
                                    </div>
                                    <div class="d-flex justify-content-between" style="opacity: 100%;">
                                        <p class="card-subtitle text-secondary">
                                            {{ $item['kelas'] }}
                                        </p>
                                        <p class="card-subtitle text-success">
                                            <strong>
                                                {{ $item['status'] }}
                                            </strong>
                                        </p>
                                    </div>
                                    <br> <p class="card-subtitle text-secondary">Rating :
                                    <?php
                                        for ($x = 0; $x <  $item['rating'] ; $x++) {
                                    ?>
                                    <i class="fas fa-star fa-xs" style="color: gold;"></i>
                                            <?php }
                                    ?>
                                </p>
                                <br>
                                <div class="d-flex justify-content-between" style="opacity: 100%;">
                                    <p class="card-subtitle text-secondary">
                                    <strong>
                                        {{ $item['asal'] }}
                                    </strong>
                                    </p>
                                    <p class="card-subtitle text-secondary">
                                        <strong>
                                            {{ $item['tujuan'] }}
                                        </strong>
                                    </p>
                                </div>
                                <br>

                                <div class="d-flex justify-content-between py-2" style="opacity: 100%;">
                                    <p class="card-subtitle text-primary pt-2">
                                    <strong>
                                        <?php
                                        echo date("h:i", $item['departDateTime'])
                                        ?>
                                    </strong>
                                    </p>
                                    <svg height="25" width="125">
                                        <g fill="none" stroke="black" stroke-width="2">
                                        <path stroke-dasharray="5,5" d="M5 20 l215 0" />
                                        </g>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="35" viewBox="0 0 32 35" fill="none">
                                        <g opacity="0.7">
                                        <path d="M15.7944 0C8.04269 0 0.291016 0.906039 0.291016 7.24831V24.4631C0.291016 26.1451 1.00562 27.7583 2.27763 28.9477C3.54963 30.1371 5.27484 30.8053 7.07373 30.8053L4.16685 33.5234V34.4295H8.48841L12.3643 30.8053H19.6702L23.546 34.4295H27.4219V33.5234L24.515 30.8053C26.3139 30.8053 28.0391 30.1371 29.3111 28.9477C30.5831 27.7583 31.2977 26.1451 31.2977 24.4631V7.24831C31.2977 0.906039 24.36 0 15.7944 0ZM7.07373 27.1812C6.30278 27.1812 5.5634 26.8948 5.01826 26.3851C4.47311 25.8753 4.16685 25.1839 4.16685 24.4631C4.16685 23.7422 4.47311 23.0508 5.01826 22.5411C5.5634 22.0313 6.30278 21.7449 7.07373 21.7449C7.84468 21.7449 8.58406 22.0313 9.12921 22.5411C9.67435 23.0508 9.98061 23.7422 9.98061 24.4631C9.98061 25.1839 9.67435 25.8753 9.12921 26.3851C8.58406 26.8948 7.84468 27.1812 7.07373 27.1812ZM13.8564 14.4966H4.16685V7.24831H13.8564V14.4966ZM17.7323 14.4966V7.24831H27.4219V14.4966H17.7323ZM24.515 27.1812C23.7441 27.1812 23.0047 26.8948 22.4595 26.3851C21.9144 25.8753 21.6081 25.1839 21.6081 24.4631C21.6081 23.7422 21.9144 23.0508 22.4595 22.5411C23.0047 22.0313 23.7441 21.7449 24.515 21.7449C25.286 21.7449 26.0253 22.0313 26.5705 22.5411C27.1156 23.0508 27.4219 23.7422 27.4219 24.4631C27.4219 25.1839 27.1156 25.8753 26.5705 26.3851C26.0253 26.8948 25.286 27.1812 24.515 27.1812Z" fill="#252525"/>
                                        </g>
                                    </svg>
                                    <svg height="25" width="125">
                                        <g fill="none" stroke="black" stroke-width="2">
                                        <path stroke-dasharray="5,5" d="M5 20 l215 0" />
                                        </g>
                                    </svg>
                                    <p class="card-subtitle text-primary pt-2">
                                        <strong>
                                            <?php
                                            echo date("h:i", $item['arrivalDateTime'])
                                            ?>
                                        </strong>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <small class="card-text ">
                                            <?php
                                            echo date("d M Y", $item['arrivalDateTime'])
                                            ?>
                                    </small>
                                    <small class="card-title">
                                        <?php
                                            echo date("d M   Y", $item['arrivalDateTime'])
                                            ?>  
                                    </small>
                                </div>
                                
                                </div>
                            </div>
                        </label>
                    </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex flex-row-reverse">
        <button onclick="redirectToTambahTiket()" class="btn btn-primary px-5 mx-3" id="tambah">
            Tambah Tiket
        </button>
        <button onclick="redirectToEditTiket()" class="btn btn-primary px-5 mx-3"  id="edit" >
            Edit Tiket 
        </button>
    </div>
</div>
  <!-- endof modal -->

  <!-- success payment animation -->
<div id="darkenScreen"></div>
<div id="videoContainer">
    <dotlottie-player id="lottiePlayer" src="https://lottie.host/1f25b754-dfaf-4e88-955b-0b913c12c407/UXE2t7llC3.json" background="transparent" speed="0.8" style="width: 300px; height: 300px;" ></dotlottie-player>
    <p class="text-white ms-5"><strong>Pembayaran Anda Berhasil!</strong></p>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- JQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
            font-family: 'Poppins';
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

        .container-md {
            border: solid 2px black;
        }

        .adminPage {
            color: white;
        }

        .ticketSelectionContainer input[type="radio"] {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
        }

        .UserSelectionContainer input[type="radio"] {
            display: none;
        }

        .ticketSelectionContainer input[type="radio"]:checked+label,
        .ticketSelectionContainer input[type="radio"]:hover+label {
            animation: Border 1s infinite alternate;
        }

        .UserSelectionContainer input[type="radio"]:checked+label,
        .UserSelectionContainer input[type="radio"]:hover+label {
            animation: Border 1s infinite alternate;
        }

        body {
            background-color: rgba(0, 0, 0, 0.6);
            background-blend-mode: darken;
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
    </style>
</head>

<body>
    <br>
    <div class="container mx-10 mb-5">
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
        <hr class="w-10 margin-bottom:10px;">
    </div>
    <div class="d-flex" >
        <div>
            <div class="d-flex" style="margin-left: 50px;">
                <div class="d-flex">
                    <h3 class="text-white mx-2"><strong>Jadwal</strong></h3>
                    <div>
                        <button onclick="redirectToTambahTiket()" class="btn btn-primary px-2 fa-solid fa-add" id="tambahTiket" style="margin-right:8px">
                    </div>
                    <div>
                        <button onclick="redirectToEditTiket()" class="btn btn-primary px-2 fa-solid fa-edit" id="tambahTiket" style="margin-right:8px">
                    </div>
                    <div>
                        <button onclick="redirectToEditTiket()" class="btn btn-danger px-2 fa-solid fa-trash" id="tambahTiket" style="margin-right:8px">
                    </div>
                </div>
            </div>
            <div class="d-flex align-content-between" style="margin-right: 50px;">
                <div class="container ms-5" style="width: 70%; height: 50vh; overflow-y: auto; margin-bottom: 5vh;">
                    <!--  -->
                    <div class="row">
                        <!-- Jadwal -->
                        @forelse ($ticket as $item)
                        <div class="col-12 my-2 ticketSelectionContainer mx-auto">
                            <input type="radio" name="ticketSelection" id="{{ $item['id'] }}" value="{{ $item['id'] }}">
                            <label for="{{ $item['id'] }}" style="border-radius:7px;">
                                <div class="card " style="width: 17rem; height: 18rem;" id="{{ $item['id'] }}" onclick="checkTickets()">
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
                                          
                                            <p class="card-subtitle text-success">
                                                <strong>
                                                    {{ $item['status'] }}
                                                </strong>
                                            </p>
                                        </div>
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
                                                     - 
                                                    <?php
                                                    echo date("h:i", $item['arrivalDateTime'])
                                                    ?>
                                                </strong>
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
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
            </div>
        </div>
        <div>
            <div class="d-flex" style="margin-left: 22px;">
                <h3 class="text-white mx-2"><strong>User</strong></h3>
                <div>
                    <button onclick="redirectToTambahUser()" class="btn btn-primary px-2 fa-solid fa-add" id="tambahTiket" style="margin-right:8px"></button>
                </div>
                <div>
                    <button onclick="redirectToEditUser()" class="btn btn-primary px-2 fa-solid fa-edit" id="tambahTiket" style="margin-right:8px"></button>
                </div>
                <div>
                    <button onclick="redirectToEditStasiun()" class="btn btn-danger px-2 fa-solid fa-trash" id="tambahTiket" style="margin-right:8px"></button>
                </div>
            </div>
            <div class="container ms-3" style="width: 83%; height: 50vh; overflow-y: auto; margin-bottom: 5vh; margin-right:10px">
                <div class="row">
                    @forelse ($user as $item)
                    <div class="my-2 UserSelectionContainer mx-auto">
                        <input type="radio" name="userSelection" id="{{ $item['username'] }}" value="{{ $item['id'] }}">
                        <label for="{{ $item['username'] }}" style="border-radius:7px;">
                            <div class="card " style="width: 17rem; height: 5rem;" id="{{ $item['id'] }}" onclick="checkUser()">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between text-primary">
                                        <p class="card-title">
                                            <strong>
                                                {{ $item['username'] }}
                                            </strong>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between" style="opacity: 100%;">
                                        <p class="card-subtitle text-secondary">
                                            {{ $item['email'] }}
                                        </p>
                                        <p class="card-subtitle text-success">
                                            <strong>
                                                {{ $item['status'] }}
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex" style="margin-left: 50px;">
                <h3 class="text-white mx-2"><strong>Kereta Api</strong></h3>
                <div>
                    <button onclick="redirectToTambahKereta()" class="btn btn-primary px-2 fa-solid fa-add" id="tambahTiket" style="margin-right:8px">
                </div>
                <div>
                    <button onclick="redirectToEditKereta()" class="btn btn-primary px-2 fa-solid fa-edit" id="tambahTiket" style="margin-right:8px">
                </div>
                <div>
                    <button onclick="redirectToEditKereta()" class="btn btn-danger px-2 fa-solid fa-trash" id="tambahTiket" style="margin-right:8px">
                </div>
            </div>
            <div class="container ms-5" style="width: 83%; height: 50vh; overflow-y: auto; margin-bottom: 5vh;">
                <div class="d-flex">
                </div>
                <div class="row">
                    @forelse ($kereta as $item)
                    <div class="col-12 my-2 UserSelectionContainer mx-auto">
                        <input type="radio" name="userSelection" id="{{ $item['namaKereta'] }}" value="{{ $item['id'] }}">
                        <label for="{{ $item['namaKereta'] }}" style="border-radius:7px;">
                            <div class="card " style="width: 17rem; height: 5rem;" id="{{ $item['id'] }}" onclick="checkUser()">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between text-primary">
                                        <p class="card-title">
                                            <strong>
                                                {{ $item['namaKereta'] }}
                                            </strong>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between" style="opacity: 100%;">
                                        <p class="card-subtitle text-secondary">
                                            {{ $item['tipeKereta'] }}
                                        </p>
                                        <p class="card-subtitle text-success">
                                            <strong>
                                                {{ $item['status'] }}
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        function redirectToTambahTiket() {
            window.location.href = "/addTicket";
        }

        function redirectToTambahUser() {
            window.location.href = "/addUser";
        }

        function redirectToTambahKereta() {
            window.location.href = "/addKereta";
        }

        function redirectToEditTiket() {
            window.location.href = "/editTiket";
        }

        function redirectToEditStasiun() {
            window.location.href = "/editStasiun";
        }

        function redirectToEditKereta() {
            window.location.href = "/editKereta";
        }

        function redirectToEditUser() {
            window.location.href = "/editUser";
        }

        function redirectHome() {
            window.location.href = "{{url('profile')}}";
        }

        window.addEventListener("pageshow", function(event) {
            if (event.persisted) {
                var lottiePlayer = document.getElementById("lottiePlayer");
                lottiePlayer.currentFrame = 0;
            }
        });

        function checkTickets() {
            var element2 = document.getElementById("editTiket");
            if ($("input[name='ticketSelection']:checked").length > 0) {
                element2.disabled = false;
            } else {
                element2.disabled = true;
            }
        }

        function checkUser() {
            var element2 = document.getElementById("editUser");
            if ($("input[name='userSelection']:checked").length > 0) {
                element2.disabled = false;
            } else {
                element2.disabled = true;
            }
        }

        function deleteTicket() {
            var selectedTicketId = $("input[name='ticketSelection']:checked").val();

            if (!selectedTicketId) {
                alert("Harap pilih tiket yang akan dihapus.");
                return;
            }

            var confirmDelete = confirm("Apakah Anda yakin ingin menghapus tiket ini?");
            if (!confirmDelete) {
                return;
            }

            $.ajax({
                type: "POST",
                url: "{{ url('/deleteTicket') }}",
                data: {
                    ticketId: selectedTicketId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        alert("Tiket berhasil dihapus!");
                        redirectBack();
                    } else {
                        alert("Gagal menghapus tiket. Silakan coba lagi.");
                    }
                },
                error: function() {
                    alert("Terjadi kesalahan saat menghapus tiket. Silakan coba lagi.");
                }
            });
        }
    </script>
</body>
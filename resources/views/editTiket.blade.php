<!DOCTYPE html>
<html lang="en">

<head>
    <!-- JQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
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
            background-color: rgba(0, 0, 0, 0.8);
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

        .adminPage {
            color: white;
        }
    </style>
</head>

<body>
    <a href=" {{url('/adminPage')}}">
        <div class="vector mx-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 45 45" fill="none" style="margin-top:32px ; margin-left: 10px;">
                <path d="M45 19.6591V25.3409L10.9091 25.3409L26.5341 40.9659L22.5 45L0 22.5L22.5 0L26.5341 4.03409L10.9091 19.6591L45 19.6591Z" fill="white" />
            </svg>
        </div>
    </a>
    <div class="container ">
        <div class="d-flex align-content-between">
            <div class="container-fluid">
                <h3 class="text-white mt-4"><strong>Halaman Admin</strong></h3>
            </div>
        </div>
        <div>
            <hr class="dashed-hr mb-2" style="color: #252525;">
        </div>
        <div>
            <p class="text-white fw-bold fs-5" style="margin-left: 10px;">Edit Tiket</p>
        </div>
    </div>
    <div class="text-white px-2 mx-2">
        <from class="editTiketContainer" action="">
            <div class="d-flex">
            <div style="margin-left: 15%;">
                    <label class="form-label" for="username">Nama Kereta</label>
                    <input class="form-control text-white" value="SAF JAYA" type="text" name="asal" id="asal" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="kelas" style="padding-top: 10px;">Kelas Kereta</label>
                    <input class="form-control text-white" value="Ekonomi" type="text" name="kelas" id="kelas" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="rating" style="padding-top: 10px;">Rating</label>
                    <input class="form-control text-white" value="5" type="rating" name="rating" id="rating" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="tersedia" style="padding-top: 10px;">Ketersediaan</label>
                    <input class="form-control text-white" value="50" type="number" name="tersedia" id="tersedia" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                </div>
                <div style="margin-left: 20%;">
                    <label class="form-label" for="asal">Stasiun Asal</label>
                    <input class="form-control text-white" value="Stasiun Yogyakarta"  type="text" name="asal" id="asal" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="tujuan" style="padding-top: 10px;">Stasiun Tujuan</label>
                    <input class="form-control text-white" value="Stasiun Solo Balapan" type="text" name="tujuan" id="tujuan" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="tglDept" style="padding-top: 10px;">Tanggal Keberangkatan</label>
                    <input class="form-control text-white" type="datetime-local" name="tglDept" id="tglDept" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="harga" style="padding-top: 10px;">Harga</label>
                    <input class="form-control text-white" value="100000" type="text" name="harga" id="harga" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                </div>
            </div>
        </from>
    </div>
    <div class="d-flex flex-row-reverse" style="margin-top: 20px; margin-right: 18%;">
        <button onclick="editedTicket()" class="btn btn-primary px-4 mx-3" id="edit">
            Edit Tiket
        </button>
        <button onclick="editedTicket()" class="btn btn-danger px-4 mx-3" id="hapus">
            Hapus Tiket
        </button>
    </div>
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast1" class="toast align-items-center  text-white" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex" style="background-color: blue;">
            <div class="toast-body">
                <span>
                    <i class="fa-solid fa-check"></i>
                    Berhasil Mengubah Ticket
                </span>
            </div>
            </div>
        </div>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast2" class="toast align-items-center  text-white" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex" style="background-color: red;">
            <div class="toast-body">
                <span>
                    <i class="fa-solid fa-check"></i>
                    Berhasil Menghapus Ticket
                </span>
            </div>
            </div>
        </div>
    </div>
    <script>
        const toastTrigger = document.getElementById('edit')
        const toastLiveExample = document.getElementById('liveToast1')
        if (toastTrigger) {
        toastTrigger.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
        }
        const toastTrigger2 = document.getElementById('hapus')
        const toastLiveExample2 = document.getElementById('liveToast2')
        if (toastTrigger2) {
        toastTrigger2.addEventListener('click', () => {
            const toast = new bootstrap.Toast(toastLiveExample2)

            toast.show()
        })
        }
        function editedTicket(){
            setTimeout(redirectBack,1150);
        }
        
        function redirectBack(){
            window.location.href = "{{url('adminPage')}}";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
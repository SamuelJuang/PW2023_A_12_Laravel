<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman Add Admin</title>
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

        .adminPage {
            color: white;
        }
    </style>
</head>

<body>
   
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
            <p class="text-white fw-bold fs-5" style="margin-left: 10px;">Tambah jadwal Baru</p>
        </div>
    </div>
    <div class="text-white px-2 mx-2">
        <form class="editTiketContainer" action="{{route('storeJadwal')}}" method="POST" id="formSubmit">
            @csrf
            <div class="d-flex">
                <!-- Sori aku bingung banget pake ini, mau pecah palakku liatnya -->
                <div style="margin-left: 15%;">
                    <label class="form-label" for="username">Asal</label>
                    <input required class="form-control text-white" type="text" name="asal" id="asal" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="tujuan" style="padding-top: 10px;">Tujuan</label>
                    <input required class="form-control text-white" type="text" name="tujuan" id="tujuan" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="jumlah_kursi" style="padding-top: 10px;">Jumlah kursi</label>
                    <input required class="form-control text-white" type="number" name="jumlah_kursi" id="jumlah_kursi" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <select name="id_kereta" id="id_kereta" class="form-select mt-5">
                        <option selected value="">Pilih Kereta!</option>
                        @forelse ($kereta as $kereta)
                        <option value="{{$kereta->id}}">{{$kereta->namaKereta}}</option>
                        @endforeach
                    </select>

                </div>
                <div style="margin-left: 20%;">
                    <label class="form-label" for="asal">kelas</label>
                    <input required class="form-control text-white" type="text" name="kelas" id="kelas" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="tujuan" style="padding-top: 10px;">jam Berangkat</label>
                    <input required class="form-control text-white" type="time" name="jam_berangkat" id="jam_berangkat" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="tujuan" style="padding-top: 10px;">jam Tiba</label>
                    <input required class="form-control text-white" type="time" name="jam_tiba" id="jam_tiba" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="tglDept" style="padding-top: 10px;">Tanggal pergi</label>
                    <input required class="form-control text-white" type="date" name="tanggal_pergi" id="tanggal_pergi" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                    <label class="form-label" for="harga" style="padding-top: 10px;">Harga</label>
                    <input required class="form-control text-white" type="text" name="harga" id="harga" style="padding-top: 5px; width: 180%; background-color: transparent; border: 2px solid white; border-radius: 10px">
                </div>
            </div>
            <div class="d-flex flex-row-reverse" style="margin-top: 20px; margin-right: 18%;">
                <button type="submit" class="btn btn-primary px-4 mx-3" id="tambah">
                    Tambah jadwal
                </button>
            </div>
        </form>
    </div>
    
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast align-items-center bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex" style="background-color: green;">
            <div class="toast-body">
                <span>
                    <i class="fa-solid fa-check"></i>
                    Berhasil Menambahkan Jadwal
                </span>
            </div>
            </div>
        </div>
    </div>
    <script>

    const toastTrigger = document.getElementById('formSubmit')
    const toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
    toastTrigger.addEventListener('submit', () => {
        const toast = new bootstrap.Toast(toastLiveExample)

        toast.show()
    })
    }
    function addedTicket(){
        setTimeout(redirectBack,1150);
    }
    
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
        .container-md{
            border: solid 2px black;
        }
        .star:hover{
            opacity: 1;
        }
        p.card-title{
            cursor: pointer;
        }
    </style>
</head>

<body>
    <a href=" {{url('/')}}">
        <div class="vector">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 45 45" fill="none" style="margin-top:32px ; margin-left: 32px;">
                <path d="M45 19.6591V25.3409L10.9091 25.3409L26.5341 40.9659L22.5 45L0 22.5L22.5 0L26.5341 4.03409L10.9091 19.6591L45 19.6591Z" fill="white" />
            </svg>
        </div>
    </a>
    @if (session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
    @endif
    <div class="profile d-flex justify-content-center align-items-center">
        @if(auth()->user()->profilePic != null)
        <img src="{{ asset('images/' . auth()->user()->profilePic)}}" alt="ProfilePic" height="100" width="100" class="rounded-circle border border-light">
        @else
               <a href="{{ url('/profile') }}">
               <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 79 79" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M53.8636 28.7273C53.8636 32.5367 52.3503 36.1902 49.6566 38.8839C46.9629 41.5776 43.3095 43.0909 39.5 43.0909C35.6905 43.0909 32.0371 41.5776 29.3434 38.8839C26.6497 36.1902 25.1364 32.5367 25.1364 28.7273C25.1364 24.9178 26.6497 21.2644 29.3434 18.5706C32.0371 15.8769 35.6905 14.3636 39.5 14.3636C43.3095 14.3636 46.9629 15.8769 49.6566 18.5706C52.3503 21.2644 53.8636 24.9178 53.8636 28.7273ZM46.6818 28.7273C46.6818 30.632 45.9252 32.4587 44.5783 33.8056C43.2315 35.1524 41.4047 35.9091 39.5 35.9091C37.5953 35.9091 35.7685 35.1524 34.4217 33.8056C33.0748 32.4587 32.3182 30.632 32.3182 28.7273C32.3182 26.8225 33.0748 24.9958 34.4217 23.649C35.7685 22.3021 37.5953 21.5455 39.5 21.5455C41.4047 21.5455 43.2315 22.3021 44.5783 23.649C45.9252 24.9958 46.6818 26.8225 46.6818 28.7273Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M39.5 0C17.6852 0 0 17.6852 0 39.5C0 61.3148 17.6852 79 39.5 79C61.3148 79 79 61.3148 79 39.5C79 17.6852 61.3148 0 39.5 0ZM7.18182 39.5C7.18182 47.005 9.74214 53.9139 14.0333 59.4008C17.0469 55.4433 20.9346 52.236 25.3929 50.0297C29.8511 47.8233 34.7591 46.6775 39.7334 46.6818C44.6434 46.6772 49.4896 47.7933 53.9029 49.9452C58.3162 52.097 62.1801 55.2279 65.2001 59.0992C68.3115 55.0185 70.4064 50.2555 71.3115 45.2045C72.2166 40.1534 71.9059 34.9594 70.4051 30.0523C68.9044 25.1451 66.2567 20.6659 62.6811 16.9851C59.1055 13.3044 54.7048 10.528 49.8432 8.88574C44.9816 7.24343 39.7988 6.78241 34.7236 7.54081C29.6484 8.29922 24.8268 10.2552 20.6577 13.2471C16.4885 16.2389 13.0918 20.1804 10.7484 24.7457C8.40505 29.3109 7.18247 34.3685 7.18182 39.5ZM39.5 71.8182C32.081 71.8293 24.886 69.2771 19.1324 64.5933C21.4482 61.2779 24.5307 58.571 28.1175 56.7029C31.7043 54.8348 35.6893 53.8608 39.7334 53.8636C43.7271 53.8604 47.6639 54.8101 51.2169 56.6337C54.7699 58.4574 57.8365 61.1024 60.1621 64.3491C54.3638 69.185 47.0502 71.8288 39.5 71.8182Z" fill="white"/>
                </svg>
              </a>
        @endif
    </div>
    <div class="d-flex align-content-center fadeInAnimated">
        <div class="mx-auto text-white text-center">
            <h1><strong class="fs-4">{{ Auth::user()->username }}</strong></h1>
            <h3 style="font-size: smaller;">{{ Auth::user()->no_telp }}</h3>
        </div>
    </div>
    <div class="row" style="margin-top: 3px;">
       <div class="col-6 d-flex justify-content-center">
        <form action="{{ route('editProfile') }}">
            <button class="btn btn-primary p-2 px-5" style="border-radius: 15px;" type="submit">
                Edit Profile
            </button>
        </form>
       </div>
       <div class="col-6 d-flex justify-content-center">
        <button class="btn btn-danger p-2 px-5" style="border-radius: 15px;" type="submit" onclick="logoutRedirect()">
            Logout
        </button>
    </div>
    </div>
    <div class="mx-auto" style="width: 75%;">
        <hr style="border: 1px solid;">
    </div>
    <div class="container-fluid" style="width: 75%;">
        <div class="text-white">
            <h4><strong class="fs-5" style="padding-top:0%;">Tiket Anda : </strong></h4>
        </div>
    </div>
    <div class="container" style=" width: 75%; height: 30vh; overflow-y: auto; margin-bottom: 5vh;">
        <div class="row">
            @forelse ($tickets as $item)
                    <div class="col-6 my-2">
                        <div class="card radio" style="max-width: 30rem; max-height: 17rem;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between text-primary">
                                    <a class="card-title link-underline-light" href="{{route('showTicket',['id' => $item->id])}}">
                                        <strong>
                                            {{ $item->jadwal->kereta->namaKereta }}
                                        </strong>
                                    </a>
                                    <p class="card-title">
                                       <strong>
                                        IDR {{ number_format($item->jadwal->harga) }}
                                       </strong>
                                    </p>    
                                </div>
                                <div class="d-flex justify-content-between" style="opacity: 100%;">
                                    <p class="card-subtitle text-secondary">
                                        {{ $item->jadwal->kelas }}
                                    </p>
                                    <p class="card-subtitle" style="color: purple;">
                                        <strong>
                                            {{ $item->status }}
                                        </strong>
                                    </p>
                                </div>
                                <br>
                                <div class="d-flex" style="height: fit-content;">
                                    <p class="card-subtitle text-secondary">Rating :                                       
                                
                                    @if($item->rating == null)
                                    <?php
                                        for ($x = 0; $x < 5 ; $x++) {
                                    ?>
                                    <i class="fas fa-star fa-xs star" style="color: gold; opacity: 0.3;"></i>
                                            <?php }
                                    ?>
                                    <a class="text-secondary my-1" href="{{ route('rating', ['id' => $item->jadwal->id_kereta]) }}">
                                        <small style="font-size: smaller;">
                                            berikan rating?
                                        </small>
                                    </a>
                                    @else
                                    <?php
                                        for ($x = 0; $x < $item->rating->rekomendasi ; $x++) {
                                    ?>
                                    <i class="fas fa-star fa-xs star" style="color: gold;"></i>
                                            <?php }
                                    ?>
                                    @endif
                                    </p>
                                </div>
                            <br>
                            <div class="d-flex justify-content-between" style="opacity: 100%;">
                                <p class="card-subtitle text-secondary">
                                   <strong>
                                    {{ $item->jadwal->asal }}
                                   </strong>
                                </p>
                                <p class="card-subtitle text-secondary">
                                    <strong>
                                        {{ $item->jadwal->tujuan }}
                                    </strong>
                                </p>
                            </div>
                            <br>

                            <div class="d-flex justify-content-between py-2" style="opacity: 100%;">
                                <p class="card-subtitle text-primary pt-2">
                                   <strong>
                                    <?php echo substr($item->jadwal->jam_berangkat, 0, 5); ?>
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
                                        <?php echo substr($item->jadwal->jam_tiba, 0, 5); ?>
                                    </strong>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <small class="card-title">
                                    <?php echo substr($item->jadwal->tanggal_pergi, 0, 10); ?>
                                </small>
                            </div>
                            
                            </div>
                        </div>
                    </div>
            @empty
            <div class="col-12 align-items-center mt-3 text-secondary">
                Belum ada ticket! ayo beli ticket dulu!
            </div>
            @endforelse
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <footer class="main-footer text-white px-5">
                <div class="d-none d-sm-inline"></div>
                &copy; 2023 PT.SAF Makmur Jaya, All Rights Reserved.
            </footer>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function ticketDetailRedirect(){
        window.location.href = "{{url('DetailTicket')}}";
    }
    </script>
    <script>
        function logoutRedirect() {
            window.location.href = "{{ route('logout') }}";
        }
    </script>
</body>

</html>
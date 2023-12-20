<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- font inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
            font-family: 'Inter', sans-serif;
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

        .container-md {
            border: solid 2px black;
        }


        .dashed-hr {
            border: none;
            border-top: 1px dashed #252525;
            margin: 12px 0;
        }
    </style>
</head>

<body>
    <a href=" {{url('/profile')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 45 45" fill="none" style="margin-top:32px ; margin-left: 32px;">
            <path d="M45 19.6591V25.3409L10.9091 25.3409L26.5341 40.9659L22.5 45L0 22.5L22.5 0L26.5341 4.03409L10.9091 19.6591L45 19.6591Z" fill="white" />
        </svg>
    </a>
        <div class="card mx-auto" style="width:32%; border-radius: 10px; max-height: 90vh;">
            <div class="card-body">
                <h5 class="card-title fw-bold text-primary fs-3 mb-2">Solo</h5>
               <br>
               
                <div class="d-flex">
                    <h1 style="font-size: 12px;opacity: 0.5;">Stasiun Solo Balapan</h1>
                    <h1 style="font-size: 12px;opacity: 0.5; margin-left: 35%;">Stasiun Tugu Jogja</h1>
                </div>
                <div class="d-flex" style="display: flex; align-items: center;">
                    <p class="text-primary fw-bold" style="font-size: 14px; margin-left:12%;">08:10</p>
                    <div style="width: 10px; height: 10px; background-color: #3498db; border-radius: 50%; margin-left:3%;"></div>
                    <div style="width: 67px; height: 1px; opacity: 0.1;background: #252525;"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-train-freight-front" viewBox="0 0 16 16">
                        <path d="M5.065.158A1.5 1.5 0 0 1 5.736 0h4.528a1.5 1.5 0 0 1 .67.158l3.237 1.618a1.5 1.5 0 0 1 .83 1.342V13.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V3.118a1.5 1.5 0 0 1 .828-1.342L5.065.158ZM2 9.372V13.5A1.5 1.5 0 0 0 3.5 15h4V8h-.853a.5.5 0 0 0-.144.021L2 9.372ZM8.5 15h4a1.5 1.5 0 0 0 1.5-1.5V9.372l-4.503-1.35A.5.5 0 0 0 9.353 8H8.5v7ZM14 8.328v-5.21a.5.5 0 0 0-.276-.447l-3.236-1.618A.5.5 0 0 0 10.264 1H5.736a.5.5 0 0 0-.223.053L2.277 2.67A.5.5 0 0 0 2 3.118v5.21l1-.3V5a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3.028l1 .3Zm-2-.6V5H8.5v2h.853a1.5 1.5 0 0 1 .431.063L12 7.728ZM7.5 7V5H4v2.728l2.216-.665A1.5 1.5 0 0 1 6.646 7H7.5Zm-1-5a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm-3 8a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1Zm9 0a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1ZM5 13a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm7 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" />
                    </svg>
                    <div style="width: 67px; height: 1px; opacity: 0.1;background: #252525;"></div>
                    <div style="width: 10px; height: 10px; background-color: #3498db; border-radius: 50%; "></div>
                    <p class="text-primary fw-bold" style="font-size: 14px; margin-left:3%;">08:45</p>
                </div>
                <br>
                <div>
                    <hr class="dashed-hr mb-2" style="color: #252525; opacity: 0.3;">
                </div>
               
                <div class="d-flex">
                    <h1 style="opacity: 0.4; font-size: 10px;">Name</h1>
                    <h1 style="opacity: 0.4; font-size: 10px; margin-left:70%">Ticket Number</h1>
                </div>
                <div class="d-flex mb-2" style="margin-top: -8px;">
                    <h1 class="fw-bold" style="font-size: 12px;">Agatha</h1>
                    <h1 class="fw-bold" style="font-size: 12px; margin-left:73%">VG1231</h1>
                </div>
                <div class="d-flex">
                    <h1 style="opacity: 0.4; font-size: 10px;">Passanger</h1>
                    <h1 style="opacity: 0.4; font-size: 10px; margin-left:76%">Seat</h1>
                </div>
                <div class="d-flex mb-2" style="margin-top: -8px;">
                    <h1 class="fw-bold" style="font-size: 12px;">1 Adult, 2 Infant</h1>
                    <h1 class="fw-bold" style="font-size: 12px; margin-left:65%">12-f</h1>
                </div>
                <div class="d-flex">
                    <h1 style="opacity: 0.4; font-size: 10px;">Class</h1>
                    <h1 style="opacity: 0.4; font-size: 10px; margin-left:77%">Baggage</h1>
                </div>
                <div class="d-flex mb-2" style="margin-top: -8px;">
                    <h1 class="fw-bold" style="font-size: 12px;">Economy - A</h1>
                    <h1 class="fw-bold" style="font-size: 12px; margin-left:69%">5 kg</h1>
                </div>
                <br>
                
                <div>
                    <hr class="dashed-hr mb-2" style="color: #252525; opacity: 0.3;">
                </div>
                <div class="d-flex mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="70" viewBox="0 0 90 79" fill="none">
                        <rect x="0.302734" y="0.790039" width="6.62791" height="77.8779" fill="black" />
                        <rect x="10.2441" y="0.790039" width="1.65698" height="77.8779" fill="black" />
                        <rect x="51.668" y="0.790039" width="6.62791" height="77.8779" fill="black" />
                        <rect x="61.6094" y="0.790039" width="1.65698" height="77.8779" fill="black" />
                        <rect x="26.8145" y="0.790039" width="11.5988" height="77.8779" fill="black" />
                        <rect x="78.1797" y="0.790039" width="11.5988" height="77.8779" fill="black" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="70" viewBox="0 0 90 79" fill="none">
                        <rect x="0.302734" y="0.790039" width="6.62791" height="77.8779" fill="black" />
                        <rect x="10.2441" y="0.790039" width="1.65698" height="77.8779" fill="black" />
                        <rect x="51.668" y="0.790039" width="6.62791" height="77.8779" fill="black" />
                        <rect x="61.6094" y="0.790039" width="1.65698" height="77.8779" fill="black" />
                        <rect x="26.8145" y="0.790039" width="11.5988" height="77.8779" fill="black" />
                        <rect x="78.1797" y="0.790039" width="11.5988" height="77.8779" fill="black" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="70" viewBox="0 0 90 79" fill="none">
                        <rect x="0.302734" y="0.790039" width="6.62791" height="77.8779" fill="black" />
                        <rect x="10.2441" y="0.790039" width="1.65698" height="77.8779" fill="black" />
                        <rect x="51.668" y="0.790039" width="6.62791" height="77.8779" fill="black" />
                        <rect x="61.6094" y="0.790039" width="1.65698" height="77.8779" fill="black" />
                        <rect x="26.8145" y="0.790039" width="11.5988" height="77.8779" fill="black" />
                        <rect x="78.1797" y="0.790039" width="11.5988" height="77.8779" fill="black" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="70" viewBox="0 0 90 79" fill="none">
                        <rect x="0.302734" y="0.790039" width="6.62791" height="77.8779" fill="black" />
                        <rect x="10.2441" y="0.790039" width="1.65698" height="77.8779" fill="black" />
                        <rect x="51.668" y="0.790039" width="6.62791" height="77.8779" fill="black" />
                        <rect x="61.6094" y="0.790039" width="1.65698" height="77.8779" fill="black" />
                        <rect x="26.8145" y="0.790039" width="11.5988" height="77.8779" fill="black" />
                        <rect x="78.1797" y="0.790039" width="11.5988" height="77.8779" fill="black" />
                    </svg>
                </div>
                <div>
                    <p style="font-size: 10px; margin-left:35%; margin-bottom: 0px;">0 A 8 7 5 W 7 8 G 7 9</p>
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-sm-3">
                <footer class="main-footer text-white px-5">
                    <div class="float-right d-none d-sm-inline"></div>
                    &copy; 2023 PT.SAF Makmur Jaya, All Rights Reserved.
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
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
                <div class="d-flex">
                    <h6 class="card-subtitle mb-2" style="font-size: 12px;">Stasiun Solo Balapan</h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="9 " viewBox="0 0 18 17" fill="none" style="margin-left: 10px;">
                        <path d="M1.125 9.71342L14.4675 9.71342L10.3837 15.0072C10.1928 15.2552 10.1009 15.5749 10.1284 15.8959C10.1558 16.217 10.3003 16.5131 10.53 16.7192C10.7597 16.9253 11.0559 17.0245 11.3534 16.9949C11.6509 16.9653 11.9253 16.8093 12.1163 16.5614L17.7413 9.27632C17.7791 9.21837 17.8129 9.1575 17.8425 9.09419C17.8425 9.03348 17.8425 8.99705 17.9213 8.93635C17.9722 8.79713 17.9989 8.64894 18 8.49924C17.9989 8.34955 17.9722 8.20135 17.9213 8.06214C17.9213 8.00143 17.9213 7.965 17.8425 7.9043C17.8129 7.84099 17.7791 7.78011 17.7413 7.72217L12.1163 0.437108C12.0105 0.300048 11.878 0.189826 11.7283 0.114278C11.5786 0.038732 11.4153 -0.000284785 11.25 5.11725e-06C10.9871 -0.000549945 10.7324 0.0982545 10.53 0.279264C10.4161 0.381194 10.3219 0.506377 10.2529 0.647643C10.1839 0.788909 10.1414 0.943481 10.1278 1.10251C10.1142 1.26154 10.1298 1.4219 10.1737 1.5744C10.2177 1.72691 10.289 1.86856 10.3837 1.99125L14.4675 7.28507L1.125 7.28506C0.82663 7.28506 0.540482 7.41299 0.329503 7.64069C0.118525 7.86839 -1.15477e-06 8.17722 -1.18224e-06 8.49924C-1.20971e-06 8.82126 0.118525 9.13009 0.329503 9.35779C0.540482 9.5855 0.82663 9.71342 1.125 9.71342Z" fill="#252525" />
                    </svg>
                    <h6 class="card-subtitle mb-3" style="font-size: 12px; margin-left: 10px"> Stasiun Tuju Joga</h6>
                </div>
                <div>
                    <p class="card-text mb-3" style="font-size: 10px; color:black; opacity: 0.3;">Thu, 13 Sep 2023</p>
                    <h1 class="mb-4" style="font-size: 12px;opacity: 0.5;">Nama Kereta : SAF-JAYA</h1>
                </div>
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
                <div>
                    <hr class="dashed-hr mb-2" style="color: #252525; opacity: 0.3;">
                </div>
                <div>
                    <p style="margin-left: 39%; font-size: 8px; opacity: 0.5;">duration 35 minutes</p>
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
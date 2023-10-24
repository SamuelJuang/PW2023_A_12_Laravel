<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Reviews</title>
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
    </style>
</head>

<body>
    <div class="container mx-5">
        <div class="d-flex align-content-between">
            <div class="container-fluid">
                <h3 class="text-white mt-4"><strong>Halaman Admin</strong></h3>
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
    <div class="d-flex justify-content-evenly">
        <button class="btn btn-primary px-5 py-2">
            Kelola Data pengguna
        </button>

        <button class="btn btn-primary px-5 py-2">
            Kelola Data Ticket
        </button>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <footer class="main-footer text-white px-5">
                <div class="d-none d-sm-inline"></div>
                &copy; 2023 PT.SAF Makmur Jaya, All Rights Reserved.
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
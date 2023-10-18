<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>SAF Kereta Api Online</title>
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        />
    <style>
        body{
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
            clear:both;
            display:block;
            width: 100%;               
            background-color:#ffffff;
            height: 3px;
            opacity: 100%;
        }
        footer {
            font-size: small;
            position:fixed;
            left:0px;
            bottom:0px;
            height:30px;
            width:100%;
            opacity: 0.5;
        }
        .card{
            font-family: Helvetica,sans-serif;
            font-stretch: expanded;
        }
    </style>
</head>
<body>
    <div class="mainInfo px-5">
        <nav class="navbar py-3 px-3 topdownAnimated" aria-label="First navbar example">    
            <img src="{{asset('images/SAF Logo.svg')}}" alt="" class="navbar-brand" style="height: 7vh;">
          <div class="d-flex justify-content-end px-3 py-2">
            <form action="{{ url('/login') }}">
                <button class="btn btn-outline-light px-5 mx-3">
                    login
                </button>
              </form>
              <form action="{{ url('/register') }}">
                <button class="btn btn-primary  px-5" type="submit">
                    register
                </button>
              </form>
            </div>
        </nav>
    </div>

    
    <div class="container">@yield('content')</div>


    <footer class="main-footer text-white px-5">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline"></div>
        <!-- Default to the left -->
        &copy; 2023 PT.SAF Makmur Jaya, All Rights Reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
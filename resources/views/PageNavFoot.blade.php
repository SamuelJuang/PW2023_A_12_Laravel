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
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
            font-family: 'Poppins';
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
        .navbar-brand:hover{
            animation: enlarge 1s ease-in-out;
        }

    </style>
</head>
<body>
    <div class="mainInfo px-5">
        <nav class="navbar py-3 px-3 topdownAnimated" aria-label="First navbar example">    
        <img src="{{asset('images/SAF Logo.svg')}}" alt="SAF logo"class="navbar-brand" style="height: 7vh;">
          <div class="d-flex justify-content-end px-3 py-2">
            @if (session()->has('user'))
              <a href="{{ url('/profile') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 79 79" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M53.8636 28.7273C53.8636 32.5367 52.3503 36.1902 49.6566 38.8839C46.9629 41.5776 43.3095 43.0909 39.5 43.0909C35.6905 43.0909 32.0371 41.5776 29.3434 38.8839C26.6497 36.1902 25.1364 32.5367 25.1364 28.7273C25.1364 24.9178 26.6497 21.2644 29.3434 18.5706C32.0371 15.8769 35.6905 14.3636 39.5 14.3636C43.3095 14.3636 46.9629 15.8769 49.6566 18.5706C52.3503 21.2644 53.8636 24.9178 53.8636 28.7273ZM46.6818 28.7273C46.6818 30.632 45.9252 32.4587 44.5783 33.8056C43.2315 35.1524 41.4047 35.9091 39.5 35.9091C37.5953 35.9091 35.7685 35.1524 34.4217 33.8056C33.0748 32.4587 32.3182 30.632 32.3182 28.7273C32.3182 26.8225 33.0748 24.9958 34.4217 23.649C35.7685 22.3021 37.5953 21.5455 39.5 21.5455C41.4047 21.5455 43.2315 22.3021 44.5783 23.649C45.9252 24.9958 46.6818 26.8225 46.6818 28.7273Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M39.5 0C17.6852 0 0 17.6852 0 39.5C0 61.3148 17.6852 79 39.5 79C61.3148 79 79 61.3148 79 39.5C79 17.6852 61.3148 0 39.5 0ZM7.18182 39.5C7.18182 47.005 9.74214 53.9139 14.0333 59.4008C17.0469 55.4433 20.9346 52.236 25.3929 50.0297C29.8511 47.8233 34.7591 46.6775 39.7334 46.6818C44.6434 46.6772 49.4896 47.7933 53.9029 49.9452C58.3162 52.097 62.1801 55.2279 65.2001 59.0992C68.3115 55.0185 70.4064 50.2555 71.3115 45.2045C72.2166 40.1534 71.9059 34.9594 70.4051 30.0523C68.9044 25.1451 66.2567 20.6659 62.6811 16.9851C59.1055 13.3044 54.7048 10.528 49.8432 8.88574C44.9816 7.24343 39.7988 6.78241 34.7236 7.54081C29.6484 8.29922 24.8268 10.2552 20.6577 13.2471C16.4885 16.2389 13.0918 20.1804 10.7484 24.7457C8.40505 29.3109 7.18247 34.3685 7.18182 39.5ZM39.5 71.8182C32.081 71.8293 24.886 69.2771 19.1324 64.5933C21.4482 61.2779 24.5307 58.571 28.1175 56.7029C31.7043 54.8348 35.6893 53.8608 39.7334 53.8636C43.7271 53.8604 47.6639 54.8101 51.2169 56.6337C54.7699 58.4574 57.8365 61.1024 60.1621 64.3491C54.3638 69.185 47.0502 71.8288 39.5 71.8182Z" fill="white"/>
                </svg>
              </a>
            @else 
            <form action="{{ url('/login') }}">
                <button class="btn btn-outline-light px-5 mx-3">
                    Login
                </button>
              </form>
              <form action="{{ url('/register') }}">
                <button class="btn btn-primary  px-5" type="submit">
                    Register
                </button>
              </form>
            @endif  
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
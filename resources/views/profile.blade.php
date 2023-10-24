<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Profile</title>
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
    <a href=" {{url('/')}}">
        <div class="vector">
            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 45 45" fill="none" style="margin-top:32px ; margin-left: 32px;">
                <path d="M45 19.6591V25.3409L10.9091 25.3409L26.5341 40.9659L22.5 45L0 22.5L22.5 0L26.5341 4.03409L10.9091 19.6591L45 19.6591Z" fill="white" />
            </svg>
        </div>
    </a>
    <div class="profile d-flex justify-content-center align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 216 216" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M147.273 78.5455C147.273 88.9612 143.135 98.9504 135.77 106.315C128.405 113.681 118.416 117.818 108 117.818C97.5842 117.818 87.5951 113.681 80.23 106.315C72.8649 98.9504 68.7273 88.9612 68.7273 78.5455C68.7273 68.1297 72.8649 58.1405 80.23 50.7754C87.5951 43.4104 97.5842 39.2727 108 39.2727C118.416 39.2727 128.405 43.4104 135.77 50.7754C143.135 58.1405 147.273 68.1297 147.273 78.5455ZM127.636 78.5455C127.636 83.7533 125.568 88.7479 121.885 92.4305C118.202 96.113 113.208 98.1818 108 98.1818C102.792 98.1818 97.7975 96.113 94.115 92.4305C90.4325 88.7479 88.3636 83.7533 88.3636 78.5455C88.3636 73.3376 90.4325 68.343 94.115 64.6604C97.7975 60.9779 102.792 58.9091 108 58.9091C113.208 58.9091 118.202 60.9779 121.885 64.6604C125.568 68.343 127.636 73.3376 127.636 78.5455Z" fill="white" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M108 0C48.3545 0 0 48.3545 0 108C0 167.645 48.3545 216 108 216C167.645 216 216 167.645 216 108C216 48.3545 167.645 0 108 0ZM19.6364 108C19.6364 128.52 26.6367 147.41 38.3695 162.412C46.6092 151.592 57.239 142.823 69.4286 136.79C81.6182 130.757 95.0375 127.625 108.638 127.636C122.063 127.624 135.313 130.675 147.38 136.559C159.447 142.443 170.011 151.003 178.269 161.588C186.776 150.43 192.503 137.408 194.978 123.597C197.453 109.787 196.604 95.5853 192.5 82.1682C188.397 68.7512 181.157 56.5041 171.381 46.4404C161.605 36.3766 149.573 28.7855 136.28 24.2952C122.988 19.8048 108.817 18.5443 94.9404 20.6179C81.064 22.6915 67.8809 28.0397 56.4817 36.2198C45.0826 44.3999 35.7952 55.1769 29.3881 67.659C22.9809 80.1411 19.6381 93.9695 19.6364 108ZM108 196.364C87.7151 196.394 68.0426 189.416 52.3113 176.609C58.6433 167.545 67.0713 160.144 76.8783 155.036C86.6852 149.928 97.5808 147.265 108.638 147.273C119.558 147.264 130.322 149.861 140.036 154.847C149.751 159.833 158.135 167.065 164.494 175.942C148.64 189.164 128.644 196.393 108 196.364Z" fill="white" />
        </svg>
    </div>
    <div class="d-flex align-content-center fadeInAnimated">
        <div class="mx-auto text-white text-center">
            <h1><strong class="fs-4">{{session('user')}}</strong></h1>
            <h3 style="font-size: smaller;">+621234567890</h3>
        </div>
    </div>
    <div class="row container-fluid" style="margin-left: 39%; margin-top: 3px;">
        <form action="{{ url('/logout') }}">
            <button class="btn btn-danger ms-auto" style="width: 20%; border-radius: 15px;" type="submit">
                Logout
            </button> <a href="/adminPage">awikwok</a>
        </form>
    </div>
    <div class="mx-auto" style="width: 75%;">
        <hr style="border: 1px solid;">
    </div>
    <div class="container-fluid" style="width: 75%;">
        <div class="text-white">
            <h2><strong class="fs-5" style="padding-top:0%;">Tiket Anda : </strong></h2>
        </div>
    </div>
    <div class="container" style=" width: 75%; height: 37vh; overflow-y: auto; margin-bottom: 5vh;">
        <div class="row">
            @forelse ($ticket as $item)
                    <div class="col-6 my-2">
                        <div class="card radio" style="max-width: 30rem; max-height: 17rem;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between text-primary">
                                    <p class="card-title" onclick="ticketDetailRedirect()">
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
                                    <p class="card-subtitle" style="color: purple;">
                                        <strong>
                                            {{ $item['status'] }}
                                        </strong>
                                    </p>
                                </div>
                                <br>
                                <div class="d-flex" style="height: fit-content;">
                                    <p class="card-subtitle text-secondary">Rating :                                       
                                
                                    @if($item['rating'] == 0)
                                    <?php
                                        for ($x = 0; $x < 5 ; $x++) {
                                    ?>
                                    <i class="fas fa-star fa-xs star" style="color: gold; opacity: 0.3;"></i>
                                            <?php }
                                    ?>
                                    <a class="text-secondary my-1">
                                        <small style="font-size: smaller;">
                                            berikan rating?
                                        </small>
                                    </a>
                                    @else
                                    <?php
                                        for ($x = 0; $x < $item['rating'] ; $x++) {
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
                    </div>
            @endforeach
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
</body>

</html>
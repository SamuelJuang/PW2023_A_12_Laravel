<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- import fontAwesome -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
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
        .rating input[type="radio"] {
            display: none;
        }

        .rating input[type="radio"] + label i::before {
        cursor: pointer;
        }

        .rating input[type="radio"]:checked + label i.red::before,
        .rating input[type="radio"]:checked + label i ~ i.red::before {
            color: red; 
        }

        .rating input[type="radio"]:checked + label i.orange::before,
        .rating input[type="radio"]:checked + label i ~ i.orange::before {
            color: orange; 
        }

        .rating input[type="radio"]:checked + label i.yellow::before,
        .rating input[type="radio"]:checked + label i ~ i.yellow::before {
            color: yellow; 
        }

        .rating input[type="radio"]:checked + label i.green::before,
        .rating input[type="radio"]:checked + label i ~ i.green::before {
            color: green; 
        }

        .rating input[type="radio"]:checked + label i.blue::before,
        .rating input[type="radio"]:checked + label i ~ i.blue::before {
            color: blue; 
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
    <!-- main part of body -->
    <div class="d-flex justify-content-center align-items-center flex-column">
        <div class="text-white">
            <p style="font-size: 56px;" class="text-center"><strong>SAF JAYA</strong></p>
            <div class="rating">
                <input type="radio" name="star" id="star1"/>
                <label for="star1"><i class="fas fa-star fa-2x red" style="color: grey;"></i></label>
                <input type="radio" name="star" id="star2"/>
                <label for="star2"><i class="fas fa-star fa-2x orange" style="color: grey;"></i></label>
                <input type="radio" name="star" id="star3"/>
                <label for="star3"><i class="fas fa-star fa-2x yellow" style="color: grey;"></i></label>
                <input type="radio" name="star" id="star4"/>
                <label for="star4"><i class="fas fa-star fa-2x green" style="color: grey;"></i></label>
                <input type="radio" name="star" id="star5"/>
                <label for="star5"><i class="fas fa-star fa-2x blue" style="color: grey;"></i></label>
            </div>
        </div>
        <div class="comments my-4" style="width: 40%;">
            <p class="text-white float-start">Comment : </p>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" style="width: 100%;" placeholder="Deskripsikan pengalaman Anda!"></textarea>
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
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
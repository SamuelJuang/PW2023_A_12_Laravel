<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Lottie Player -->
        <script
            src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
            type="module"
        ></script>
        <!-- JQuery -->
        <script
            src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"
            type="text/javascript"
        ></script>
        <!-- Animations -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <title>Edit Profile</title>
        <link rel="stylesheet" href="{{ asset('css/animations.css') }}" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        />
        <style>
            body {
                overflow: hidden;
                background-image: "{{asset('images/tempTrainStation.jpg')}}";
                height: 100vh;
                background-size: cover;
                background-image: url("https://images.unsplash.com/photo-1495313196544-7d1adf4e628f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80");
                background-color: rgba(0, 0, 0, 0.65);
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

            .profile {
                transition: all 0.5s ease-in-out;
            }

            @keyframes enlargeAndFade {
                0% {
                    transform: scale(1);
                    opacity: 1;
                }

                100% {
                    transform: scale(1.1);
                    opacity: 0.5;
                }
            }

            .profile:hover {
                animation: enlargeAndFade 1s forwards;
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
        <a href=" {{ url('/profile') }}">
            <div class="vector mx-5">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="23"
                    height="23"
                    viewBox="0 0 45 45"
                    fill="none"
                    style="margin-top: 32px; margin-left: 10px"
                >
                    <path
                        d="M45 19.6591V25.3409L10.9091 25.3409L26.5341 40.9659L22.5 45L0 22.5L22.5 0L26.5341 4.03409L10.9091 19.6591L45 19.6591Z"
                        fill="white"
                    />
                </svg>
            </div>
        </a>
        <div class="container">
            <div>
                <p
                    class="text-white fw-bold fs-5 mb-5"
                    style="margin-left: 10px"
                >
                    Silahkan Tekan Submit jika anda yakin dengan perubahan anda!
                </p>
            </div>
        </div>
        <div class="text-white px-2 mx-5 mb-5">
            <br />
            <form
                class="editTiketContainer"
                action="{{ route('updateprofile', ['id' => Auth()->user()->id]) }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="d-flex">
                    <div style="margin-left: 15%">
                        <label class="form-label opacity-50" for="username"
                            >Username</label
                        >
                        <input
                            class="form-control text-white"
                            value="{{auth()->user()->username}}"
                            type="text"
                            name="username"
                            id="username"
                            style="
                                padding-top: 5px;
                                width: 180%;
                                background-color: transparent;
                                border: 2px solid white;
                                border-radius: 10px;
                            "
                            required
                        />
                        <label
                            class="form-label"
                            for="email"
                            style="padding-top: 10px"
                            >Email</label
                        >
                        <input
                            class="form-control text-white opacity-50"
                            disabled
                            value="{{auth()->user()->email}}"
                            type="email"
                            name="email"
                            id="email"
                            style="
                                padding-top: 5px;
                                width: 180%;
                                background-color: transparent;
                                border: 2px solid white;
                                border-radius: 10px;
                            "
                            required
                        />
                    </div>
                    <div style="margin-left: 20%">
                        <label class="form-label" for="noTelp"
                            >Nomor Telepon</label
                        >
                        <input
                            class="form-control text-white"
                            required
                            value="{{auth()->user()->no_telp}}"
                            type="text"
                            name="no_telp"
                            id="no_telp"
                            style="
                                padding-top: 5px;
                                width: 100%;
                                background-color: transparent;
                                border: 2px solid white;
                                border-radius: 10px;
                            "
                            required
                        />
                        <br />
                        <label class="form-label" for="noTelp"
                            >Gambar Profile Picture</label
                        >

                        <input
                            type="file"
                            class="form-control"
                            name="profilePic"
                            placeholder="Masukkan gambar untuk profile picture anda"
                            accept=".jpg,.jpeg,.png"
                        />
                    </div>
                </div>
                <div
                    class="d-flex flex-row-reverse"
                    style="margin-top: 20px; margin-right: 18%"
                >
                    <button
                        type="submit"
                        class="btn btn-primary px-4 mx-3"
                        id="edit"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </div>

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div
                id="liveToast1"
                class="toast align-items-center text-white"
                role="alert"
                aria-live="assertive"
                aria-atomic="true"
            >
                <div class="d-flex" style="background-color: blue">
                    <div class="toast-body">
                        <span>
                            <i class="fa-solid fa-check"></i>
                            Berhasil Mengedit Profile
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const toastTrigger = document.getElementById("edit");
            const toastLiveExample = document.getElementById("liveToast1");
            if (toastTrigger) {
                toastTrigger.addEventListener("click", () => {
                    const toast = new bootstrap.Toast(toastLiveExample);

                    toast.show();
                });
            }

            function redirectBack() {
                window.location.href = "{{url('/profile')}}";
            }
        </script>
        <div class="row g-2">
            <div class="col-sm-3">
                <footer class="main-footer text-white px-5">
                    <div class="float-right d-none d-sm-inline"></div>
                    &copy; 2023 PT.SAF Makmur Jaya, All Rights Reserved.
                </footer>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

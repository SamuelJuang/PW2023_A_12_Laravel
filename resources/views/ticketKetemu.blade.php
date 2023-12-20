@extends('PageNavFoot')

@section('content')
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<!-- Lottie Player -->
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
<!-- JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Animations -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    body{
        font-family: 'Poppins';
    }
    .paymethodContainer input[type ="radio"]{
        display: none;
        position: absolute;
        top: 0;
        left: 0;
    }
    .ticketSelectionContainer input[type ="radio"]{
        display: none;
        position: absolute;
        top: 0;
        left: 0;
    }

    .paymethodContainer label {
    display: inline-block;
    padding: 10px 20px;
    border: solid 1px black;
    color: #0275d8;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.2s;
    }
    
    .paymethodContainer input[type="radio"]:checked + label,
    .paymethodContainer input[type="radio"]:hover + label {
        background-color: #0275d8 !important;
        color: white;
        border-color: white;
    }

    .ticketSelectionContainer input[type ="radio"]:checked + label,
    .ticketSelectionContainer input[type ="radio"]:hover + label
    {
        animation: Border 1s infinite alternate;
    }

    .paymethodContainer input[type="radio"]:checked + label{
        animation: Border 1s infinite alternate;
    }
    
    body{
        background-color: rgba(0, 0, 0, 0.6);
        background-blend-mode: darken;
    }
    .transform {
    -webkit-transition: all 2s ease;  
    -moz-transition: all 2s ease;  
    -o-transition: all 2s ease;  
    -ms-transition: all 2s ease;  
    transition: all 2s ease;
    }

    .mystyle{
        transition: all 0.2s;
        animation: Border 1s infinite alternate;
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

    /* Success Video CSS */
    #darkenScreen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: none; 
        /* sembunyiin dulu penggelapannya */
    }

    #videoContainer {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none; 
        /* ini juga di sembunyiin dulu */
    }
    .card-title{
        cursor: pointer;
    }
</style>
<div class="container">
    <form id="selectTicket">
   <div class="container" style="width: 100%; height: 70vh; overflow-y: auto; margin-bottom: 5vh;">
        <div class="row">
            <!-- Tickets -->
            @forelse ($jadwal as $item)
                    <div class="col-md-12 col-lg-6 my-2 ticketSelectionContainer">
                        <input type="radio" name="ticketSelection" id="{{ $item->id }}" value="{{ $item->id }}">
                        <label for="{{ $item->id }}" style="border-radius:7px;">
                            <div class="card " style="width: 30rem; height: 17rem;" id="{{ $item['id'] }}" onclick="checkTickets()">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between text-primary">
                                        <a class="card-title link-underline-light" href="{{ route('reviews.byKereta', ['idKereta' => $item->id_kereta]) }}">
                                            <strong>    
                                                {{ $item->kereta->namaKereta }}
                                            </strong>
                                        </a>
                                        <p class="card-title hargaTicket">
                                        <strong>
                                            IDR {{ number_format($item->harga) }}
                                        </strong>
                                        </p>    
                                    </div>
                                    <div class="d-flex justify-content-between" style="opacity: 100%;">
                                        <p class="card-subtitle text-secondary">
                                            {{ $item->kelas }}
                                        </p>
                                        <p class="card-subtitle text-success">
                                            <strong>
                                                Available
                                            </strong>
                                        </p>
                                    </div>
                                    <br> <p class="card-subtitle text-secondary">Rating :
                                   @if($item->averageRating != null)
                                   <?php
                                   for ($x = 0; $x <  $item->averageRating ; $x++) {
                                    ?>
                                    <i class="fas fa-star fa-xs" style="color: gold;"></i>
                                            <?php }
                                    ?>
                                    @else
                                    Belum ada penilaian!
                                    @endif
                                </p>
                                <br>
                                <div class="d-flex justify-content-between" style="opacity: 100%;">
                                    <p class="card-subtitle text-secondary">
                                    <strong>
                                        {{ $item->asal }}
                                    </strong>
                                    </p>
                                    <p class="card-subtitle text-secondary">
                                        <strong>
                                            {{ $item->tujuan }}
                                        </strong>
                                    </p>
                                </div>
                                <br>

                                <div class="d-flex justify-content-between py-2" style="opacity: 100%;">
                                    <p class="card-subtitle text-primary pt-2">
                                    <strong>
                                        <?php echo substr($item->jam_berangkat, 0, 5); ?>
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
                                            <?php echo substr($item->jam_tiba, 0, 5); ?>
                                        </strong>
                                    </p>
                                </div>
                               
                                </div>
                            </div>
                        </label>
                    </div>
            @empty
                    <div class="text-white align-content-center">
                        <p><strong><big>Tidak ada jadwal yang tersedia!</big></strong></p>
                    </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex flex-row-reverse">
        <button type="submit" class="btn btn-primary px-5 mx-3" disabled data-bs-toggle = "modal" data-bs-target = "#exampleModal" id="bayar">
            Bayar Tiket 
        </button>
    </div>
</form>
</div>


<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-height: 500px;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="exampleModalLabel"><strong>Pembayaran</strong></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-between flex-column">
            <p><strong></strong></p>
            <div class="row">
                <div class="col-6">
                    <p id="ticketInfo"> Ticket - Kelas </p>
                    <strong>Total Pembayaran </strong>
                </div>
                <div class="col-6 mb-3">
                    <p id="payment"></p>
                </div>
                <br>
                <hr>
                <div class="col-12 text-primary mb-4">
                    <strong>Metode Pembayaran</strong>
                </div>
                <div class="col-6">
                    <div class="container rounded p-1 paymethodContainer" style="width: fit-content;">
                        <input type="radio" id="BCA" name="paymethod" value="BCA">
                            <label for="BCA" onclick="checkPayments()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="30" viewBox="0 0 105 75" fill="none">
                                <rect width="105" height="75" rx="4" fill="#0060AF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5967 44.6871C21.5967 43.6805 21.6082 40.9901 21.5819 40.6586C21.6049 36.6551 18.517 33.8309 16.5662 34.0511C15.2163 34.1615 14.0847 34.6804 13.4775 36.1731C12.9143 37.5642 13.4179 39.4145 15.2897 39.8487C17.291 40.315 18.46 40.703 19.3058 41.2503C20.3422 41.9203 21.1882 43.2006 21.2107 44.6887" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7574 44.6881C20.764 43.3978 20 42.2569 19.0015 41.6438C18.1159 41.1019 16.9268 40.7461 15.0086 40.2873C14.4157 40.1443 13.7955 39.8267 13.6035 39.4219C13.0955 39.9043 13.0033 40.989 13.0926 41.6231C13.1965 42.3564 14.1058 43.5654 15.475 43.6128C16.3112 43.6444 17.3684 43.4431 17.8753 43.3416C18.7499 43.1635 20.1336 43.6799 20.3538 44.6865" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3024 27.8115C19.9806 27.8115 17.9754 29.2548 17.9824 31.7522C17.9897 33.8523 19.7813 34.9766 20.4209 35.7796C21.387 36.9897 21.9099 38.422 21.964 40.6137C22.0065 42.3579 22.0043 44.0803 22.0137 44.6907H22.526C22.5173 44.0521 22.4941 42.2236 22.5205 40.5597C22.5552 38.3674 23.097 36.9897 24.0636 35.7796C24.7087 34.9766 26.4986 33.8523 26.5025 31.7522C26.5114 29.2548 24.507 27.8115 22.1876 27.8115" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.8934 44.6871C22.8934 43.6805 22.8814 40.9901 22.9072 40.6586C22.8845 36.6551 25.9705 33.8309 27.923 34.0511C29.2729 34.1615 30.403 34.6804 31.0121 36.1731C31.5746 37.5642 31.0684 39.4145 29.1989 39.8487C27.1962 40.315 26.0289 40.703 25.1809 41.2503C24.1458 41.9203 23.3589 43.2006 23.3347 44.6887" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.7266 44.6881C23.7194 43.3978 24.4831 42.2569 25.4786 41.6438C26.3682 41.1019 27.5584 40.7461 29.4749 40.2873C30.0691 40.1443 30.6886 39.8267 30.8772 39.4219C31.3876 39.9043 31.4798 40.989 31.3902 41.6231C31.2844 42.3564 30.3773 43.5654 29.0105 43.6128C28.1748 43.6444 27.1118 43.4431 26.607 43.3416C25.7359 43.1635 24.3483 43.6799 24.1271 44.6865" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4433 48.8532L24.1465 46.8097L24.8636 46.7073C25.038 46.685 25.2505 46.7137 25.3355 46.8166C25.4295 46.9243 25.4582 47.0133 25.4763 47.1545C25.5036 47.3293 25.45 47.531 25.2413 47.6317V47.6378C25.4741 47.6378 25.615 47.7956 25.656 48.062C25.6618 48.1184 25.6797 48.2541 25.6618 48.3675C25.6145 48.6373 25.444 48.7243 25.1556 48.7623L24.4433 48.8532ZM24.9062 48.4871C24.9912 48.4755 25.0774 48.4711 25.1448 48.4306C25.2482 48.3671 25.2388 48.2314 25.2243 48.1303C25.1885 47.9088 25.1272 47.8243 24.8777 47.8591L24.7207 47.8819L24.8202 48.4982L24.9062 48.4871ZM24.7552 47.5443C24.8501 47.53 24.9786 47.519 25.0322 47.4341C25.0605 47.3774 25.0962 47.3323 25.0725 47.2062C25.0433 47.0568 24.9909 46.964 24.7892 46.9999L24.6016 47.0284L24.6757 47.552L24.7552 47.5443Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5489 47.6248C27.5544 47.6628 27.5609 47.7052 27.5634 47.7432C27.6213 48.1157 27.5489 48.4244 27.1045 48.5093C26.4473 48.6284 26.3214 48.2439 26.206 47.7052L26.1444 47.4135C26.0538 46.8983 26.0149 46.508 26.6555 46.3876C27.0165 46.3257 27.2552 46.4611 27.3544 46.7999C27.3699 46.8505 27.3892 46.9003 27.3965 46.9513L27.0035 47.0278C26.9581 46.9003 26.8979 46.6729 26.7212 46.692C26.4038 46.7282 26.5086 47.1002 26.5412 47.256L26.6593 47.8154C26.6948 47.9845 26.7654 48.2548 27.04 48.2026C27.2629 48.1605 27.1656 47.8331 27.1458 47.6988" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.1807 48.2441L28.0449 46.1294L28.5727 45.9775L29.6796 47.8167L29.2639 47.934L29.0016 47.4666L28.54 47.5972L28.5997 48.1286L28.1807 48.2441ZM28.5 47.2553L28.8336 47.1642L28.3906 46.3086L28.5 47.2553Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1424 46.6441C15.3076 46.1458 15.4554 45.7785 16.0861 45.9415C16.4235 46.0305 16.6326 46.1706 16.6227 46.5401C16.621 46.6223 16.5923 46.7063 16.5735 46.7873L16.181 46.6853C16.2324 46.4811 16.265 46.3192 15.9984 46.2418C15.6902 46.1621 15.6151 46.5146 15.5726 46.6667L15.4129 47.2208C15.3622 47.3855 15.3013 47.6575 15.5726 47.7279C15.7967 47.7846 15.9324 47.5774 16.0136 47.2746L15.7392 47.2058L15.8341 46.8853L16.4797 47.0808L16.1732 48.1493L15.8762 48.0733L15.9431 47.8474H15.9346C15.7977 48.0323 15.631 48.0516 15.4849 48.025C14.8393 47.8606 14.9067 47.4629 15.0608 46.9315" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5442 47.5474L17.3498 48.4166L16.9121 48.3276L17.3785 46.2979L18.1246 46.4565C18.5612 46.5456 18.6931 46.7286 18.6313 47.1061C18.596 47.3226 18.4827 47.5558 18.2062 47.5369L18.2033 47.5335C18.4371 47.6104 18.4569 47.7218 18.4161 47.9137C18.3985 47.9957 18.277 48.4915 18.3608 48.5717L18.3637 48.6327L17.9108 48.5211C17.892 48.3838 17.9562 48.1366 17.9816 47.9995C18.0069 47.8784 18.0478 47.7076 17.9173 47.6437C17.8154 47.5922 17.7773 47.5947 17.6618 47.5699L17.5442 47.5474ZM17.6172 47.233L17.9118 47.308C18.0908 47.3325 18.1903 47.2451 18.2256 47.0411C18.2575 46.8542 18.2162 46.7813 18.0556 46.7451L17.7396 46.6846L17.6172 47.233Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3509 46.7513L20.7837 46.7987L20.5973 48.2258C20.5067 48.6782 20.3212 48.8758 19.7932 48.8141C19.2561 48.7499 19.1286 48.5195 19.1609 48.0634L19.3488 46.6377L19.785 46.6846L19.5979 48.0784C19.5778 48.2299 19.5409 48.4541 19.8263 48.4814C20.0797 48.4997 20.1372 48.3412 20.1659 48.1445" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2598 48.892L21.3902 46.8516L22.2215 46.8855C22.6147 46.9039 22.7174 47.2063 22.7053 47.495C22.6937 47.6705 22.6357 47.8666 22.4734 47.9729C22.3404 48.0633 22.1691 48.0847 22.0107 48.0774L21.7397 48.0633L21.6856 48.9184L21.2598 48.892ZM21.752 47.7523L21.9722 47.7639C22.1512 47.77 22.2698 47.7033 22.2852 47.4556C22.2942 47.2179 22.1985 47.1774 21.9667 47.1678L21.7923 47.1621L21.752 47.7523Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M79.9095 29.7843L76.6045 35.4394C75.357 34.4843 73.834 33.7817 71.8904 33.7817C67.291 33.7817 65.4226 37.0134 65.4226 39.2899C65.4226 40.98 66.5964 43.4731 70.6888 43.4731C72.4068 43.4731 74.8486 42.3467 75.5514 41.834L72.2829 48.3948C70.7248 48.6878 70.2128 48.8695 68.894 48.908C61.569 49.114 58.6094 44.8722 58.6113 40.5381C58.6164 34.8081 64.0203 27.8397 72.9792 27.8397C73.5279 27.8397 74.1994 28.0189 74.7735 28.2172L75.3539 27.5176" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M93.5499 27.6943L94.4858 48.2471H87.5207L87.5168 44.7224H82.7673L81.2043 48.2471H73.6504L81.5478 33.5707L79.767 33.5598L83.1503 27.6943H93.5499ZM87.4702 33.9814L84.7852 39.9596H87.5513L87.4702 33.9814Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M54.2152 27.6936C57.6644 27.7119 59.6135 29.4768 59.6135 32.0261C59.6135 34.3767 57.5579 36.457 55.3013 37.5328C57.6245 38.3381 57.8255 40.3143 57.8255 41.7123C57.8255 45.0903 54.2301 48.2464 49.5564 48.2464H39.3633L43.3393 33.7745L41.7061 33.7656L45.0447 27.6936C45.0447 27.6936 51.4103 27.6754 54.2152 27.6936ZM50.8296 36.0271C51.5431 36.0271 52.8029 35.8568 53.1178 34.5551C53.4629 33.1419 52.2807 33.1039 51.7136 33.1039L49.6872 33.0957L48.9805 36.0271H50.8296ZM47.9662 39.6592L47.0332 43.037H49.4195C50.358 43.037 51.6374 42.5976 51.9509 41.4984C52.2605 40.3962 51.3662 39.6592 50.431 39.6592H47.9662Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.395 50.7724C18.8656 50.7724 15.2388 49.953 11.6167 48.3323L11.5278 48.2911L11.4853 48.2057C9.85983 44.9713 9 41.4339 9 37.9727C9 34.5166 9.82457 31.1303 11.451 27.9002L11.4959 27.8144L11.5865 27.7716C14.9372 26.2753 18.5415 25.5176 22.3032 25.5176C25.807 25.5176 29.5495 26.3611 33.1236 27.9617L33.2151 28.0002L33.2576 28.0876C34.914 31.3817 35.7876 34.9184 35.7876 38.3224C35.7876 41.7128 34.9488 45.1023 33.2902 48.3943L33.2467 48.4806L33.1545 48.5206C29.8548 49.993 26.1341 50.7724 22.395 50.7724ZM11.9525 47.8881C15.471 49.4486 18.9806 50.2364 22.3955 50.2364C26.0165 50.2364 29.6174 49.4903 32.8232 48.076C34.4155 44.8859 35.2227 41.6028 35.2227 38.3217C35.2227 35.027 34.3803 31.6002 32.7867 28.4029C29.3181 26.8659 25.6957 26.0508 22.3038 26.0508C18.662 26.0508 15.1713 26.7789 11.922 28.2155C10.3623 31.3461 9.56836 34.6268 9.56836 37.972C9.56836 41.3232 10.3932 44.7516 11.9525 47.8881Z" fill="white"/>
                            </svg>Bank BCA</label>
                    </div>        
                </div>

                <div class="col-6">
                    <div class="container rounded p-1 paymethodContainer" style="width: fit-content;">
                        <input type="radio" id="BRI" name="paymethod" value="BRI">
                            <label for="BRI" onclick="checkPayments()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="30" viewBox="0 0 105 75" fill="none">
                                    <rect width="105" height="75" rx="4" fill="#00529C"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M31.127 32.5371H36.1314C38.1579 32.5371 39.6687 33.4338 39.6687 35.3214C39.6687 36.7054 38.9684 37.4761 37.7518 37.8844V37.9156C39.2018 38.2152 39.9501 39.0018 39.9501 40.3379C39.9501 42.9651 37.6578 43.5152 35.7096 43.5152H31.127V32.5371ZM34.0234 36.8786H34.8348C35.7857 36.8786 36.7684 36.6426 36.7684 35.7139C36.7684 34.7085 35.8327 34.6133 34.8652 34.6133H34.0234V36.8786ZM34.0234 41.4392H34.8823C35.9413 41.4392 37.0478 41.2817 37.0478 40.1649C37.0478 38.9704 35.9105 38.8594 34.9126 38.8594H34.0234V41.4392Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M43.754 32.5371H47.3084L51.5019 43.5152H48.3214L47.5114 41.1723H43.427L42.5692 43.5152H39.623L43.754 32.5371ZM45.5325 34.8018H45.4998L44.0977 39.0959H46.8255L45.5325 34.8018Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M51.9082 32.5371H55.6026L59.2818 39.9927H59.3121L59.2661 32.5371H61.9171V43.5152H58.3157L54.5108 36.0131H54.4809L54.5739 43.5152H51.9082V32.5371Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M62.9004 32.5371H65.7995V37.0208H65.8308L69.1034 32.5371H72.5966L68.5739 37.6484L72.9083 43.5152H69.2125L65.8308 38.5298H65.7995V43.5152H62.9004V32.5371Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M76.502 32.5371H81.5064C83.5325 32.5371 85.0451 33.4338 85.0451 35.3214C85.0451 36.7054 84.3448 37.4761 83.1282 37.8844V37.9156C84.5778 38.2152 85.326 39.0018 85.326 40.3379C85.326 42.9651 83.0343 43.5152 81.0865 43.5152H76.502V32.5371ZM79.4023 36.8786H80.2123C81.1637 36.8786 82.1449 36.6426 82.1449 35.7139C82.1449 34.7085 81.2106 34.6133 80.2446 34.6133H79.4023V36.8786ZM79.4023 41.4392H80.2602C81.3193 41.4392 82.4267 41.2817 82.4267 40.1649C82.4267 38.9704 81.2889 38.8594 80.2911 38.8594H79.4023V41.4392Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M85.9688 32.5371H91.1445C93.0771 32.5371 94.6524 33.4175 94.6524 35.306C94.6524 36.7685 93.9663 37.7437 92.5637 38.0735V38.1047C93.497 38.3569 93.5606 39.1899 94.1063 40.527L95.1667 43.5152H92.1428L91.5189 41.5347C90.9262 39.6471 90.5518 39.1741 89.4762 39.1741H88.8679V43.5152H85.9688V32.5371ZM88.8691 37.0988H89.6335C90.5688 37.0988 91.754 37.0667 91.754 35.8245C91.754 34.8029 90.7396 34.6133 89.6335 34.6133H88.8691V37.0988Z" fill="white"/>
                                    <mask id="mask0_179_1449" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="6" y="27" width="93" height="23">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6 49.0586H98.8652V27H6V49.0586Z" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask0_179_1449)">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M95.9648 43.5152H98.864V32.5371H95.9648V43.5152Z" fill="white"/>
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5103 27H9.33519C7.49322 27 6 28.5439 6 30.4487V30.4851V45.6109C6 47.497 7.4657 49.0304 9.28394 49.0586H24.5023C26.3447 49.0586 27.8384 47.5147 27.8384 45.6109L27.8455 30.4487C27.8455 28.5439 26.3528 27 24.5103 27ZM11.1394 47.2915L10.3114 47.3006C9.30926 47.3006 8.49693 46.47 8.49693 45.445L8.49219 45.299V31.2964L8.49741 30.5424C8.53489 29.5505 9.28174 28.752 10.2601 28.752H11.9432C13.4682 28.752 14.7052 30.09 14.7052 31.6688C14.7052 32.4491 14.402 33.1576 13.9109 33.6728L9.61673 38.0689L13.6414 42.2036C14.1604 42.7431 14.4741 43.4526 14.4741 44.2296C14.4741 45.9209 12.9809 47.2915 11.1394 47.2915ZM23.5122 47.2776L16.0086 47.2742C16.0086 47.2742 16.8764 45.3823 16.8764 44.2114C16.8764 42.7838 16.4029 41.508 15.6622 40.664L13.0957 38.0243L15.7154 35.2937C16.4949 34.5541 17.0131 33.2414 17.0131 31.7464C17.0131 30.5625 16.6885 29.5136 16.1661 28.752H17.9844C19.5099 28.752 20.7469 30.09 20.7469 31.6688C20.7469 32.4491 20.4441 33.1576 19.953 33.6728L15.741 38.0229L24.4892 47.0234C24.212 47.1996 23.8624 47.2776 23.5122 47.2776ZM25.3437 44.4678L19.0742 38.0213L22.0602 34.9594C22.6685 34.193 23.0538 33.0378 23.0538 31.7467C23.0538 30.5551 22.7245 29.4809 22.1973 28.7188L23.5339 28.759C24.5361 28.759 25.3484 29.591 25.3484 30.6155L25.3437 44.4678Z" fill="white"/>
                                    </g>
                                  </svg>Bank BRI</label>
                    </div>        
                </div>
            </div>  
          </div>
          
        </div>
        <div class="modal-footer">
            <form action="">
                <input type="hidden" id="hiddenIdJadwal">
                <input type="hidden" id="hiddenJumlah">
                <input type="hidden" value="Payment Success">
                <button type="submit" class="btn btn-primary" disabled id="bayarNow" data-bs-dismiss="modal">Bayar Sekarang</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  <!-- endof modal -->

  <!-- success payment animation -->
<div id="darkenScreen"></div>
<div id="videoContainer">
    <dotlottie-player id="lottiePlayer" src="https://lottie.host/1f25b754-dfaf-4e88-955b-0b913c12c407/UXE2t7llC3.json" background="transparent" speed="0.8" style="width: 300px; height: 300px;" ></dotlottie-player>
    <p class="text-white ms-5"><strong>Pembayaran Anda Berhasil!</strong></p>
</div>

<script>
    document.getElementById('selectTicket').addEventListener('submit', function (e) {
        e.preventDefault(); 
    

        const selectedRadioButton = document.querySelector('input[name="ticketSelection"]:checked');

        if (selectedRadioButton) {
            // Get the parent container of the selected radio button
            const container = selectedRadioButton.closest('.ticketSelectionContainer');

            // Extract data from the container
            const id = selectedRadioButton.value;
            const namaKereta = container.querySelector('.card-title strong').textContent.trim();
            const harga = container.querySelector('.hargaTicket strong').textContent.trim();
            const kelas = container.querySelector('.card-subtitle.text-secondary').textContent.trim();
            const status = container.querySelector('.card-subtitle.text-success strong').textContent.trim();
            const rating = container.querySelector('.card-subtitle.text-secondary strong').textContent.trim();
            const asal = container.querySelector('.card-subtitle.text-secondary strong').textContent.trim();
            const tujuan = container.querySelector('.card-subtitle.text-secondary strong').textContent.trim();
            const jamBerangkat = container.querySelector('.card-subtitle.text-primary strong').textContent.trim();
            const jamTiba = container.querySelector('.card-subtitle.text-primary strong').textContent.trim();


            console.log('ID:', id);
            console.log('Nama Kereta:', namaKereta);
            console.log('Harga:', harga);
            console.log('Kelas:', kelas);
            console.log('Status:', status);
            console.log('Rating:', rating);
            console.log('Asal:', asal);
            console.log('Tujuan:', tujuan);
            console.log('Jam Berangkat:', jamBerangkat);
            console.log('Jam Tiba:', jamTiba);

            ticketInfo.innerHTML = `<p><strong>${namaKereta} - ${kelas}</strong></p>`;

            payment.innerHTML = `<p> ${harga}</p>
                                <strong> ${harga}</strong>`;
            const JadwalIdInput = document.getElementById('hiddenIdJadwal');
            JadwalIdInput.value = id;
            const jumlahInput = document.getElementById('hiddenJumlah');
            jumlahInput.value = localStorage.getItem('key');
            console.log(jumlahInput.value);
         }
            
        $('#exampleModal').modal('show');
    });
</script>
 <script>
    function checkTickets() {
    var element2 = document.getElementById("bayar")
    if ($("input[name='ticketSelection']:checked")) {
        element2.disabled = false;
    }
    else {
        element2.disabled = true;
        }
    }

    function checkPayments() {
    var element2 = document.getElementById("bayarNow")
    if ($("input[name='paymethod']:checked")) {
        element2.disabled = false;
    }
    else {
        element2.disabled = true;
        }
    }


    // js for video
    document.getElementById("bayarNow").addEventListener("click", function () {
        var overlay = document.getElementById("darkenScreen");
        var content = document.getElementById("videoContainer");
        var lottiePlayer = document.getElementById("lottiePlayer");

        lottiePlayer.currentFrame = 0;
        overlay.style.display = "block";
        content.style.display = "block";
        lottiePlayer.play();

        lottiePlayer.addEventListener("complete", function () {
            overlay.style.display = "none";
            content.style.display = "none";
            setTimeout(redirectHome,1150);
        });
    });

    function redirectHome(){
        window.location.href = "{{ Route('profile')}}";
    }
   

    window.addEventListener("pageshow", function(event) {
            if (event.persisted) {
                var lottiePlayer = document.getElementById("lottiePlayer");
                lottiePlayer.currentFrame = 0;
            }
        });
</script>   

@endsection
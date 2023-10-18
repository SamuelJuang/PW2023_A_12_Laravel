@extends('PageNavFoot')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
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
        border: solid 5px #0275d8;
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
</style>
<div class="container">
    <div class="container" style="width: 100%; height: 70vh; overflow-y: auto; margin-bottom: 5vh;">
        <div class="row">
            @forelse ($ticket as $item)
                    <div class="col-6 my-2">
                        <div class="card radio" style="width: 30rem; height: 17rem;" onclick="myFunction(this.id)" id="{{ $item['id'] }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between text-primary">
                                    <p class="card-title">
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
                                    <p class="card-subtitle text-success">
                                        <strong>
                                            {{ $item['status'] }}
                                        </strong>
                                    </p>
                                </div>
                                <br> <p class="card-subtitle text-secondary">Rating :
                                <?php
                                    for ($x = 0; $x <  $item['rating'] ; $x++) {
                                ?>
                                <i class="fas fa-star fa-xs" style="color: gold;"></i>
                                        <?php }
                                ?>
                            </p>
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
    <div class="d-flex flex-row-reverse">
        <button class="btn btn-outline-light px-5 mx-3">
            login   
        </button>
    </div>
</div>
<script>
    function myFunction(id) {
    var element = document.getElementById(id);
    if(element.classList.contains("mystyle")){
        element.classList.remove("mystyle");
    }else{
        element.classList.add("mystyle");
    }
    }
</script>

@endsection
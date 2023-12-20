@extends('PageNavFoot')
@section('content')
@auth
<form action="{{ route('ticket_ketemu')}}" method="get" id="form" name="form">
    @else
    <form action="{{ url('/login') }}">
        @endif
        <div class="d-flex align-content-center fadeInAnimated ">

            <div class="mx-auto mt-4 text-white text-center">
                <h1><strong>Merajut Memori Bersama Kami.</strong></h1>
                <h5>Dengan fasilitas dan pelayanan yang anda dambakan</h5>
            </div>
        </div>
        <div class="justify-content-center mx-5 mb-2">
            <hr class="leftRightAnimated">
        </div>
        <div class="row px-2 mb-2">
            <div class="px-5">
                <label for="jumlah" class="form-label" style="color: white; margin-left:82%">Penumpang</label>
                <div class="btn-group float-end" style="max-width: 40vh;">
                    <input type="number" class="form-control reg" placeholder="penumpang" name="jumlah" id="jumlah" min="1" required>
                </div>
            </div>
        </div>
        <div class="px-4 py-3 row">
            <div class="col-3 ">
                <div class="text-white" style="margin-left: 12px;">
                    Stasiun Asal
                </div>
            </div>
            <div class="col-3">
                <div class="text-white" style="margin-left: 12px;">
                    Stasiun Tujuan
                </div>
            </div>
            <div class="col-6">
                <div class="text-white" style="margin-left: 12px;">
                    Tanggal Keberangkatan
                </div>
            </div>
            <!-- <label for="inputState" class="form-label">Stasiun Tujuan</label>
                <select id="inputState" class="form-select">
                    <option selected>Staiun Tujuan</option>
                    <option>Staiun Tugu</option>
                    <option>Stasiu Lempuyangan</option>
                    <option>Staiun Maguwo</option>
                    <option>Staiun Rewulu</option>
                </select> -->

            <div class="col-6">
                <div class="btn-group container-fluid">
                    <select name="StasiunAsal" id="StasiunAsal" class="form-select reg" required>
                        <option value="" hidden>Stasiun Asal</option>
                        @foreach($stasiunAsalOptions as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </select>

                    <select name="StasiunTujuan" id="StasiunTujuan" class="form-select reg" style="margin-left: 50px; " required>
                        <option value="" hidden>Stasiun Tujuan</option>
                        @foreach($stasiunTujuanOptions as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="btn-group container-fluid w-300">
                    <input name="TglDepart" id="TglDepart" class="form-control reg" type="date" required />
                </div>
            </div>
            <div class="row container-fluid" style="margin-top: 20px;">
                <button class="btn btn-primary ms-auto" style="width: 18%;" type="submit">
                    Cari Kereta
                </button>
            </div>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                const jumlah = document.getElementById("jumlah").value;
                localStorage.setItem('key', jumlah);
            });
        });
    </script>
    @endsection
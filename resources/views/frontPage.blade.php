@extends('PageNavFoot')
@section('content')

<div class="d-flex align-content-center fadeInAnimated">
    <div class="mx-auto mt-4 text-white text-center">
        <h1><strong>Merajut Memori Bersama Kami.</strong></h1>
        <h5>Dengan fasilitas dan pelayanan yang anda dambakan</h5>
    </div>
</div>
<div class="justify-content-center mx-5">
    <hr class="leftRightAnimated">
</div>
<div class="row px-2">
    <div class="px-5">
        <div class="btn-group float-end" style="max-width: 40vh;">
            <input type="number" class="form-control reg" placeholder="Dewasa" name="Dewasa" id="DewasaNum">
            <input type="number" class="form-control reg" placeholder="Bayi" name="Bayi" id="BayiNum">
        </div>
    </div>
</div>

<div class="px-4 py-3 row">
    <div class="col-3 ">
        <div class="text-white" style="margin-left: 10px;">
            Stasiun Asal
        </div>
    </div>
    <div class="col-3">
        <div class="text-white">
            Stasiun Tujuan
        </div>
    </div>
    <div class="col-6">
        <div class="text-white" style="margin-left: 10px;">
            Tanggal Keberangkatan
        </div>
    </div>
    
    <div class="col-6">
        <div class="btn-group container-fluid">
            <select name="StasiunAsal" id="StasiunAsal" class="form-select reg">
                <option value="" hidden>Stasiun Asal</option>
                <option value="Stasiun Solo Balapan">Stasiun Solo Balapan</option>
                <option value="Stasiun Yogyakarta">Stasiun Yogyakarta</option>
                <option value="Stasiun Bandung">Stasiun Bandung</option>
            </select>

            <select name="StasiunTujuan" id="StasiunTujuan" class="form-select reg">
                <option hidden>Stasiun Tujuan</option>
                <option value="Stasiun Solo Balapan">Stasiun Solo Balapan</option>
                <option value="Stasiun Yogyakarta">Stasiun Yogyakarta</option>
                <option value="Stasiun Bandung">Stasiun Bandung</option>
            </select>
        </div>
    </div>
    <div class="col-4">
        <div class="btn-group container-fluid">
            <input name="TglDepart" id="TglDepart" class="form-control reg" type="date" />
        </div>
    </div>
    <div class="row container-fluid" style="margin-left: 81%; margin-top: 20px;">
        @if(session()->has('user'))
        <form action="{{ url('/ticketSearch') }}">
            @else
            <form action="{{ url('/login') }}">
                @endif
                <button class="btn btn-primary ms-auto" style="width: 15%;" type="submit">
                    Cari Kereta
                </button>
            </form>
    </div>
    @endsection
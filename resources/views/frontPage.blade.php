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
            <div class="btn-group float-end">
                <input type="number" class="form-control reg" placeholder="Adults" name="Adult" id="AdultNum" >
                <input type="number" class="form-control reg" placeholder="Infants" name="Infants" id="infantNum">
            </div>
        </div>
    </div>

    <div class="px-4 py-3 row">
        <div class="col-3 ">
            <div class="text-white">
                Stasiun Asal
            </div>
        </div>
        <div class="col-3">
            <div class="text-white">
                Stasiun Tujuan
            </div>
        </div>
        <div class="col-3">
            <div class="text-white">
                Tanggal Keberangkatan
            </div>
        </div>
        <div class="col-3">
            <div class="text-white">
                Tanggal kembali
            </div>
        </div>
       <div class="col-6">
            <div class="btn-group container-fluid">
                <select name="prodiDD" id="prodiDD" class="form-select reg">
                    <option selected value="">piilh prodi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
                <select name="prodiDD" id="prodiDD" class="form-select reg">
                    <option selected value="">piilh prodi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </div>
       </div>
       <div class="col-6">
        <div class="btn-group container-fluid">
            <input name="prodiDD" id="prodiDD" class="form-control reg" type="date"/>
            <input name="prodiDD" id="prodiDD" class="form-control reg" type="date"/>
        </div>
   </div>
   <div class="row container-fluid" style="margin-left: 81%; margin-top: 20px;">
    <form action="{{ url('/ticketSearch') }}">
        <button class="btn btn-primary ms-auto" style="width: 15%;" type="submit">
            Cari
        </button>
    </form>
</div>
@endsection
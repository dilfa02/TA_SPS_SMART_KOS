<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPK SMART KOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg mt-2">
        <a href="{{ route('SPK') }}">
            <img src="/image/logo.png" alt="" width="200px" height="100px">
        </a>
        <span>
            <h2>Kamu Ingin Mencari Kos?</h2><p>Dapatkan kos yang anda inginkan dengan memilih rincian kriteria dengan maksimal 3 kriteria pada "Filter SPK" di bawah ini:</p>
        </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

<div class="row" style="border-right: none; border-left: none; border-top: none">
    <div class="col-auto ms-5 mt-5">
      <nav class="h-100 flex-column align-items-stretch pe-4 border-end border-3">
        <h5 class="mb-4 mt-2 text-decoration-underline">Filter SPK:</h5>
        <form action="{{ route('hasil') }}" method="POST">
        @csrf
            <ul class="list-unstyled components" id="alternatif">
                <li class="mt-2">
                    <a href="#kk" data-toggle="collapse" aria-expanded="false" class="text-decoration-none text-dark dropdown-toggle">Kondisi Kamar</a>
                    <ul class="collapse list-unstyled ms-3" id="kk">
                        <li>
                            <input type="radio" id="kk1" name="kk_alternatif" value="1">
                            <label for="kk1">Lembab, Ventilasi, Jendela, Paparan Sinar Matahari</label><br>
                            <input type="radio" id="kk2" name="kk_alternatif" value="2">
                            <label for="kk2">Lembab, Ventilasi, Jendela</label><br>
                            <input type="radio" id="kk3" name="kk_alternatif" value="3">
                            <label for="kk3">Kering, Jendela</label><br>
                            <input type="radio" id="kk4" name="kk_alternatif" value="4">
                            <label for="kk4">Kering, Jendela, Blower</label><br>
                            <input type="radio" id="kk5" name="kk_alternatif" value="5">
                            <label for="kk5">Kering, Ventilasi, Jendela</label><br>
                            <input type="radio" id="kk6" name="kk_alternatif" value="6">
                            <label for="kk6">Kering, Jendela, Paparan Sinar Matahari</label><br>
                            <input type="radio" id="kk7" name="kk_alternatif" value="7">
                            <label for="kk7">Kering, Ventilasi, Jendela, Paparan Sinar Matahari</label><br>
                            <input type="radio" id="kk8" name="kk_alternatif" value="8">
                            <label for="kk8">Kering, Ventilasi, Jendela, Blower, Paparan Sinar Matahari</label>
                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <a href="#harga" data-toggle="collapse" aria-expanded="false" class="text-decoration-none text-dark dropdown-toggle">Harga</a>
                    <ul class="collapse list-unstyled ms-3" id="harga">
                        <li>
                            <input type="radio" id="harga1" name="harga_alternatif" value="1">
                            <label for="harga1">> 1.800.000</label><br>
                            <input type="radio" id="harga2" name="harga_alternatif" value="2">
                            <label for="harga2">1.600.000 < H ≤ 1.800.000</label><br>
                            <input type="radio" id="harga3" name="harga_alternatif" value="3">
                            <label for="harga3">1.400.000 < H ≤ 1.600.000</label><br>
                            <input type="radio" id="harga4" name="harga_alternatif" value="4">
                            <label for="harga4">1.200.000 < H ≤ 1.400.000</label><br>
                            <input type="radio" id="harga5" name="harga_alternatif" value="5">
                            <label for="harga5">1.000.000 < H ≤ 1.200.000</label><br>
                            <input type="radio" id="harga6" name="harga_alternatif" value="6">
                            <label for="harga6">800.000 < H ≤ 1.000.000</label><br>
                            <input type="radio" id="harga7" name="harga_alternatif" value="7">
                            <label for="harga7">600.000 < H ≤ 800.000</label><br>
                            <input type="radio" id="harga8" name="harga_alternatif" value="8">
                            <label for="harga8">≤ Rp 600.000</label>
                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <a href="#fk" data-toggle="collapse" aria-expanded="false" class="text-decoration-none text-dark dropdown-toggle">Fasilitas Kamar</a>
                    <ul class="collapse list-unstyled ms-3" id="fk">
                        <li>
                            <input type="radio" id="fk1" name="fk_alternatif" value="1">
                            <label for="fk1">Kasur, Lemari, Meja</label><br>
                            <input type="radio" id="fk2" name="fk_alternatif" value="2">
                            <label for="fk2">WC, Kasur, Token Listrik</label><br>
                            <input type="radio" id="fk3" name="fk_alternatif" value="3">
                            <label for="fk3">WC, Kasur, Lemari, Meja</label><br>
                            <input type="radio" id="fk4" name="fk_alternatif" value="4">
                            <label for="fk4">Kasur, Lemari, Meja, Kipas Angin</label><br>
                            <input type="radio" id="fk5" name="fk_alternatif" value="5">
                            <label for="fk5">Kasur, Lemari, Meja, Kursi, Kipas Angin</label><br>
                            <input type="radio" id="fk6" name="fk_alternatif" value="6">
                            <label for="fk6">Kasur, Lemari, Meja, Kursi, AC</label><br>
                            <input type="radio" id="fk7" name="fk_alternatif" value="7">
                            <label for="fk7">WC, Kasur, Lemari, Meja, Kursi, Kipas Angin</label><br>
                            <input type="radio" id="fk8" name="fk_alternatif" value="8">
                            <label for="fk8">WC, Kasur, Lemari, Meja, Kursi, AC</label>
                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <a href="#kkm" data-toggle="collapse" aria-expanded="false" class="text-decoration-none text-dark dropdown-toggle">Kondisi Kamar Mandi</a>
                    <ul class="collapse list-unstyled ms-3" id="kkm">
                        <li>
                            <input type="radio" id="kkm1" name="kkm_alternatif" value="1">
                            <label for="kkm1">Kloset Jongkok, Ventilasi, Lembab, Kotor</label><br>
                            <input type="radio" id="kkm2" name="kkm_alternatif" value="2">
                            <label for="kkm2">Kloset Jongkok, Ventilasi, Lembab, Bersih</label><br>
                            <input type="radio" id="kkm3" name="kkm_alternatif" value="3">
                            <label for="kkm3">Kloset Jongkok, Kering, Bersih</label><br>
                            <input type="radio" id="kkm4" name="kkm_alternatif" value="4">
                            <label for="kkm4">Kloset duduk, Kering, Bersih, Ventilasi</label><br>
                            <input type="radio" id="kkm5" name="kkm_alternatif" value="5">
                            <label for="kkm5">Kloset Jongkok, Kering, Bersih, Ventilasi</label><br>
                            <input type="radio" id="kkm6" name="kkm_alternatif" value="6">
                            <label for="kkm6">Kloset Duduk, Kering, Bersih, Blower</label><br>
                            <input type="radio" id="kkm7" name="kkm_alternatif" value="7">
                            <label for="kkm7">Kloset Jongkok, Kering, Bersih, Blower</label><br>
                            <input type="radio" id="kkm8" name="kkm_alternatif" value="8">
                            <label for="kkm8">Kloset Duduk, Kering, Bersih, Ventilasi, Blower</label>
                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <a href="#keamanan" data-toggle="collapse" aria-expanded="false" class="text-decoration-none text-dark dropdown-toggle">Keamanan</a>
                    <ul class="collapse list-unstyled ms-3" id="keamanan">
                        <li>
                            <input type="radio" id="keamanan1" name="keamanan_alternatif" value="1">
                            <label for="keamanan1">Tanpa Keamanan</label><br>
                            <input type="radio" id="keamanan2" name="keamanan_alternatif" value="2">
                            <label for="keamanan2">Penjaga Kos</label><br>
                            <input type="radio" id="keamanan3" name="keamanan_alternatif" value="3">
                            <label for="keamanan3">Pagar</label><br>
                            <input type="radio" id="keamanan4" name="keamanan_alternatif" value="4">
                            <label for="keamanan4">Pagar, Penjaga Kos</label><br>
                            <input type="radio" id="keamanan5" name="keamanan_alternatif" value="5">
                            <label for="keamanan5">Penjaga Kos, CCTV Parkiran/Luar</label><br>
                            <input type="radio" id="keamanan6" name="keamanan_alternatif" value="6">
                            <label for="keamanan6">PagPenjaga Kos, CCTV Parkiran/Luar, CCTV ruangan Umumar</label><br>
                            <input type="radio" id="keamanan7" name="keamanan_alternatif" value="7">
                            <label for="keamanan7">Pagar, Penjaga Kos, CCTV Parkiran/Luar</label><br>
                            <input type="radio" id="keamanan8" name="keamanan_alternatif" value="8">
                            <label for="keamanan8">Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan umum</label>
                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <a href="#jarak" data-toggle="collapse" aria-expanded="false" class="text-decoration-none text-dark dropdown-toggle">Jarak</a>
                    <ul class="collapse list-unstyled ms-3" id="jarak">
                        <li>
                            <input type="radio" id="jarak1" name="jarak_alternatif" value="1">
                            <label for="jarak1">> 6 km</label><br>
                            <input type="radio" id="jarak2" name="jarak_alternatif" value="2">
                            <label for="jarak2">5 km < J ≤ 6 km</label><br>
                            <input type="radio" id="jarak3" name="jarak_alternatif" value="3">
                            <label for="jarak3">4 km < J ≤ 5 km</label><br>
                            <input type="radio" id="jarak4" name="jarak_alternatif" value="4">
                            <label for="jarak4">3 km < J ≤ 4 km</label><br>
                            <input type="radio" id="jarak5" name="jarak_alternatif" value="5">
                            <label for="jarak5">2 km < J ≤ 3 km</label><br>
                            <input type="radio" id="jarak6" name="jarak_alternatif" value="6">
                            <label for="jarak6">1 km < J ≤ 2 km</label><br>
                            <input type="radio" id="jarak7" name="jarak_alternatif" value="7">
                            <label for="jarak7">500 m < J ≤ 1 km</label><br>
                            <input type="radio" id="jarak8" name="jarak_alternatif" value="8">
                            <label for="jarak8">≤ 500 m</label>
                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <a href="#lingkungan" data-toggle="collapse" aria-expanded="false" class="text-decoration-none text-dark dropdown-toggle">Lingkungan</a>
                    <ul class="collapse list-unstyled ms-3" id="lingkungan">
                        <li>
                            <input type="radio" id="lingkungan1" name="lingkungan_alternatif" value="1">
                            <label for="lingkungan1">Sunyi</label><br>
                            <input type="radio" id="lingkungan2" name="lingkungan_alternatif" value="2">
                            <label for="lingkungan2">Ramai</label><br>
                            <input type="radio" id="lingkungan3" name="lingkungan_alternatif" value="3">
                            <label for="lingkungan3">Sunyi, Dekat Pertokoan</label><br>
                            <input type="radio" id="lingkungan4" name="lingkungan_alternatif" value="4">
                            <label for="lingkungan4">Ramai, Dekat Pertokoan</label><br>
                            <input type="radio" id="lingkungan5" name="lingkungan_alternatif" value="5">
                            <label for="lingkungan5">Sunyi, Dekat Pertokoan, Dekat Warung Makan</label><br>
                            <input type="radio" id="lingkungan6" name="lingkungan_alternatif" value="6">
                            <label for="lingkungan6">Ramai, Dekat Pertokoan, Dekat Warung Makan</label><br>
                            <input type="radio" id="lingkungan7" name="lingkungan_alternatif" value="7">
                            <label for="lingkungan7">Sunyi, Dekat Pertokoan, Dekat SPBU, Dekat Supermarket, Dekat Warung Makan</label><br>
                            <input type="radio" id="lingkungan8" name="lingkungan_alternatif" value="8">
                            <label for="lingkungan8">Ramai, Dekat Pertokoan, Dekat SPBU, Dekat Supermarket, Dekat Warung Makan</label>
                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <a href="#fu" data-toggle="collapse" aria-expanded="false" class="text-decoration-none text-dark dropdown-toggle">Fasilitas Umum</a>
                    <ul class="collapse list-unstyled ms-3" id="fu">
                        <li>
                            <input type="radio" id="fu1" name="fu_alternatif" value="1">
                            <label for="fu1">Listrik, Air, Jemuran, WC Umum, Wifi</label><br>
                            <input type="radio" id="fu2" name="fu_alternatif" value="2">
                            <label for="fu2">Dapur, Listrik, Air, Jemuran, Wifi</label><br>
                            <input type="radio" id="fu3" name="fu_alternatif" value="3">
                            <label for="fu3">Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi</label><br>
                            <input type="radio" id="fu4" name="fu_alternatif" value="4">
                            <label for="fu4">Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi</label><br>
                            <input type="radio" id="fu5" name="fu_alternatif" value="5">
                            <label for="fu5">Dapur, Peralatan Dapur, Listrik, Air, Jemuran, WC Umum, Wifi, Ruang Tamu</label><br>
                            <input type="radio" id="fu6" name="fu_alternatif" value="6">
                            <label for="fu6">Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi</label><br>
                            <input type="radio" id="fu7" name="fu_alternatif" value="7">
                            <label for="fu7">Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu</label><br>
                            <input type="radio" id="fu8" name="fu_alternatif" value="8">
                            <label for="fu8">Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu</label>
                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <a href="#lk" data-toggle="collapse" aria-expanded="false" class="text-decoration-none text-dark dropdown-toggle">Luas Kamar</a>
                    <ul class="collapse list-unstyled ms-3" id="lk">
                        <li>
                            <input type="radio" id="lk1" name="lk_alternatif" value="1">
                            <label for="lk1">< 4 𝑚^2</label><br>
                            <input type="radio" id="lk2" name="lk_alternatif" value="2">
                            <label for="lk2">4 𝑚^2 < LK ≤ 6 𝑚^2</label><br>
                            <input type="radio" id="lk3" name="lk_alternatif" value="3">
                            <label for="lk3">6 𝑚^2 < LK ≤ 9 𝑚^2</label><br>
                            <input type="radio" id="lk4" name="lk_alternatif" value="4">
                            <label for="lk4">9 𝑚^2 < LK ≤ 12 𝑚^2</label><br>
                            <input type="radio" id="lk5" name="lk_alternatif" value="5">
                            <label for="lk5">12 𝑚^2 < LK ≤ 15 𝑚^2</label><br>
                            <input type="radio" id="lk6" name="lk_alternatif" value="6">
                            <label for="lk6">15 𝑚^2 < LK ≤ 16 𝑚^2</label><br>
                            <input type="radio" id="lk7" name="lk_alternatif" value="7">
                            <label for="lk7">16 𝑚^2 < LK ≤ 20 𝑚^2</label><br>
                            <input type="radio" id="lk8" name="lk_alternatif" value="8">
                            <label for="lk8">> 20 𝑚^2</label>
                        </li>
                    </ul>
                </li>
                <li class="mt-2">
                    <a href="#parkiran" data-toggle="collapse" aria-expanded="false" class="text-decoration-none text-dark dropdown-toggle">Parkiran</a>
                    <ul class="collapse list-unstyled ms-3" id="parkiran">
                        <li>
                            <input type="radio" id="parkiran1" name="parkiran_alternatif" value="1">
                            <label for="parkiran1">Tidak Ada</label><br>
                            <input type="radio" id="parkiran2" name="parkiran_alternatif" value="2">
                            <label for="parkiran2">1 - 2 Motor</label><br>
                            <input type="radio" id="parkiran3" name="parkiran_alternatif" value="3">
                            <label for="parkiran3">2 - 4 Motor</label><br>
                            <input type="radio" id="parkiran4" name="parkiran_alternatif" value="4">
                            <label for="parkiran4">4 - 7 Motor</label><br>
                            <input type="radio" id="parkiran5" name="parkiran_alternatif" value="5">
                            <label for="parkiran5">7 - 10 Motor</label><br>
                            <input type="radio" id="parkiran6" name="parkiran_alternatif" value="6">
                            <label for="parkiran6">> 10 Motor</label><br>
                            <input type="radio" id="parkiran7" name="parkiran_alternatif" value="7">
                            <label for="parkiran7">7 - 10 Motor & 1 - 2 Mobil</label><br>
                            <input type="radio" id="parkiran8" name="parkiran_alternatif" value="8">
                            <label for="parkiran8">10 < MTR ≤ 25 & 1 ≤ MBL ≤ 5</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="row">
                <div class="col">
                    <span href="" class="btn btn-dark btn-sm" onclick="clearRadio()">Batal</span>
                </div>
                <div class="col d-flex justify-content-end">
                    <input type="submit" class="btn btn-dark btn-sm" value="Terapkan">
                </div>
            </div>
        </form>
      </nav>
    </div>

    <div class="col mt-4">
        <div class="px-5">
            <div style="justify-content: right" class="d-flex mb-3 py-2">
                <div class="row w-100 align-items-center">
                    <div class="col text-left">
                        <b>Alternatif / <span class="text-muted">Semua</span></b>
                    </div>
                    <div class="col-auto text-right">
                        <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Filter
                        </button>
                        <ul class="dropdown-menu">
                            <form action="{{ route('filter', 's') }}" method="POST">
                                @csrf
                                @foreach ($ids as $id)
                                    <input type="hidden" name="ids[]" value="{{ $id }}">
                                @endforeach
                                <li><button type='submit' class="dropdown-item" href="">Semua</button></li>
                            </form>
    
                            <form action="{{ route('filter', 'l') }}" method="POST">
                                @csrf
                                @foreach ($ids as $id)
                                    <input type="hidden" name="ids[]" value="{{ $id }}">
                                @endforeach
                                <li><button type='submit' class="dropdown-item" href="">Laki-Laki</button></li>
                            </form>
    
                            <form action="{{ route('filter', 'p') }}" method="POST">
                                @csrf
                                @foreach ($ids as $id)
                                    <input type="hidden" name="ids[]" value="{{ $id }}">
                                @endforeach
                                <li><button type='submit' class="dropdown-item" href="">Perempuan</button></li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                @if (count($koss))
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Alternatif</th>
                                <th scope="col">Data Real</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($koss as $kos)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $kos->alternatif }}</td>
                                    <td><button type="button" class="btn btn-sm btn-dark" data-bs-toggle="modal"
                                            data-bs-target="#{{ str_replace(' ', '', $kos->alternatif) }}">
                                            Lihat
                                        </button></td>
                                </tr>
                                <div class="modal fade" id="Jawas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Jawas</h1>
                                                <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong> Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.200.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 12 M^2<br>
                                                <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Jawas.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 4666 6895<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/NyGiVyYc58c22RrZ8"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="CarjoeA18" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A18</h1>
                                                <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong> Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.300.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 2,2 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Carjoe.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/8vn8aVnDjbpGskCY8"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Ar-RayyanA(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ar-Rayyan A (Type1)</h1>
                                                <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.400.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9,9 M^2<br>
                                                <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Ar-Rayyan.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 4750 5450<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/YN3eygWp29YPUYk5A"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="JK(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">JK (Type1)</h1>
                                                <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong> Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.200.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,6 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 8,4 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/JK.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0811 5977 001<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/BGjD448NUEj3NVKS6"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="CarjoeA7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A7</h1>
                                                <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                                                <strong>Harga:</strong> Rp 1.400.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 2,1 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Carjoe.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0812 5809 993<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/HsfpnEmQaAbKWfag8"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Ar-RayyanA(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ar-Rayyan A (Type2)</h1>
                                                <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.000.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9,9 M^2<br>
                                                <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Ar-Rayyan.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 4750 5450<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/YN3eygWp29YPUYk5A"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="JK(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">JK (Type2)</h1>
                                                <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 900.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,6 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 8,4 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/JK.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0811 5977 001<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/BGjD448NUEj3NVKS6"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Amanah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Amanah</h1>
                                                <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 850.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,3 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Bugenvil(L)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Bugenvil (L)</h1>
                                                <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 750.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Token Listrik<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,8 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                                                <strong>Luas Kamar:</strong> 12 M^2<br>
                                                <strong>Parkiran:</strong> 10 < MTR ≤ 25 & 1 ≤ MBL ≤ 5<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Bugenvil(L).jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0812 5377 9502<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/YQw2C6ntC3h7HRy78"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Ramothy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ramothy</h1>
                                                <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 850.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Tanpa Keamanan<br>
                                                <strong>Jarak:</strong> 2 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Ramothy.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 2966 0111<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/bKqRvAYkcpyK3iMw9"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Ar-RayyanB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ar-Rayyan B</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 750.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Token Listrik<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9,9 M^2<br>
                                                <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Ar-Rayyan.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 4750 5450<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/YN3eygWp29YPUYk5A"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Barokah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Barokah</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 700.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                                <strong>Jarak:</strong> 1,8 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Barokah.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0812 5829 584<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/2D2vatPwdWC1tWx99"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="3GKost" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">3G Kost</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 800.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 2 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi<br>
                                                <strong>Luas Kamar:</strong> 8,3 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/3G.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0812 6586 171<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/XrDxho6zjMEXyv2w6"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="HajiAsa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Haji Asa</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.000.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih<br>
                                                <strong>Keamanan:</strong> Pagar<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Listrik, Air, Jemuran, Wifi<br>
                                                <strong>Luas Kamar:</strong> 10,5 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/HajiAsa.jpeg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0815 4555 4551<br><br>
                                                <strong>Lokasi:</strong><a href="https://maps.app.goo.gl/ek2gm3UGrwaNTz6V9?g_st=iw"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Nawra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Nawra</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 750.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Penjaga Kos<br>
                                                <strong>Jarak:</strong> 1,3 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 12 M^2<br>
                                                <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Nawra.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0821 5118 5692<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/t3ZR3ikUCoiCJwM17"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Syariah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Syariah</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 700.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Tanpa Keamanan<br>
                                                <strong>Jarak:</strong> 1,5 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Wijaya" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Wijaya</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 700.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Penjaga Kos<br>
                                                <strong>Jarak:</strong> 1,4 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 10,5 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Wijaya.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/D6PXFq8LZv2AYFR67"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Adam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Adam</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Lembab, Ventilasi, Jendela<br>
                                                <strong>Harga:</strong> Rp 600.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                                                <strong>Jarak:</strong> 4,2 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 6 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Darmansyah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Darmansyah</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 600.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Penjaga Kos<br>
                                                <strong>Jarak:</strong> 2,2 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Listrik, Air, Jemuran, WC Umum, Wifi<br>
                                                <strong>Luas Kamar:</strong> 6 M^2<br>
                                                <strong>Parkiran:</strong> 2 - 4 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="CarjoeA11(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A11 (Type1)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.500.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 2,1 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Carjoe.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 4738 7284<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/8vn8aVnDjbpGskCY8"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="CarjoeA13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A13</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.300.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Ventilasi, Blower<br>
                                                <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 2,2 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Carjoe.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0812 5834 2525<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/Cce1pJrEZXh2XDih9"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="CarjoeA10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A10</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.200.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Ventilasi, Blower<br>
                                                <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 2,1 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Carjoe.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0822 1311 2311<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/P6KAmyBzB1v9hMnB7"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="CarjoeA14(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A14 (Type1)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.550.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Penjaga Kos<br>
                                                <strong>Jarak:</strong> 2,2 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Carjoe.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0811 5443 032<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/5pt3Hs1AQhYT4Syr8"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="CarjoeA11(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A11 (Type2)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                                                <strong>Harga:</strong> Rp 1.250.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 2,1 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Carjoe.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 4738 7284<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/kfoX5KkaVj3XdDRW6"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="KartikaPutri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Kartika Putri</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.000.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 8,9 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/KartikaPutri.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 8165 4483<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/UvKUkwyyKLdGacKN7"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="BanyuAlfa(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Banyu Alfa (Type2)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Blower, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 850.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                                <strong>Jarak:</strong> 1,3 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="CarjoeA14(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A14 (Type2)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                                                <strong>Harga:</strong> Rp 1.400.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Penjaga Kos<br>
                                                <strong>Jarak:</strong> 2,2 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Carjoe.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0811 5443 032<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/iTV7gfMnMNdZKPKw7"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Permata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Permata</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Blower, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.000.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 5,3 M^2<br>
                                                <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/4BcjFaXxs2nFoT7i9"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="BanyuAlfa(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Banyu Alfa (Type1)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Jendela<br>
                                                <strong>Harga:</strong> Rp 1.000.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                                <strong>Jarak:</strong> 1,3 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 15 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="CarjoeA2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A2</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.200.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Penjaga Kos<br>
                                                <strong>Jarak:</strong> 2,1 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Carjoe.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/JWcxPaTM3gfxNTDV8"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Raflesia(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Raflesia (Type1)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Jendela<br>
                                                <strong>Harga:</strong> Rp 900.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, AC<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,9 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 10 < MTR ≤ 25 & 1 ≤ MBL ≤ 5<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Raflesia.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/25JgzP25kVmNuQYE6"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Raflesia(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Raflesia (Type2)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                                                <strong>Harga:</strong> Rp 800.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1,9 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 10 < MTR ≤ 25 & 1 ≤ MBL ≤ 5<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Raflesia.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/25JgzP25kVmNuQYE6"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Pink(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Pink (Type2)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                                                <strong>Harga:</strong> Rp 900.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Pink(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Pink (Type1)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Jendela, Blower<br>
                                                <strong>Harga:</strong> Rp 1.000.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Audy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Audy</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 1.025.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                                                <strong>Jarak:</strong> 1,4 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 6,9 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="CarjoeB1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe B1</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 700.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                                                <strong>Keamanan:</strong> Penjaga Kos<br>
                                                <strong>Jarak:</strong> 2,1 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Carjoe.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/JWcxPaTM3gfxNTDV8"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Hira" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hira</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 800.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                                <strong>Jarak:</strong> 1,6 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 4773 4440<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/oDXbFHgXgXTjcwQJ9"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="PutriITK" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Putri ITK</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 800.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Tanpa Keamanan<br>
                                                <strong>Jarak:</strong> 2,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0811 597 046<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Gue" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Gue</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 900.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar<br>
                                                <strong>Jarak:</strong> 1,4 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 10,5 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Gue.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0812 5720 1525<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/KQH6Hg8NMoLMmcrc6"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Threefa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Threefa</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 750.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 9 M^2<br>
                                                <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Threefa.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0815 2265 6984<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/7ZpTaSez5TaHe3ot8"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Hera" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hera</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                                                <strong>Harga:</strong> Rp 850.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Penjaga Kos<br>
                                                <strong>Jarak:</strong> 3,1 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 8,1 M^2<br>
                                                <strong>Parkiran:</strong> 2 - 4 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="https://maps.app.goo.gl/LfUcWgyuA8byDEHe9"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Sidrap1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Sidrap 1</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 800.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                                <strong>Jarak:</strong> 1 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                                                <strong>Luas Kamar:</strong> 7,5 M^2<br>
                                                <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Sidrap1.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0812 5058 6459<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/Xdbpiv6ZxMapgCyG9"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="DuaPutra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Dua Putra</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                                                <strong>Harga:</strong> Rp 800.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                                <strong>Jarak:</strong> 2,4 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 7,6 M^2<br>
                                                <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/DuaPutra.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0853 4809 0754<br><br>
                                                <strong>Lokasi:</strong><a href="https://maps.app.goo.gl/PtjEDmA6pYJaP1DM8"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Anugrah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Anugrah</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 850.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar<br>
                                                <strong>Jarak:</strong> 1,4 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 7 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Anugrah.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 4652 8247<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/4jUG2xJZKZCP2GXZ6"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Dea" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Dea</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 950.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar<br>
                                                <strong>Jarak:</strong> 1,7 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Listrik, Air, Jemuran, Wifi<br>
                                                <strong>Luas Kamar:</strong> 12 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0852 4746 1616<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Bugenvil(P)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Bugenvil (P)</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Lembab, Ventilasi, Jendela<br>
                                                <strong>Harga:</strong> Rp 900.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                                <strong>Jarak:</strong> 1,6 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi<br>
                                                <strong>Luas Kamar:</strong> 7,4 M^2<br>
                                                <strong>Parkiran:</strong> > 10 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Warbun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Warbun</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 900.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Penjaga Kos<br>
                                                <strong>Jarak:</strong> 1,4 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                                                <strong>Luas Kamar:</strong> 7,5 M^2<br>
                                                <strong>Parkiran:</strong> 4 - 7 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>08** **** ****<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="WarungAbangJon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Warung Abang Jon</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Jendela, Paparan sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 800.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                                                <strong>Jarak:</strong> 1,4 KM<br>
                                                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 6 M^2<br>
                                                <strong>Parkiran:</strong> 2 - 4 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/Anugrah.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 4652 8247<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/4jUG2xJZKZCP2GXZ6"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Azriel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Azriel</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Lembab, Ventilasi, Jendela, Paparan sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 850.000<br>
                                                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                                                <strong>Jarak:</strong> 1,6 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                                                <strong>Luas Kamar:</strong> 9,9 M^2<br>
                                                <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0878 4256 5537<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/S51K6CLfa9aWb11H7"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="WiwitJayantina" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Wiwit Jayantina</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan sinar Matahari<br>
                                                <strong>Harga:</strong> Rp 550.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih<br>
                                                <strong>Keamanan:</strong> Tanpa Keamanan<br>
                                                <strong>Jarak:</strong> 1,2 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 5 M^2<br>
                                                <strong>Parkiran:</strong> 1 - 2 Motor<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/WiwitJayantina.jpg') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0857 5166 0387<br><br>
                                                <strong>Lokasi:</strong><a href="https://goo.gl/maps/bTJDh34XqERDPRFq8"><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="Biru" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Biru</h1>
                                                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="pb-2 text-decoration-underline">RINCIAN KRITERIA</h5>
                                                <strong>Kondisi Kamar:</strong>Lembab, Ventilasi, Jendela<br>
                                                <strong>Harga:</strong> Rp 500.000<br>
                                                <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                                <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Kotor, Ventilasi<br>
                                                <strong>Keamanan:</strong> Pagar<br>
                                                <strong>Jarak:</strong> 1,2 KM<br>
                                                <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                                                <strong>Luas Kamar:</strong> 6,2 M^2<br>
                                                <strong>Parkiran:</strong> 10 < MTR ≤ 25 & 1 ≤ MBL ≤ 5<br><br><br>
                                                <h5 class="pb-2 text-decoration-underline">DETAIL</h5>
                                                <strong>Gambar:</strong>
                                                <div class="text-center">
                                                    <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                                </div><br><br>
                                                <strong>CP:</strong><br>0813 4620 2121<br><br>
                                                <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h4 class="text-center py-5">Data Alternatif Kos Yang Anda Cari Belum Ada. Silahkan Pilih Rincian Kriteria Yang lain
                    </h4>
                @endif
                <div class="d-flex justify-content-end btn-dark">
                    {{$koss->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ms-3 mt-3">
    <h6 class="pt-5 text-decoration-underline">Note:</h6>
    <p style="font-style: italic">
        #Semakin sedikit kriteria yang anda pilih akan semakin banyak pilihan alternatif yang akan tampil pada halaman hasil rekomendasi<br>
        #Alternatif yang menghasilkan nilai score tertinggi akan menjadi ranking pertama dan alternatif atau rekomendasi terbaik.<br>
        #Jika alternatif tidak muncul maka kos yang anda cari belum ada<br>
        #Jika anda ingin melihat data real dari alternatif yang anda pilih, silahkan klik tombol "Lihat" pada kolom data real
    </p>
</div>

<form action="{{ route('komen') }}" method="POST">
    @csrf
    @foreach ($ids as $id)
        <input type="hidden" name="ids[]" value="{{ $id }}">
    @endforeach

    <div class="d-flex pt-5 pb-3">
        <i class="fa-solid fa-comment fa-2xl ms-3"></i>
            <input type="text" name="isi" placeholder="Add a comment" style="border-right: none; border-left: none; border-top: none; width:400px">
        <button type='submit' class="dropdown-item" href="">
            <i class="fa-solid fa-paper-plane fa-lg"></i>
        </button>
    </div>
</form>

<div class="card" style="width: 400px; height: 370px">
    <div class="card-body">
      <div class="scrollable" style="overflow-y: auto; max-height: 300px;">
    @foreach ($komens as $komen)
        <div class="">
            <i class="fa-regular fa-user fa-lg ms-4"></i>
            Anonimus
        </div>
        <div class="pb-4 ms-5">{{$komen->isi}}</div>
    @endforeach
      </div>
    </div>
  </div>

  <script>
    function limitRadioSelection() {
        var selectedRadios = document.querySelectorAll('#alternatif input[type="radio"]:checked');

        if (selectedRadios.length >= 3) {
            var allRadios = document.querySelectorAll('#alternatif input[type="radio"]');

            for (var i = 0; i < allRadios.length; i++) {
                if (!allRadios[i].checked) {
                    allRadios[i].disabled = true;
                }
            }
        } else {
            var disabledRadios = document.querySelectorAll('#alternatif input[type="radio"]:disabled');

            for (var j = 0; j < disabledRadios.length; j++) {
                disabledRadios[j].disabled = false;
            }
        }
    }

    var radios = document.querySelectorAll('#alternatif input[type="radio"]');
    for (var k = 0; k < radios.length; k++) {
        radios[k].addEventListener('change', limitRadioSelection);
    }

    function clearRadio() {
        let radios = document.querySelectorAll('#alternatif input[type="radio"]');
        radios.forEach(function(radio) {
            radio.checked = false;
            radio.disabled = false;
        });
    }
</script>s

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

</body>

</html>

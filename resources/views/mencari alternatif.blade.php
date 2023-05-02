<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mencari Alternatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="{{ route('dashboard') }}">
            <img src="/image/logo.png" alt="" width="100px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alternatif') }}">Mencari Alternatif</a>
                </li>
            </ul>
        </div>
    </nav>

    <div style="margin: 15px">
        <h4 style="font-style: bold">Memilih Kriteria.</h4>
        <p>Pilihlah 3 kriteria di bawah ini yang anda butuhkan ketika ingin mencari kos:</p>
    </div>

    <form action="{{ route('pilih_alternatif') }}" method="POST">
        @csrf
        <div class="px-5 mb-5">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Pilihan 1</label>
                <select class="form-select" id="inputGroupSelect01" name="pilihan1">
                    <option selected>Choose...</option>
                    <option value="kondisi kamar">Kondisi Kamar</option>
                    <option value="harga">Harga</option>
                    <option value="fasilitas kamar">Fasilitas Kamar</option>
                    <option value="kondisi kamar mandi">Kondisi Kamar Mandi</option>
                    <option value="keamanan">Keamanan</option>
                    <option value="jarak">Jarak</option>
                    <option value="lingkungan">Lingkungan</option>
                    <option value="fasilitas umum">Fasilitas Umum</option>
                    <option value="luas kamar">Luas Kamar</option>
                    <option value="parkiran">Parkiran</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Pilihan 2</label>
                <select class="form-select" id="inputGroupSelect01" name="pilihan2">
                    <option selected>Choose...</option>
                    <option value="kondisi kamar">Kondisi Kamar</option>
                    <option value="harga">Harga</option>
                    <option value="fasilitas kamar">Fasilitas Kamar</option>
                    <option value="kondisi kamar mandi">Kondisi Kamar Mandi</option>
                    <option value="keamanan">Keamanan</option>
                    <option value="jarak">Jarak</option>
                    <option value="lingkungan">Lingkungan</option>
                    <option value="fasilitas umum">Fasilitas Umum</option>
                    <option value="luas kamar">Luas Kamar</option>
                    <option value="parkiran">Parkiran</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Pilihan 3</label>
                <select class="form-select" id="inputGroupSelect01" name="pilihan3">
                    <option selected>Choose...</option>
                    <option value="kondisi kamar">Kondisi Kamar</option>
                    <option value="harga">Harga</option>
                    <option value="fasilitas kamar">Fasilitas Kamar</option>
                    <option value="kondisi kamar mandi">Kondisi Kamar Mandi</option>
                    <option value="keamanan">Keamanan</option>
                    <option value="jarak">Jarak</option>
                    <option value="lingkungan">Lingkungan</option>
                    <option value="fasilitas umum">Fasilitas Umum</option>
                    <option value="luas kamar">Luas Kamar</option>
                    <option value="parkiran">Parkiran</option>
                </select>
            </div>

            <div class="justify-content-end d-flex">
                <input type="submit" class="btn btn-dark" value="Simpan">
            </div>
        </div>
    </form>



    <div style="margin: 15px">
        <h4 style="font-style: bold">Rincian Kriteria.</h4>
        <p>Pilihlah rincian kriteria - kriteria di bawah ini yang anda inginkan berdasarkan 3 kriteria yang anda pilih di atas:</p>
    </div>

@if (!!$pilihan1)
    <form action="{{ route('hasil') }}" method="POST">
        @csrf
        <div class="px-5">
            <select class="form-select mb-3" id="inputGroupSelect01" name="C1"
                @if ($pilihan1 == 'kondisi kamar' || $pilihan2 == 'kondisi kamar' || $pilihan3 == 'kondisi kamar') @else hidden @endif>
                <option value=""selected style="font-style: italic">Kondisi Kamar</option>
                <option value="1">Lembab, Ventilasi, Jendela, Paparan Sinar Matahari</option>
                <option value="2">Lembab, Ventilasi, Jendela</option>
                <option value="3">Kering, Jendela</option>
                <option value="4">Kering, Jendela, Blower</option>
                <option value="5">Kering, Ventilasi, Jendela</option>
                <option value="6">Kering, Jendela, Paparan Sinar Matahari</option>
                <option value="7">Kering, Ventilasi, Jendela, Paparan Sinar Matahari</option>
                <option value="8">Kering, Ventilasi, Jendela, Blower, Paparan Sinar Matahari</option>
            </select>

            <select class="form-select mb-3" id="inputGroupSelect01" name="C2"
                @if ($pilihan1 == 'harga' || $pilihan2 == 'harga' || $pilihan3 == 'harga') @else hidden @endif>
                <option value=""selected style="font-style: italic">Harga</option>
                <option value="1">> 1.800.000</option>
                <option value="2">1.600.000 < H ≤ 1.800.000</option>
                <option value="3">1.400.000 < H ≤ 1.600.000</option>
                <option value="4">1.200.000 < H ≤ 1.400.000</option>
                <option value="5">1.000.000 < H ≤ 1.200.000</option>
                <option value="6">800.000 < H ≤ 1.000.000</option>
                <option value="7">600.000 < H ≤ 800.000</option>
                <option value="8">≤ Rp 600.000</option>
            </select>

            <select class="form-select mb-3" id="inputGroupSelect01" name="C3"
                @if ($pilihan1 == 'fasilitas kamar' || $pilihan2 == 'fasilitas kamar' || $pilihan3 == 'fasilitas kamar') @else hidden @endif>
                <option value=""selected style="font-style: italic">Fasilitas Kamar</option>
                <option value="1">Kasur, Lemari, Meja</option>
                <option value="2">WC, Kasur, Token Listrik</option>
                <option value="3">WC, Kasur, Lemari, Meja</option>
                <option value="4">Kasur, Lemari, Meja, Kipas Angin</option>
                <option value="5">Kasur, Lemari, Meja, Kursi, Kipas Angin</option>
                <option value="6">Kasur, Lemari, Meja, Kursi, AC</option>
                <option value="7">WC, Kasur, Lemari, Meja, Kursi, Kipas Angin</option>
                <option value="8">WC, Kasur, Lemari, Meja, Kursi, AC</option>
            </select>

            <select class="form-select mb-3" id="inputGroupSelect01" name="C4"
                @if ($pilihan1 == 'kondisi kamar mandi' || $pilihan2 == 'kondisi kamar mandi' || $pilihan3 == 'kondisi kamar mandi') @else hidden @endif>
                <option value=""selected style="font-style: italic">Kondisi Kamar Mandi</option>
                <option value="1">Kloset Jongkok, Ventilasi, Lembab, Kotor</option>
                <option value="2">Kloset Jongkok, Ventilasi, Lembab, Bersih</option>
                <option value="3">Kloset Jongkok, Kering, Bersih</option>
                <option value="4">Kloset duduk, Kering, Bersih, Ventilasi</option>
                <option value="5">Kloset Jongkok, Kering, Bersih, Ventilasi</option>
                <option value="6">Kloset Duduk, Kering, Bersih, Blower</option>
                <option value="7">Kloset Jongkok, Kering, Bersih, Blower</option>
                <option value="8">Kloset Duduk, Kering, Bersih, Ventilasi, Blower</option>
            </select>

            <select class="form-select mb-3" id="inputGroupSelect01" name="C5"
                @if ($pilihan1 == 'keamanan' || $pilihan2 == 'keamanan' || $pilihan3 == 'keamanan') @else hidden @endif>
                <option value=""selected style="font-style: italic">Keamanan</option>
                <option value="1">Tanpa Keamanan</option>
                <option value="2">Penjaga Kos</option>
                <option value="3">Pagar</option>
                <option value="4">Pagar, Penjaga Kos</option>
                <option value="5">Penjaga Kos, CCTV Parkiran/Luar</option>
                <option value="6">Penjaga Kos, CCTV Parkiran/Luar, CCTV ruangan Umum</option>
                <option value="7">Pagar, Penjaga Kos, CCTV Parkiran/Luar</option>
                <option value="8">Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan umum</option>
            </select>

            <select class="form-select mb-3" id="inputGroupSelect01" name="C6"
                @if ($pilihan1 == 'jarak' || $pilihan2 == 'jarak' || $pilihan3 == 'jarak') @else hidden @endif>
                <option value=""selected style="font-style: italic">Jarak</option>
                <option value="1">> 6 km</option>
                <option value="2">5 km < J ≤ 6 km</option>
                <option value="3">4 km < J ≤ 5 km</option>
                <option value="4">3 km < J ≤ 4 km</option>
                <option value="5">2 km < J ≤ 3 km</option>
                <option value="6">1 km < J ≤ 2 km</option>
                <option value="7">500 m < J ≤ 1 km</option>
                <option value="8">≤ 500 m</option>
            </select>

            <select class="form-select mb-3" id="inputGroupSelect01" name="C7"
                @if ($pilihan1 == 'lingkungan' || $pilihan2 == 'lingkungan' || $pilihan3 == 'lingkungan') @else hidden @endif>
                <option value=""selected style="font-style: italic">Lingkungan</option>
                <option value="1">Sunyi</option>
                <option value="2">Ramai</option>
                <option value="3">Sunyi, Dekat Pertokoan</option>
                <option value="4">Ramai, Dekat Pertokoan</option>
                <option value="5">Sunyi, Dekat Pertokoan, Dekat Warung Makan</option>
                <option value="6">Ramai, Dekat Pertokoan, Dekat Warung Makan</option>
                <option value="7">Sunyi, Dekat Pertokoan, Dekat SPBU, Dekat Supermarket, Dekat Warung Makan</option>
                <option value="8">Ramai, Dekat Pertokoan, Dekat SPBU, Dekat Supermarket, Dekat Warung Makan</option>
            </select>

            <select class="form-select mb-3" id="inputGroupSelect01" name="C8"
                @if ($pilihan1 == 'fasilitas umum' || $pilihan2 == 'fasilitas umum' || $pilihan3 == 'fasilitas umum') @else hidden @endif>
                <option value=""selected style="font-style: italic">Fasilitas Umum</option>
                <option value="1">Listrik, Air, Jemuran, WC Umum, Wifi</option>
                <option value="2">Dapur, Listrik, Air, Jemuran, Wifi</option>
                <option value="3">Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi</option>
                <option value="4">Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi</option>
                <option value="5">Dapur, Peralatan Dapur, Listrik, Air, Jemuran, WC Umum, Wifi, Ruang Tamu</option>
                <option value="6">Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi</option>
                <option value="7">Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu</option>
                <option value="8">Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu</option>
            </select>

            <select class="form-select mb-3" id="inputGroupSelect01" name="C9"
                @if ($pilihan1 == 'luas kamar' || $pilihan2 == 'luas kamar' || $pilihan3 == 'luas kamar') @else hidden @endif>
                <option value=""selected style="font-style: italic">Luas Kamar</option>
                <option value="1">< 4 𝑚^2</option>
                <option value="2">4 𝑚^2 < LK ≤ 6 𝑚^2</option>
                <option value="3">6 𝑚^2 < LK ≤ 9 𝑚^2</option>
                <option value="4">9 𝑚^2 < LK ≤ 12 𝑚^2</option>
                <option value="5">12 𝑚^2 < LK ≤ 15 𝑚^2</option>
                <option value="6">15 𝑚^2 < LK ≤ 16 𝑚^2</option>
                <option value="7">16 𝑚^2 < LK ≤ 20 𝑚^2</option>
                <option value="8">> 20 𝑚^2</option>
            </select>

            <select class="form-select mb-3" id="inputGroupSelect01" name="C10"
                @if ($pilihan1 == 'parkiran' || $pilihan2 == 'parkiran' || $pilihan3 == 'parkiran') @else hidden @endif>
                <option value=""selected style="font-style: italic">Parkiran</option>
                <option value="1">Tidak Ada</option>
                <option value="2">1 - 2 Motor</option>
                <option value="3">2 - 4 Motor</option>
                <option value="4">4 - 7 Motor</option>
                <option value="5">7 - 10 Motor</option>
                <option value="6">> 10 Motor</option>
                <option value="7">7 - 10 Motor & 1 - 2 Mobil</option>
                <option value="8">10 < MTR ≤ 25 & 1 ≤ MBL ≤ 5</option>
            </select>

            <div class="justify-content-end d-flex">
                <input type="submit" class="btn btn-dark" value="Proses">
            </div>
        </div>
    </form>
@endif

    <div class="ms-3">
        <h6>Note:</h6>
        <p style="font-style: italic">Hasil rekomendasi kos pada halaman hasil akan tampil berdasarkan rincian kriteria yang anda pilih</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>

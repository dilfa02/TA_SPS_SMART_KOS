<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mencari Alternatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="{{route('dashboard')}}">
        <img src="/image/logo.png" alt="" width="100px" height="50px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('alternatif')}}">Mencari Alternatif</a>
        </li>
    </ul>
    </div>
</nav>

<div style="margin: 15px" class="mb-5">
    <h3>Rincian Kriteria.</h3>
    <p>Pilihlah rincian kriteria - kriteria yang anda inginkan di bawah ini:</p>
</div>

<form action="{{route('simpan')}}">
    @csrf
    <div class="px-5">
    <select class="form-select mb-3" aria-label="Default select example">
        <option selected style="font-style: italic">Kondisi Kamar</option>
        <option value="1">Lembab, Ventilasi, Jendela, Paparan Sinar Matahari</option>
        <option value="2">Lembab, Ventilasi, Jendela</option>
        <option value="3">Kering, Jendela</option>
        <option value="4">Kering, Jendela, Blower</option>
        <option value="5">Kering, Ventilasi, Jendela</option>
        <option value="6">Kering, Jendela, Paparan Sinar Matahari</option>
        <option value="7">Kering, Ventilasi, Jendela, Paparan Sinar Matahari</option>
        <option value="8">Kering, Ventilasi, Jendela, Blower, Paparan Sinar Matahari</option>
    </select>

    <select class="form-select mb-3" aria-label="Default select example">
        <option selected style="font-style: italic">Harga</option>
        <option value="1">> 1.800.000</option>
        <option value="2">1.600.000 < H ≤ 1.800.000</option>
        <option value="3">1.400.000 < H ≤ 1.600.000</option>
        <option value="4">1.200.000 < H ≤ 1.400.000</option>
        <option value="5">1.000.000 < H ≤ 1.200.000</option>
        <option value="6">800.000 < H ≤ 1.000.000</option>
        <option value="7">600.000 < H ≤ 800.000</option>
        <option value="8">≤ Rp 600.000</option>
    </select>

    <select class="form-select mb-3" aria-label="Default select example">
        <option selected style="font-style: italic">Fasilitas Kamar</option>
        <option value="1">Kasur, Lemari, Meja</option>
        <option value="2">WC, Kasur, Token Listrik</option>
        <option value="3">WC, Kasur, Lemari, Meja</option>
        <option value="4">Kasur, Lemari, Meja, Kipas Angin</option>
        <option value="5">Kasur, Lemari, Meja, Kursi, Kipas Angin</option>
        <option value="6">Kasur, Lemari, Meja, Kursi, AC</option>
        <option value="7">WC, Kasur, Lemari, Meja, Kursi, Kipas Angin</option>
        <option value="8">WC, Kasur, Lemari, Meja, Kursi, AC</option>
    </select>

    <select class="form-select mb-3" aria-label="Default select example">
        <option selected style="font-style: italic">Kondisi Kamar Mandi</option>
        <option value="1">Kloset Jongkok, Ventilasi, Lembab, Kotor</option>
        <option value="2">Kloset Jongkok, Ventilasi, Lembab, Bersih</option>
        <option value="3">Kloset Jongkok, Kering, Bersih</option>
        <option value="4">Kloset duduk, Kering, Bersih, Ventilasi</option>
        <option value="5">Kloset Jongkok, Kering, Bersih, Ventilasi</option>
        <option value="6">Kloset Duduk, Kering, Bersih, Blower</option>
        <option value="7">Kloset Jongkok, Kering, Bersih, Blower</option>
        <option value="8">Kloset Duduk, Kering, Bersih, Ventilasi, Blower</option>
    </select>

    <select class="form-select mb-3" aria-label="Default select example">
        <option selected style="font-style: italic">Keamanan</option>
        <option value="1">Tanpa Keamanan</option>
        <option value="2">Penjaga Kos</option>
        <option value="3">Pagar</option>
        <option value="4">Pagar, Penjaga Kos</option>
        <option value="5">Penjaga Kos, CCTV Parkiran/Luar</option>
        <option value="6">Penjaga Kos, CCTV Parkiran/Luar, CCTV ruangan Umum</option>
        <option value="7">Pagar, Penjaga Kos, CCTV Parkiran/Luar</option>
        <option value="8">Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan umum</option>
    </select>

    <div class="justify-content-end d-flex">
        <input type="submit" class="btn btn-dark" value="Simpan">
    </div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

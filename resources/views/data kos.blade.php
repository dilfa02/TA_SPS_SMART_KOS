<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kos</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('datakos') }}">Data Kos</a>
                </li>
            </ul>
        </div>
    </nav>

    <h2 class="text-center py-3">Data Kos</h2>


    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              [L] Jawas
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body">
              <strong>Kondisi Kamar:</strong> Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
              <strong>Harga:</strong> Rp 1.200.000<br>
              <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
              <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Blower<br>
              <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
              <strong>Jarak:</strong> 1,7 KM<br>
              <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
              <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
              <strong>Luas Kamar:</strong> 12 M^2<br>
              <strong>Parkiran:</strong> 7-10 Motor & 1 Mobil
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              [L] D'carjoe A18
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>Kondisi Kamar:</strong> Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                <strong>Harga:</strong> Rp 1.300.000<br>
                <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                <strong>Jarak:</strong> 2,2 KM<br>
                <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                <strong>Luas Kamar:</strong> 9 M^2<br>
                <strong>Parkiran:</strong> 4 - 7 Motor
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                [L] Ar-Rayyan A (Type 1)
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.400.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 1,7 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9,9 M^2<br>
                    <strong>Parkiran:</strong> 7 - 10 Motor & 1 Mobil
            </div>
          </div>
      </div>



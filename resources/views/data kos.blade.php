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
                    <a class="nav-link" href="{{ route('datakos') }}">Melihat Data Real Kos</a>
                </li>
            </ul>
        </div>
    </nav>

    <h3 class="text-start pt-4 px-3">Kos Laki - Laki</h3>

    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    Jawas
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
                    <strong>Parkiran:</strong> 7 - 10 Motor & 1 Mobil
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    D'carjoe A18
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
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    Ar-Rayyan A (Type 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
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

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFour">
                    JK (Type 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.200.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Blower<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 1,6 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 8,4 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFive">
                    D'carjoe A7
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                    <strong>Harga:</strong> Rp 1.400.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                    <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 2,1 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 5 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseSix">
                    Ar - Rayyan A (Type 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.000.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
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

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseSeven">
                    JK (Type 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 900.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Blower<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 1,6 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 8,4 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseEight">
                    Amanah
                </button>
            </h2>
            <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 850.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 1,3 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseNine">
                    Bugenvil
                </button>
            </h2>
            <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 750.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Token Listrik<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 1,8 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                    <strong>Luas Kamar:</strong> 12 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor & > 1 Mobil
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTen">
                    Ramothy
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 850.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Tanpa Keamanan<br>
                    <strong>Jarak:</strong> 2 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseEleven">
                    Ar - Rayyan B
                </button>
            </h2>
            <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 750.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Token Listrik<br>
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

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwelve">
                    Barokah
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 700.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                    <strong>Jarak:</strong> 1,8 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirteen">
                    3G Kost
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 800.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 2 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi<br>
                    <strong>Luas Kamar:</strong> 8,3 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFourteen" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFourteen">
                    Haji Asa'
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFourteen" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.000.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih<br>
                    <strong>Keamanan:</strong> Pagar<br>
                    <strong>Jarak:</strong> 1,7 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Listrik, Air, Jemuran, Wifi<br>
                    <strong>Luas Kamar:</strong> 10,5 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFifteen" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFifteen">
                    Nawra
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFifteen" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 750.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Penjaga Kos<br>
                    <strong>Jarak:</strong> 1,3 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 12 M^2<br>
                    <strong>Parkiran:</strong> 7 - 10 Motor & 1 Mobil
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseSixteen" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseSixteen">
                    Syariah
                </button>
            </h2>
            <div id="panelsStayOpen-collapseSixteen" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 700.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Tanpa Keamanan<br>
                    <strong>Jarak:</strong> 1,5 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseSeventeen" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseSeventeen">
                    Wijaya
                </button>
            </h2>
            <div id="panelsStayOpen-collapseSeventeen" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 700.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Penjaga Kos<br>
                    <strong>Jarak:</strong> 1,4 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 10,5 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseEighteen" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseEighteen">
                    Adam
                </button>
            </h2>
            <div id="panelsStayOpen-collapseEighteen" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Lembab, Ventilasi, Jendela<br>
                    <strong>Harga:</strong> Rp 600.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                    <strong>Jarak:</strong> 4,2 KM<br>
                    <strong>Lingkungan:</strong> Sunyi<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 6 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseNineteen" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseNineteen">
                    Darmansyah
                </button>
            </h2>
            <div id="panelsStayOpen-collapseNineteen" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 600.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Penjaga Kos<br>
                    <strong>Jarak:</strong> 2,2 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                    <strong>Fasilitas Umum:</strong> Listrik, Air, Jemuran, WC Umum, Wifi<br>
                    <strong>Luas Kamar:</strong> 6 M^2<br>
                    <strong>Parkiran:</strong> 2 - 4 Motor
                </div>
            </div>
        </div>

        <h3 class="text-start pt-5 px-3">Kos Perempuan</h3>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwenty" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwenty">
                    D'carjoe A11 (Type 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwenty" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.500.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                    <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 2,1 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwentyOne" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwentyOne">
                    D'carjoe A13
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwentyOne" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.300.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Ventilasi, Blower<br>
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
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwentyTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwentyTwo">
                    D'carjoe A10
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwentyTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.200.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Ventilasi, Blower<br>
                    <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 2,1 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwentyThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwentyThree">
                    D'carjoe A14 (Type 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwentyThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.550.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                    <strong>Keamanan:</strong> Penjaga Kos<br>
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
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwentyFour" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwentyFour">
                    D'carjoe A11 (Type 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwentyFour" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                    <strong>Harga:</strong> Rp 1.250.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                    <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 2,1 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwentyFive" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwentyFive">
                    Kartika Putri
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwentyFive" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.000.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 1,7 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 8,9 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwentySix" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwentySix">
                    Banyu Alfa (Type 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwentySix" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Blower, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 850.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                    <strong>Jarak:</strong> 1,3 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwentySeven" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwentySeven">
                    D'carjoe A14 (type 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwentySeven" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                    <strong>Harga:</strong> Rp 1.400.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                    <strong>Keamanan:</strong> Penjaga Kos<br>
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
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwentyEight" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwentyEight">
                    Permata
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwentyEight" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Blower, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.000.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                    <strong>Jarak:</strong> 1,7 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 5,3 M^2<br>
                    <strong>Parkiran:</strong> 7 - 10 Motor & 1 Mobil
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwentyNine" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwentyNine">
                    Banyu Alfa (Type 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwentyNine" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Jendela<br>
                    <strong>Harga:</strong> Rp 1.000.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                    <strong>Jarak:</strong> 1,3 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 15 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirty" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirty">
                    D'carjoe A2
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirty" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.200.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                    <strong>Keamanan:</strong> Penjaga Kos<br>
                    <strong>Jarak:</strong> 2,1 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirtyOne" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirtyOne">
                    Raflesia (Type 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirtyOne" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Jendela<br>
                    <strong>Harga:</strong> Rp 900.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, AC<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 1,9 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor & > 1 Mobil
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirtyTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirtyTwo">
                    Raflesia (Type 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirtyTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                    <strong>Harga:</strong> Rp 800.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 1,9 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor & > 1 Mobil
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirtyThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirtyThree">
                    Pink (Type 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirtyThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                    <strong>Harga:</strong> Rp 900.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                    <strong>Jarak:</strong> 1,7 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirtyFour" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirtyFour">
                    Pink (Type 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirtyFour" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Jendela, Blower<br>
                    <strong>Harga:</strong> Rp 1.000.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                    <strong>Jarak:</strong> 1,7 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirtyFive" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirtyFive">
                    Audy
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirtyFive" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 1.025.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                    <strong>Jarak:</strong> 1,4 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 6,9 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirtySix" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirtySix">
                    D'carjoe B1
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirtySix" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 700.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                    <strong>Keamanan:</strong> Penjaga Kos<br>
                    <strong>Jarak:</strong> 2,1 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirtySeven" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirtySeven">
                    Hira
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirtySeven" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 800.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                    <strong>Jarak:</strong> 1,6 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirtyEight" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirtyEight">
                    Putri ITK
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirtyEight" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 800.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Tanpa Keamanan<br>
                    <strong>Jarak:</strong> 2,7 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThirtyNine" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThirtyNine">
                    Gue
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThirtyNine" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 900.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar<br>
                    <strong>Jarak:</strong> 1,4 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 10,5 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseForty" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseForty">
                    Threefa
                </button>
            </h2>
            <div id="panelsStayOpen-collapseForty" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 750.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                    <strong>Jarak:</strong> 1,7 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 9 M^2<br>
                    <strong>Parkiran:</strong> 7 - 10 Motor & 1 Mobil
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFortyOne" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFortyOne">
                    Hera
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFortyOne" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                    <strong>Harga:</strong> Rp 850.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Penjaga Kos<br>
                    <strong>Jarak:</strong> 3,1 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 8,1 M^2<br>
                    <strong>Parkiran:</strong> 2 - 4 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFortyTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFortyTwo">
                    Sidrap 1
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFortyTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 800.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                    <strong>Jarak:</strong> 1 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                    <strong>Luas Kamar:</strong> 7,5 M^2<br>
                    <strong>Parkiran:</strong> 7 - 10 Motor & 1 Mobil
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFortyThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFortyThree">
                    Dua Putra
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFortyThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                    <strong>Harga:</strong> Rp 800.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                    <strong>Jarak:</strong> 2,4 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 7,6 M^2<br>
                    <strong>Parkiran:</strong> 7 - 10 Motor & 1 Mobil
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFortyFour" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFortyFour">
                    Anugrah
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFortyFour" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 850.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar<br>
                    <strong>Jarak:</strong> 1,4 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 7 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFortyFive" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFortyFive">
                    Dea
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFortyFive" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                    <strong>Harga:</strong> Rp 950.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar<br>
                    <strong>Jarak:</strong> 1,7 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Listrik, Air, Jemuran, Wifi<br>
                    <strong>Luas Kamar:</strong> 12 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFortySix" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFortySix">
                    Bugenvil
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFortySix" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Lembab, Ventilasi, Jendela<br>
                    <strong>Harga:</strong> Rp 900.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                    <strong>Jarak:</strong> 1,6 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi<br>
                    <strong>Luas Kamar:</strong> 7,4 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFortySeven" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFortySeven">
                    Warbun
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFortySeven" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan sinar Matahari<br>
                    <strong>Harga:</strong> Rp 900.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Penjaga Kos<br>
                    <strong>Jarak:</strong> 1,4 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                    <strong>Luas Kamar:</strong> 7,5 M^2<br>
                    <strong>Parkiran:</strong> 4 - 7 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFortyEight" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFortyEight">
                    Warung Abang jhon
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFortyEight" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Jendela, Paparan sinar Matahari<br>
                    <strong>Harga:</strong> Rp 800.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                    <strong>Jarak:</strong> 1,4 KM<br>
                    <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 6 M^2<br>
                    <strong>Parkiran:</strong> 2 - 4 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFortyNine" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFortyNine">
                    Azriel
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFortyNine" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Lembab, Ventilasi, Jendela, Paparan sinar Matahari<br>
                    <strong>Harga:</strong> Rp 850.000<br>
                    <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                    <strong>Jarak:</strong> 1,6 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                    <strong>Luas Kamar:</strong> 9,9 M^2<br>
                    <strong>Parkiran:</strong> 7 - 10 Motor & 1 Mobil
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFifty" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFifty">
                    Wiwit Jayantina
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFifty" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan sinar Matahari<br>
                    <strong>Harga:</strong> Rp 550.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih<br>
                    <strong>Keamanan:</strong> Tanpa Keamanan<br>
                    <strong>Jarak:</strong> 1,2 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 5 M^2<br>
                    <strong>Parkiran:</strong> 1 - 2 Motor
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFiftyOne" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFiftyOne">
                    Biru
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFiftyOne" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Kondisi Kamar:</strong>Lembab, Ventilasi, Jendela<br>
                    <strong>Harga:</strong> Rp 500.000<br>
                    <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                    <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Kotor, Ventilasi<br>
                    <strong>Keamanan:</strong> Pagar<br>
                    <strong>Jarak:</strong> 1,2 KM<br>
                    <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                    <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                    <strong>Luas Kamar:</strong> 6,2 M^2<br>
                    <strong>Parkiran:</strong> > 10 Motor & > 1 Mobil
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
        </script>
</body>

</html>

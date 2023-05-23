<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Rekomendasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
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

    <h2 class="pt-5 text-center"><b>Hasil Rekomendasi</b></h2>

    <div class="px-5">
        <div style="justify-content: right" class="d-flex mb-3 py-2">
            <div class="btn-group">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
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

        <div class="mb-5">
            @if (count($koss))
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Rank</th>
                            <th scope="col">Alternatif</th>
                            <th scope="col">Score</th>
                            <th scope="col">Data Real</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($koss as $kos)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $kos->alternatif }}</td>
                                <td>{{ $kos->hasil }}</td>
                                <td><button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                        data-bs-target="#{{ str_replace(' ', '', $kos->alternatif) }}">
                                        Lihat
                                    </button></td>
                            </tr>
                            <div class="modal fade" id="Jawas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong> Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                            <strong>Harga:</strong> Rp 1.200.000<br>
                                            <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Blower<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                            <strong>Jarak:</strong> 1,7 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 12 M^2<br>
                                            <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA18" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Ar-RayyanA(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                            <strong>Harga:</strong> Rp 1.400.000<br>
                                            <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, AC<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                            <strong>Jarak:</strong> 1,7 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 9,9 M^2<br>
                                            <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="JK(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                                            <strong>Harga:</strong> Rp 1.400.000<br>
                                            <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Duduk, Kering, Bersih, Blower<br>
                                            <strong>Keamanan:</strong> Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                            <strong>Jarak:</strong> 2,1 KM<br>
                                            <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 9 M^2<br>
                                            <strong>Parkiran:</strong> 4 - 7 Motor
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Ar-RayyanA(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                            <strong>Harga:</strong> Rp 1.000.000<br>
                                            <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                            <strong>Jarak:</strong> 1,7 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 9,9 M^2<br>
                                            <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="JK(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Amanah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Bugenvil(L)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                            <strong>Harga:</strong> Rp 750.000<br>
                                            <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Token Listrik<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                            <strong>Jarak:</strong> 1,8 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                                            <strong>Luas Kamar:</strong> 12 M^2<br>
                                            <strong>Parkiran:</strong> 10 < MTR ≤ 25 & 1 ≤ MBL ≤ 5
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Ramothy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Ar-RayyanB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Paparan Sinar Matahari<br>
                                            <strong>Harga:</strong> Rp 750.000<br>
                                            <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Token Listrik<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                            <strong>Jarak:</strong> 1,7 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 9,9 M^2<br>
                                            <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Barokah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="3GKost" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="HajiAsa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Nawra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                            <strong>Harga:</strong> Rp 750.000<br>
                                            <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Penjaga Kos<br>
                                            <strong>Jarak:</strong> 1,3 KM<br>
                                            <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 12 M^2<br>
                                            <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Syariah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Wijaya" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Adam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Darmansyah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA11(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA14(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA11(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="KartikaPutri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="BanyuAlfa(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA14(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Permata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Blower, Paparan Sinar Matahari<br>
                                            <strong>Harga:</strong> Rp 1.000.000<br>
                                            <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                            <strong>Jarak:</strong> 1,7 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 5,3 M^2<br>
                                            <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="BanyuAlfa(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Raflesia(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Jendela<br>
                                            <strong>Harga:</strong> Rp 900.000<br>
                                            <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, AC<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                            <strong>Jarak:</strong> 1,9 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 9 M^2<br>
                                            <strong>Parkiran:</strong> 10 < MTR ≤ 25 & 1 ≤ MBL ≤ 5
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Raflesia(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                                            <strong>Harga:</strong> Rp 800.000<br>
                                            <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kursi, Kipas Angin<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                            <strong>Jarak:</strong> 1,9 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 9 M^2<br>
                                            <strong>Parkiran:</strong> 10 < MTR ≤ 25 & 1 ≤ MBL ≤ 5
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Pink(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Pink(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Audy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeB1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Hira" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="PutriITK" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Gue" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Threefa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                            <strong>Harga:</strong> Rp 750.000<br>
                                            <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Kering, Bersih<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                                            <strong>Jarak:</strong> 1,7 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 9 M^2<br>
                                            <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Hera" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Sidrap1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela, Paparan Sinar Matahari<br>
                                            <strong>Harga:</strong> Rp 800.000<br>
                                            <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja, Kipas Angin<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar, CCTV Ruangan Umum<br>
                                            <strong>Jarak:</strong> 1 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                                            <strong>Luas Kamar:</strong> 7,5 M^2<br>
                                            <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="DuaPutra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Kering, Ventilasi, Jendela<br>
                                            <strong>Harga:</strong> Rp 800.000<br>
                                            <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos, CCTV Parkiran/Luar<br>
                                            <strong>Jarak:</strong> 2,4 KM<br>
                                            <strong>Lingkungan:</strong> Ramai, Dekat Pertokoan, Dekat Warung Makan, Dekat SPBU, Dekat Supermarket<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 7,6 M^2<br>
                                            <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Anugrah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Dea" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Bugenvil(P)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Warbun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="WarungAbangJon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Azriel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Lembab, Ventilasi, Jendela, Paparan sinar Matahari<br>
                                            <strong>Harga:</strong> Rp 850.000<br>
                                            <strong>Fasilitas Kamar:</strong> WC Dalam, Kasur, Lemari, Meja<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Bersih, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar, Penjaga Kos<br>
                                            <strong>Jarak:</strong> 1,6 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Listrik, Air, Kulkas, Jemuran, WC Umum, Wifi<br>
                                            <strong>Luas Kamar:</strong> 9,9 M^2<br>
                                            <strong>Parkiran:</strong> 7 - 10 Motor & 1 - 2 Mobil
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="WiwitJayantina" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Biru" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Real</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong>Kondisi Kamar:</strong>Lembab, Ventilasi, Jendela<br>
                                            <strong>Harga:</strong> Rp 500.000<br>
                                            <strong>Fasilitas Kamar:</strong> Kasur, Lemari, Meja<br>
                                            <strong>Kondisi Kamar Mandi:</strong> Kloset Jongkok, Lembab, Kotor, Ventilasi<br>
                                            <strong>Keamanan:</strong> Pagar<br>
                                            <strong>Jarak:</strong> 1,2 KM<br>
                                            <strong>Lingkungan:</strong> Sunyi, Dekat Pertokoan, Dekat Warung Makan<br>
                                            <strong>Fasilitas Umum:</strong> Dapur, Peralatan Dapur, Listrik, Air, Jemuran, Wifi, Ruang Tamu<br>
                                            <strong>Luas Kamar:</strong> 6,2 M^2<br>
                                            <strong>Parkiran:</strong> 10 < MTR ≤ 25 & 1 ≤ MBL ≤ 5
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        </div>
    </div>

    <div class="ms-3">
        <h6 class="text-decoration-underline">Note:</h6>
        <p>#Alternatif yang menghasilkan nilai score tertinggi akan menjadi ranking pertama atau dapat disebut
            alternatif serta rekomendasi terbaik.<br>#Jika anda ingin melihat data real dari alternatif yang anda pilih, silahkan klik tombol "Lihat" pada kolom data real</p>
    </div>


    <form action="{{ route('komen') }}" method="POST">
        @csrf
        @foreach ($ids as $id)
            <input type="hidden" name="ids[]" value="{{ $id }}">
        @endforeach

        <div class="d-flex pt-5 pb-5">
            <i class="fa-solid fa-comment fa-2xl ms-3"></i>
                <textarea name="isi" placeholder="Add a comment" rows="1" cols="80" style="border-right: none; border-left: none; border-top: none"></textarea>
            <button type='submit' class="dropdown-item" href="">
                <i class="fa-solid fa-paper-plane fa-lg"></i>
            </button>
        </div>
    </form>

        @foreach ($komens as $komen)
            <div>
                <i class="fa-regular fa-user fa-lg ms-4"></i>
                Anonimus
            </div>
            <div class="pb-4 ms-5">{{$komen->isi}}</div>
        @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>

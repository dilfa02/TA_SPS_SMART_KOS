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
            <img src="{{ asset('image/logo.png') }}" alt="" width="100px" height="50px">
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
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Jawas</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0813 4666 6895<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/NyGiVyYc58c22RrZ8"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA18" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A18</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>08** **** ****<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/8vn8aVnDjbpGskCY8"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Ar-RayyanA(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ar-Rayyan A (Type1)</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0813 4750 5450<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/YN3eygWp29YPUYk5A"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="JK(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">JK (Type1)</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0811 5977 001<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/BGjD448NUEj3NVKS6"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A7</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0812 5809 993<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/HsfpnEmQaAbKWfag8"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Ar-RayyanA(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ar-Rayyan A (Type2)</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0813 4750 5450<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/YN3eygWp29YPUYk5A"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="JK(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">JK (Type2)</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0811 5977 001<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/BGjD448NUEj3NVKS6"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Amanah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Amanah</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Bugenvil(L)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Bugenvil (L)</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0812 5377 9502<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/YQw2C6ntC3h7HRy78"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Ramothy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ramothy</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0813 2966 0111<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/bKqRvAYkcpyK3iMw9"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Ar-RayyanB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ar-Rayyan B</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0813 4750 5450<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/YN3eygWp29YPUYk5A"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Barokah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Barokah</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0812 5829 584<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/2D2vatPwdWC1tWx99"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="3GKost" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">3G Kost</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0812 6586 171<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/XrDxho6zjMEXyv2w6"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="HajiAsa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Haji Asa</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>08** **** ****<br><br>
                                            <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Nawra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Nawra</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0821 5118 5692<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/t3ZR3ikUCoiCJwM17"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Syariah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Syariah</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Wijaya" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Wijaya</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>08** **** ****<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/D6PXFq8LZv2AYFR67"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Adam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Adam</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Darmansyah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Darmansyah</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA11(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A11 (Type1)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0813 4738 7284<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/8vn8aVnDjbpGskCY8"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A13</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0812 5834 2525<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/Cce1pJrEZXh2XDih9"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A10</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0822 1311 2311<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/P6KAmyBzB1v9hMnB7"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA14(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A14 (Type1)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0811 5443 032<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/5pt3Hs1AQhYT4Syr8"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA11(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A11 (Type2)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0813 4738 7284<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/kfoX5KkaVj3XdDRW6"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="KartikaPutri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Kartika Putri</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0813 8165 4483<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/UvKUkwyyKLdGacKN7"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="BanyuAlfa(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Banyu Alfa (Type2)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA14(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A14 (Type2)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0811 5443 032<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/iTV7gfMnMNdZKPKw7"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Permata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Permata</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="BanyuAlfa(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Banyu Alfa (Type1)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeA2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe A2</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>08** **** ****<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/JWcxPaTM3gfxNTDV8"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Raflesia(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Raflesia (Type1)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>08** **** ****<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/25JgzP25kVmNuQYE6"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Raflesia(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Raflesia (Type2)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>08** **** ****<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/25JgzP25kVmNuQYE6"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Pink(Type2)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Pink (Type2)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Pink(Type1)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Pink (Type1)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Audy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Audy</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="CarjoeB1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carjoe B1</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>08** **** ****<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/JWcxPaTM3gfxNTDV8"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Hira" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hira</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="PutriITK" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Putri ITK</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Gue" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Gue</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0812 5720 1525<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/KQH6Hg8NMoLMmcrc6"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Threefa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Threefa</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>08** **** ****<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/7ZpTaSez5TaHe3ot8"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Hera" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hera</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Sidrap1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Sidrap 1</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0812 5058 6459<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/Xdbpiv6ZxMapgCyG9"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="DuaPutra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Dua Putra</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0853 4809 0754<br><br>
                                            <strong>Lokasi:</strong><a href="https://maps.app.goo.gl/PtjEDmA6pYJaP1DM8"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Anugrah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Anugrah</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0813 4652 8247<br><br>
                                            <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Dea" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Dea</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Bugenvil(P)" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Bugenvil (P)</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Warbun" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Warbun</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="WarungAbangJon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Warung Abang Jon</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0813 4652 8247<br><br>
                                            <strong>Lokasi:</strong><a href="..."><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Azriel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Azriel</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                            <strong>CP:</strong><br>08** **** ****<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/S51K6CLfa9aWb11H7"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="WiwitJayantina" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Wiwit Jayantina</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <img src="{{ asset('image/logo.png') }}" class="rounded" width="50%" height="50%">
                                            </div><br><br>
                                            <strong>CP:</strong><br>0857 5166 0387<br><br>
                                            <strong>Lokasi:</strong><a href="https://goo.gl/maps/bTJDh34XqERDPRFq8"><br>Alamat Kos</a><br><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="Biru" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Biru</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>

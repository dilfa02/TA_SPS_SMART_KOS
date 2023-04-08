<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Rekomendasi</title>
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

    <h4 style="font-style: italic; margin: 15px">Hasil Rekomendasi</h4>

    <div class="px-5">
        <div style="justify-content: right" class="d-flex mb-3">
            <div class="btn-group">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Filter
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Laki-Laki</a></li>
                    <li><a class="dropdown-item" href="#">Perempuan</a></li>
                </ul>
            </div>
        </div>

        <div class="mb-5">
            <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Alternatif</th>
                    <th scope="col">Score</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>Kos 1</td>
                    <td>0,1122</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Kos 2</td>
                    <td>0,2333</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Kos 3</td>
                    <td>0,2443</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>

    <div class="ms-3">
        <h6>Note:</h6>
        <p>Alternatif yang menghasilkan nilai score tertinggi akan menjadi ranking pertama atau dapat disebut alternatif serta rekomendasi terbaik.</p>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
<div>
    <div style="text-align: center">
        <div class="my-5 fit-content">
            <img src="/image/logo.png" width="700px" height="300px">
        </div>
            <H4 style="font-size: 30px">SISTEM PENDUKUNG KEPUTUSAN <br> PEMILIHAN KOS AREA INSTITUT TEKNOLOGI KALIMANTAN <br> DENGAN MENGGUNAKAN METODE SMART </H4>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

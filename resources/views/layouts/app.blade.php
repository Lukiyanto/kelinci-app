<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Penjualan Kelinci</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('peternakan.index') }}">Peternakan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kandang.index') }}">Kandang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jenis-kelinci.index') }}">Jenis Kelinci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('induk-kelinci.index') }}">Induk Kelinci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('anak-kelinci.index') }}">Anak Kelinci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('perkawinan-kelinci.index') }}">Perkawinan Kelinci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('penjualan.index') }}">Penjualan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('detail-penjualan.index') }}">Detail Penjualan</a>
                </li>

                <!-- Tambahkan menu lainnya -->
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
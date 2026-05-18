<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Perpustakaan</a>

        <div>
            <a href="{{ route('anggota.index') }}" class="btn btn-outline-light me-2">
                Anggota
            </a>

            <a href="{{ route('kategori.index') }}" class="btn btn-outline-light">
                Kategori
            </a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
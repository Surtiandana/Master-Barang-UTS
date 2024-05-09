<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang Admin Barang</title>
    <!-- Menggunakan vite untuk kompilasi file SCSS -->
    @vite('resources/sass/app.scss')
    <!-- Menambahkan link untuk menggunakan animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        /* Menambahkan gaya khusus */
        body {
            background-color: maroon; /* Warna krem */
        }
        .img-thumbnail {
            max-width: 300px; /* Sesuaikan dengan lebar maksimum yang diinginkan */
            height: auto; /* Biarkan tinggi disesuaikan secara otomatis */
        }
        .welcome-heading {
            color: white; /* Ubah warna teks menjadi putih */
        }
    </style>
</head>
<body>
    <div class="container text-center my-5">
        <h1 class="mb-4 animate__animated animate__slideInLeft welcome-heading">Selamat Datang Admin Stok Barang </h1>
        {{-- Menggunakan pendekatan Vite untuk merujuk ke gambar --}}
        <img class="img-thumbnail animate__animated animate__slideInRight" src="{{ Vite::asset('resources/images/Barang.png') }}" alt="image">

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                {{-- Menambahkan kelas animate__animated untuk animasi --}}
                <a class="btn btn-danger animate__animated animate__fadeInUp" href="{{ route('home') }}">Masuk ke Halaman Admin</a>
            </div>
        </div>
    </div>
    <!-- Menggunakan vite untuk kompilasi file JavaScript -->
    @vite('resources/js/app.js')
</body>
</html>

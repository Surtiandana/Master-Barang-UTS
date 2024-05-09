<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .welcome {
            background-color: red;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .biodata {
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex; /* Menggunakan flexbox */
            align-items: center; /* Memusatkan vertikal */
        }

        .biodata h2 {
            color: red;
            margin-right: 20px; /* Jarak antara teks dan foto */
        }

        .photo {
            max-width: 150px;
            border-radius: 50%;
            margin-right: 20px; /* Jarak antara foto dan teks */
        }

        .photos {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            text-align: center;
            margin: auto; /* Memusatkan secara horizontal */
        }

        .photo-grid-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .photo-grid-item img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .admin-desc {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 20px;
        }

    </style>
</head>
<body style="background-color: #FFF8E1">
<body>
    <div class="container">
        <div class="welcome">
            <h1>Assalamualaikum wr.wb </h1>
            <p>Selamat Datang di Website Admin ^,^ </p>
        </div>
        <div class="biodata">
            <img src="https://cdndata.telkomuniversity.ac.id/1204220121/z1713506466166878c801c6f39b5ca4f95d4670872e.jpg" alt="Foto Mahasiswa" class="photo">
            <div>
                <h2>Biodata Mahasiswa</h2>
                <p>
                    <strong>Nama:</strong> Dhofiroh Azzah Labibah <br>
                    <strong>NIM:</strong> 1204220121 <br>
                    <strong>Program Studi:</strong> Sistem Informasi <br>
                    <strong>Semester:</strong> 4 <br>
                    <strong>Email:</strong> dhofiroh@student.telkomuniversity.ac.id
                </p>
            </div>
        </div>
        <div class="admin-desc">
            <h2>Tentang Admin</h2>
            <p>
                Admin adalah orang yang bertanggung jawab atas pengelolaan dan pengembangan website ini.
                Jika Anda memiliki pertanyaan atau masalah, jangan ragu untuk menghubungi kami melalui email di atas yach ^u^
            </p>
        </div>
        <div class="photos">
            <div class="photo-grid-item">
                <img src="https://tse1.mm.bing.net/th?id=OIP.8L5LTF7_DE4Wayn7N7mmCQHaD4&pid=Api&P=0&h=220" alt="Foto 1" style="width: 100%; height: auto;">
            </div>
            <div class="photo-grid-item">
                <img src="https://tse2.mm.bing.net/th?id=OIP.uDDarFwf9uSs8343IID9KAHaE7&pid=Api&P=0&h=220" alt="Foto 2" style="width: 100%; height: auto;">
            </div>
            <div class="photo-grid-item">
                <img src="https://tse4.mm.bing.net/th?id=OIP.BX5pU71w4in2tDF3Ar2ODAHaFj&pid=Api&P=0&h=220" alt="Foto 3" style="width: 100%; height: auto;">
            </div>
            <div class="photo-grid-item">
                <img src="https://www.harmony.co.id/wp-content/uploads/2020/11/contoh-laporan-stok-barang-gudang-harmony.jpg" alt="Foto 4" style="width: 100%; height: auto;">
            </div>
        </div>
    </div>
</body>
</html>

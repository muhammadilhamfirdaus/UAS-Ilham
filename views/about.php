<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tentang Kami</title>
    <style>
        body {
            background-color: #f9f5f1;
            color: #6f4e37;
        }

        h1,
        h2 {
            color: #6f4e37;
        }

        .about-container {
            text-align: center;
            margin-bottom: 40px;
        }

        .gallery-container {
            margin-top: 40px;
        }


        .gallery-item img {
            object-fit: contain;
            width: 400px;
            height: 400px;
            /* Agar gambar mengisi ruang tanpa distorsi */
            border: 2px solid #6f4e37;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- About Section -->
        <div class="about-container">
            <h1 class="my-4">Tentang Kami</h1>
            <p>Kami adalah restoran yang menyediakan berbagai pilihan burger berkualitas tinggi.</p>
            <p>Visi kami adalah menghadirkan pengalaman kuliner burger terbaik untuk pelanggan kami.</p>
        </div>

        <!-- Gallery Section -->
        <div class="gallery-container">
            <h2 class="text-center">Galeri Kuliner Burger</h2>
            <div class="row g-4">
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/fullpackage.jpg" class="img-fluid" alt="Kuliner 1">
                    <div class="gallery-caption">Full Package</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/masterpieceburger.jpg" class="img-fluid" alt="Kuliner 2">
                    <div class="gallery-caption">MasterPiece Burger</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/epicburger.jpeg" class="img-fluid" alt="Kuliner 3">
                    <div class="gallery-caption">Epic Burger</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/chikenburger.jpg" class="img-fluid" alt="Kuliner 4">
                    <div class="gallery-caption">Chicken Burger</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/beefburger.jpg" class="img-fluid" alt="Kuliner 5">
                    <div class="gallery-caption">Beef Burger</div>
                </div>
                <div class="col-md-4 gallery-item">
                    <img src="assets/img/cheseburger.jpeg" class="img-fluid" alt="Kuliner 6">
                    <div class="gallery-caption">Cheese Burger</div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
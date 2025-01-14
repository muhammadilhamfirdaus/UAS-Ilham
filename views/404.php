<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>404 Not Found</title>
    <style>
        body {
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            font-family: 'Arial', sans-serif;
        }
        .error-container {
            text-align: center;
            margin-top: 100px;
        }
        .error-code {
            font-size: 100px;
            color: #ff4d4d;
        }
        .error-message {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>

<body>

<?php require "includes/navbar.php"; ?>

<div class="error-container">
    <div class="error-code">404</div>
    <div class="error-message">Halaman Tidak Ditemukan</div>
    <a href="?page=home" class="btn btn-primary mt-4">Kembali ke Beranda</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
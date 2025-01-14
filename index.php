<?php
require "includes/config.php";
require "includes/functions.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

    <title>Kuliner</title>
    <link rel="stylesheet" href="style.css"> <!-- External CSS for custom styles -->
</head>

<body>
    <div class="container-fluid">
        <?php require "includes/navbar.php"; ?>
    </div>
    <div align="center">
        <?php require "includes/konten.php" ?>
    </div>
    <!-- Footer -->
    <footer class="bg-footer text-white text-center py-3">
        <p class="mb-0">&copy; M Ilham Firdaus 2025.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#DataTables').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "columns": [{
                        "orderable": false
                    },
                    null,
                    null,
                    {
                        "orderable": false
                    }
                ]
            });
        });
    </script>


</body>

</html>
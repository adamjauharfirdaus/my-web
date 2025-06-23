<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Navigation</title>
    <link rel="stylesheet" href="pembelajaran13.css"> <!-- Gaya untuk pembelajaran13 -->
    <link rel="stylesheet" href="pembelajaran9.css"> <!-- Gaya untuk pembelajaran9 -->
    <link rel="stylesheet" href="pembelajaran12.css"> <!-- Gaya untuk pembelajaran12 -->
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php?page=pembelajaran13">Pembelajaran 13</a></li>
            <li><a href="index.php?page=pembelajaran9">Pembelajaran 9</a></li>
            <li><a href="index.php?page=pembelajaran12">Pembelajaran 12</a></li>
        </ul>
    </nav>

    <div class="content">
        <?php
        // Memeriksa parameter "page" di URL
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            // Memilih file HTML yang akan dimasukkan berdasarkan parameter "page"
            switch ($page) {
                case 'pembelajaran13':
                    include 'pembelajaran13.html';
                    break;
                case 'pembelajaran9':
                    include 'pembelajaran9.html';
                    break;
                case 'pembelajaran12':
                    include 'pembelajaran12.html';
                    break;
                default:
                    echo '<h1>Page not found</h1>';
            }
        } else {
            // Halaman default jika tidak ada parameter "page" di URL
            echo '<h1>Selamat Datang di Website Saya</h1>';
            echo '<p>Pilih salah satu halaman di navigasi untuk melihat konten.</p>';
        }
        ?>
    </div>
</body>
</html>
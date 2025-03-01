<?php
session_start();
include 'connection.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$produk = mysqli_query($conn, "SELECT * FROM tb_post WHERE ID_post = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($produk);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExplorJatim.com</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="css/wisata.css">

    <!-- my font -->
    <link rel="preconnect" href="https://fonts.goo          gleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Fredoka:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Fasthand&family=Fredoka:wght@300..700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Dancing+Script:wght@400..700&family=Fasthand&family=Fredoka:wght@300..700&display=swap"
        rel="stylesheet">

    <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Fasthand&family=Fredoka:wdth,wght@94.3,300..700&family=Pacifico&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="navigasi-atas">
            <div class="logo">
                <a href="index.html"><img src="asset/Tanpa judul (200 x 40 piksel) (1).png" class="hitam"></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="about.html#contact-section">Contact</a></li>
                    <li><a href="category1.html">Category</a></li>
                    <li><a href="profil.php">Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Product detail -->
    <div class="section">
        <div class="container">
            <h4 class="active"><?php echo $p->nama_wisata ?></h4>
            <div class="box">
                <div class="col-2">
                    <img src="./produk/<?php echo $p->foto_wisata ?>" width="100%">
                </div>
                <div class="col-2">
                    <span>Harga :</span>
                    <h5>Rp.<?php echo number_format($p->harga_wisata) ?></h5><br>
                    <span>Deskripsi : </span>
                    <p>
                        <?php echo $p->deskripsi_wisata ?>
                    </p>
                    <div class="sosial-icons">
                        <a href=""><i class='bx bxl-google'></i></a>
                        <a href=""><i class='bx bxl-twitter'></i></a>
                        <a href=""><i class='bx bxl-whatsapp'></i></a>
                        <a href=""><i class='bx bxl-instagram-alt'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
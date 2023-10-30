<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli HP Murah & Berkualitas - BeliHape</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="youtube logo.png">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="home"><a href="#">Beranda</a></li>
                <li><a href="#">Gabung mitra</a></li>
                <li><a href="#">Karir</a></li>
                <li><a href="#">Perusahaan</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
            <video autoplay muted loop id="myVideo">
            <source src="video/y2mate.com - Gojek  The Flow_1080p.mp4" type="video/mp4">
          </video>

    
        <div class="tampilan-awal">
        <h2>3 negara.</h2>
        <h2>20+ produk.</h2>
        
        <h2>1 platform <span class="ondemand">on-demand</span> terkemuka.</h2>
    </div>

    
    <section class="background2">
    <div class="perkenalan">
    <h2>Kenalin, BeliHape. <span class="ondemand">Si paling berkualitas</span></h2>
     <!-- pang dinamis -->
    <h3><?php echo date("d F Y"); ?></h3>

    <!-- if sederhana -->
    <!-- untuk meraup uang customer sebanyak2nya -->
    <!-- makin besar, makin dikit untungnya (hanya owner yg tau kenapa codenya spt ini) -->
<?php
    $nilai_untung = 30;
    $hari = "Sabtu";

if ($nilai_untung >= 70) {
    echo "Jangan beli dulu.<br>";
} elseif ($nilai_untung >= 50) {
    echo "DISKON 30% CUY<br>";
} else {
    echo "Anda harus beli!<br>";
}

switch ($hari) {
    case "Sabtu":
    case "Minggu":
        echo "Hari libur.<br>";
        break;
    default:
        echo "Hari kerja<br>";
}
?>
</div>

<div class="gabung"><a href="https://wa.me/0895342586112"target="_blank">Beli</a></div>



<section class="belihp">

    <figure>
    <a href=""><img src="https://www.apple.com/newsroom/images/2023/09/apple-unveils-iphone-15-pro-and-iphone-15-pro-max/article/Apple-iPhone-15-Pro-lineup-hero-230912_Full-Bleed-Image.jpg.large.jpg" alt="" width="300" height="250">
    </a>
    <figcaption>iPhone 15</figcaption>
</figure>

    <figure>
    <a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlZs1XnCs8VtvI_94GBn1fP48sInO1LaQ9fg&usqp=CAU" alt="" width="300" height="250"></a>
    <figcaption>Samsung S22 Ultra</figcaption>
</figure>

    <figure>
    <a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEwhzEKSR42MCPvQEgTHpdNkGkV08A0WeyGA&usqp=CAU" alt="" width="300" height="250"></a>
    <figcaption>Xiaomi</figcaption>
</figure>
</section>

<?php
$handphone = array (
  array("Iphone 15", "A16 Bionic", "8GB", "64GB"),
  array("Samsung S23", "Snapdragon 8 Gen 2","16GB","128GB"),
  array("Xiaomi 14", "Snapdragon 8 Gen 3","32GB","256GB"),
  array("OPPO 7", "Mediatek 6", "24GB", "128GB")
);

echo "<table border='1'>
      <tr>
        <th>Merk</th>        
        <th>CPU</th>
        <th>RAM</th>
        <th>Penyimpanan</th>
      </tr>";

foreach ($handphone as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

echo "<style>
      table {
          width: 100%;
          border-collapse: collapse;
          color: white;  /* warna font menjadi putih */
      }
      th, td {
          text-align: center; /*  teks berada di tengah */
          padding: 10px;
      }
      th {
          background-color: #333; /*latar belakang untuk header kolom */
      }
      tr:nth-child(even) {
          background-color: #555; /*  latar belakang untuk baris genap */
      }
      tr:nth-child(odd) {
          background-color: #444; /* latar belakang untuk baris ganjil */
      }
      </style>";

</section>
    </main>
</body>
</html>

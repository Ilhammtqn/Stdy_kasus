<?php
    require 'controller.php';

    $id = $_GET["id"];
    $student = query("SELECT * FROM students  WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Siswa</title>
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
       html{
           
           }

        body{
               margin: 0;
               padding:0 ;
            font-family:sans-serif ;
             background: url(img/moonn.jpg);

            }
           
            
           

      
    </style>
</head>
<body>
<div class="container">
        <div class= "d-flex justify-content-center">
            <div class="card" style="width: 18rem; , height:1px;   ">
                <div class="card-body">
                <h1>DATA SISWA</h1>
                <ul>
                    <p><img src="img/<?= $student["gambar"]?>" class="card-img-top";> </p>
                    <p>Nis: <?= $student["nis"]?></p>
                    <p>Nama: <?= $student["nama"]?></p>
                    <p>Rombel: <?= $student["rombel"]?></p>
                    <p>Rayon: <?= $student["rayon"]?></p>
                    <p>Status: <?= $student["status"]?></p>
                    <p>Hobi: <?= $student["hobi"]?></p>
                    <p>Alamat: <?= $student["alamat"]?></p>
                    <p>Merk Laptop: <?= $student["merk_laptop"]?></p>
                    <p>Cita-Cita: <?= $student["cita_cita"]?></p>
                    <a href="index.php">Kembali</a>
                    </ul>
        </div>
        </div>
        </div>
        </div>
</body>
</html>
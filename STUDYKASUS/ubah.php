<?php
    require 'controller.php';

    $id = $_GET["id"];
    $student = query("SELECT * FROM students WHERE id = $id")[0];

    if(isset($_POST["submit"])){

        if( ubah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal diubah');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
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
        <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">
            <div class="card" style="width: 18rem; , height:1px;   ">
                <div class="card-body">
    <h1>UBAH DATA SISWA</h1>
    <form action ="" method="post">
        <input type="hidden" name="id" id="" value="<?= $student["id"]?>">
        <label for="">Nis</label>
        <br>
        <input type="text" name="nis" id="" value="<?= $student["nis"]?>">
        <br>
        <label for="">Nama</label>
        <br>
        <input type="text" name="nama" id="" value="<?= $student["nama"]?>">
        <br>
        <label for="">Rombel</label>
        <br>
        <input type="text" name="rombel" id="" value="<?= $student["rombel"]?>">
        <br>
        <label for="">Rayon</label>
        <br>
        <input type="text" name="rayon" id="" value="<?= $student["rayon"]?>">
        <br>
        <label for="">Status</label>
        <br>
        <input type="text" name="status" id="" value="<?= $student["status"]?>">
        <br>
        <label for="">Hobi</label>
        <br>
        <input type="text" name="hobi" id="" value="<?= $student["hobi"]?>">
        <br>
        <label for="">Alamat</label>
        <input type="text" name="alamat" id="" value="<?= $student["alamat"]?>">
        <br>
        <label for="">Merk Laptop</label>
        <input type="text" name="merk_laptop" id="" value="<?= $student["merk_laptop"]?>">
        <br>
        <label for="">Cita-Cita</label>
        <input type="text" name="cita_cita" id="" value="<?= $student["cita_cita"]?>">
        <br>
        <label for="">Gambar</label>
        <input type="file" name="gambar" id="" value="<?= $student["gambar"]?>">
        <br>
        <button type="submit" class="btn btn-primary" name="submit">ubah</button>
        <button type="submit" class="btn btn-primary" name="submit" ><a href="index.php"></a>back</button>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>
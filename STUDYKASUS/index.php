<?php
    require 'controller.php';
    $students = query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
          <style>
         html{
            height: 100%;
         }

        body{
            margin: 0;
            padding:0 ;
            font-family:sans-serif ;
            background: url(img/moonn.jpg);
            

           }
        h1{
            text-transform:uppercase;
            color:#FFFBF5;
            text-align:center;
        }
        a{
            width:100%;
            text-align:center;
            color:#FFFBF5;
            text-decoration:none ;
            padding:10px;
            font-size: 12px;

            
        }

        table{ 
            border:1px solid #ddee;
            border-collapse: collapse;
            border-spacing:0;
            width:70%;
            margin: 10px auto 10px auto;
        }
        table tr th{
            
            border: 1px solid #6096B4;
            color: #FFFBF5;
            padding:10px;
            text-align:center;
            
        }
        table tr td a{
      
            color:#EEE9DA;
            text-decoration:none ;
            font-size: 15px;
            
        }
        table tr td {
            border: 1px solid #6096B4;
            color: #FFFBF5;
            padding: 10px;
            text-align:center;
        }
    
        </style>
</head>
<body>
    <h1>DATA SISWA</h1>
    <div class="container">
        <div class="container">
            <div class="box">
                <table class="table" border = "2">
                    <a class="btn btn-primary" href="tambah.php" role="button"><i>add</i></a>
                    <thead>
                    <tr class="table-dark">
                            <th>No</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Rombel</th>
                            <th>Rayon</th>
                            <th>Status</th>
                            <th>Hobi</th>
                            <th>Alamat</th>
                            <th>Merk Laptop</th>
                            <th>Cita-Cita</th>
                            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($students as $student) { ?>
                <tr>
                    <td><?= $i?></td>
                    <td><?= $student["nama"]?></td>
                    <td><?= $student["nis"]?></td>
                    <td><?= $student["rombel"]?></td>
                    <td><?= $student["rayon"]?></td>
                    <td><?= $student["status"]?></td>
                    <td><?= $student["hobi"]?></td>
                    <td><?= $student["alamat"]?></td>
                    <td><?= $student["merk_laptop"]?></td>
                    <td><?= $student["cita_cita"]?></td>
                    <td>
                        <a href="delete.php?id=<?= $student["id"] ?>" onclick="return confirm('Yakin data mau di hapus')">Hapus</a>
                        <a href="ubah.php?id=<?= $student["id"] ?>">Ubah</a>
                        <a href="lihat.php?id=<?= $student["id"] ?>">Lihat</a>
                    </td>
                </tr>
                <?php $i++ ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
            </div>
           
</body>
</html>
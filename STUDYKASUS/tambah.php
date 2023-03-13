<?php
    require 'controller.php';

    if(isset($_POST["submit"])){

        if( tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil dimasukkan');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal dimasukkan');
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
            h1{
            text-transform:uppercase;
            color:#FFFBF5;
            text-align:center;
        }

            
           

      
    </style>
</head>
<body>
    <h1>INPUT DATA SISWA</h1>
    
    
    <div class="container">
        <div class= "d-flex justify-content-center">
            <div class="card" style="width: 18rem; , height:1px;   ">
                <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="nama" aria-label="nama" name="nama"aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="nis" aria-label="nis" name="nis" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="rombel" aria-label="rombel"name="rombel" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="rayon" aria-label="rayon" name="rayon"aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="status" aria-label="status" name="status"aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="hobi" aria-label="hobi" name="hobi" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="alamat" aria-label="alamat" name="alamat" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="merk_laptop" aria-label="merk_laptop" name="merk_laptop" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="cita_cita" aria-label="cita_cita" name="cita_cita" aria-describedby="basic-addon1">
                        </div>
                        
                        <br>
                        
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" placeholder="gambar" aria-label="gambar" name="gambar" aria-describedby="basic-addon1">
                        </div>
                        
                        <br>
                        
                        <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
                        <button type="submit" class="btn btn-primary" name="submit"><a href="index.php"></a>Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
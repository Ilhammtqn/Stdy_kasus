<?php
    require 'controller.php';

    $id = $_GET["id"];

    if( hapus($id) > 0){
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
?>
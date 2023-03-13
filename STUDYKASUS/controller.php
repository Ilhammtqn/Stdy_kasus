<?php
    $conn = mysqli_connect("localhost", "root", "", "db_kasus");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $tempat = [];
        while($isi = mysqli_fetch_assoc($result)){
            $tempat[] = $isi;
        }
        return $tempat;
    }

    function tambah($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $merk_laptop = htmlspecialchars($data["merk_laptop"]);
        $cita_cita = htmlspecialchars($data["cita_cita"]);
        $gambar = htmlspecialchars($data["gambar"]);
        $query = "INSERT INTO students
                    VALUES
                ('', '$nama', '$nis', '$rombel', '$rayon', '$status', '$hobi', '$alamat', '$merk_laptop', '$cita_cita', '$gambar')
            ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM students WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        $id = $data["id"];
        $nis = htmlspecialchars($data["nis"]);
        $nama = htmlspecialchars($data["nama"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $merk_laptop = htmlspecialchars($data["merk_laptop"]);
        $cita_cita = htmlspecialchars($data["cita_cita"]);
        $gambar = htmlspecialchars($data["gambar"]);
        $query = "UPDATE students SET
            nis = '$nis',
            nama = '$nama',
            rombel = '$rombel',
            rayon = '$rayon',
            status = '$status',
            hobi = '$hobi',
            alamat = '$alamat',
            merk_laptop = '$merk_laptop',
            cita_cita = '$cita_cita',
            gambar = '$gambar'
            WHERE id = $id
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }
?>
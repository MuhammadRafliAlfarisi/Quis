<?php 

    $connect = mysqli_connect("localhost", "root", "", "db_mhs");

    function query($query){
        global $connect;
        $result = mysqli_query($connect, $query);
        $row = []; 
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $connect;

        $nama_mahasiswa = $data["nama_mahasiswa"];
        $npm = $data["npm"];
        $kelas = $data["kelas"];

        $query = "INSERT INTO mahasiswa VALUES ('', '$nama_mahasiswa' , '$npm', '$kelas')";
        mysqli_query($connect, $query);

        return mysqli_affected_rows($connect);
    }

    function ubah($data){
        global $connect;

        $id = $data["id"];
        $nama_mahasiswa = $data["nama_mahasiswa"];
        $npm = $data["npm"];
        $kelas = $data["kelas"];


        $query = "UPDATE mahasiswa SET
                    nama_mahasiswa = '$nama_mahasiswa',
                    npm    = '$npm',
                    kelas       = '$kelas'
                    WHERE id = $id 
        ";

        mysqli_query($connect, $query);

        return mysqli_affected_rows($connect);
    }

    function hapus($id) {
        global $connect;
        mysqli_query($connect, "DELETE FROM mahasiswa WHERE id = $id");
    
        return mysqli_affected_rows($connect);
    }

?>
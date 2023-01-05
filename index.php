<?php
require 'function.php';

$mahasiswas = query("SELECT * FROM mahasiswa");


// if (isset($_POST["search"])) {
//     $mahasiswa = cari($_POST["keywi=ord"]);
// }
// ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Absensi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<style>
    table td {
        border: 1px solid black;
    }

    table th {
        border: 1px solid black;

    }
</style>

<body>

<h2 class="text-center">Data Absensi Mahasiswa</h2>



    <div class="data p-5">

        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">No </th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($mahasiswas as $mahasiswa) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $mahasiswa["nama_mahasiswa"]; ?></td>
                        <td><?= $mahasiswa["npm"]; ?></td>
                        <td><?= $mahasiswa["kelas"]; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $mahasiswa["id"]; ?>">
                                <i class="fa-solid fa-pen-to-square text-primary"></i> ||
                            </a>
                            <a href="hapus.php?id=<?= $mahasiswa["id"]; ?>">
                                <i class="fa-solid fa-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-end me-3 mb-3">
            <a href="tambah.php">
            <img src="icons8-add-new-50.png" alt="">
        </a>
    </div>
        </a>
    </div>

</body>

</html>

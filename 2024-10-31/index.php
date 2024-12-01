<?php

    $identitas = ["nama" => "Antonnia Yo'el Wahyusn Vebrianti",
                  "alamat" => "Griya Bhayangkara Permai",
                  "telepon" => "0895-3606-68318",
                  "email" => "ylchxxbi267@gmail.com",
                  "instagram" => "antonnia.yoel"];

    $sekolah = ["TK" => "Dharma Wanita Persatuan Urangagung",
                "SD" => "SDN Kebonagung 2",
                "SMP" => "SMP PGRI 9 Sidoarjo",
                "SMK" => "SMKN 2 Buduran"];

    $hobi = ["membaca", "bulutangkis", "futsal", "karate", "berenang"];

    $skill = ["C++" => "Expert",
              "HTML" => "Newbie",
              "CSS" => "Newbie",
              "PHP" => "Newbie"];

    $deskripsi = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Duis sagittis mauris quis lorem posuere commodo. 
                  Fusce vel purus auctor, tincidunt justo nec, semper urna. 
                  Morbi eu nisi ut nisi eleifend fringilla. 
                  Donec sit amet sapien euismod, mattis massa in, maximus nibh."

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Riwayat Hidup</title>
<style>
    h1, h2, table, p {
        text-align: center;
    }

    table {
        width: 800px;
    }

    .container {
        width: 800px;
        margin: auto;
    }
</style>
</head>
<body>
<div class="container">
    <h1>DAFTAR RIWAYAT HIDUP</h1>
    <h2>Data Diri</h2>
    <table border="1px">
        <thead>
            <tr>
                <th>Data</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($identitas as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= $value ?></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>Riwayat Pendidikan</h2>
    <table border="1px">
        <thead>
            <tr>
                <th>Pendidikan</th>
                <th>Nama Sekolah</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($sekolah as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= $value ?></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>Skill Coding</h2>
    <table border="1px">
        <thead>
            <tr>
                <th>Skill</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($skill as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= $value ?></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>Hobi</h2>
    <ul>
        <?php 
            foreach ($hobi as $key) {
                ?>
                    <li><?= $key ?></li>
                <?php
            }
        ?>
    </ul>
    <hr>
    <h2>Tentang Aku</h2>
    <p><?= $deskripsi ?></p>
</div>
</body>
</html>
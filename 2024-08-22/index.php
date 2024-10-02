<?php
    require_once("conent.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah</title>
    <link rel="stylesheet" href="style.css">
    <style>
</head>
<body>
    <div class="header">
        <h1>ini adalah header</h1>
        <li><a href="?pages">home</a></li>
        <?php
            foreach ($pages as $key => $value) {
        ?>
            <li><a href="?pages=<?= $value?><?= $key?></a></li>
        <?php
            }
        ?>
    </div>

    <div class="content">
        <h1>in adalah content</h1>
        <?php
            $page = $_GET["page"];
            //echo $page;
            if (isset($pages)){
            if($page == "contac"){
                require_once("pages/contac.php");
            }
            if($page == "jurusan"){
                require_once("pages/jurusan.php");
            }
            if($page == "sejarah"){
                require_once("pages/sejarah.php");
            }
            if($page == "prestasi"){
                require_once("pages/prestasi.php");
            }
            require_once("pages/jurusan.php");
        } else{
            echo"<h2> ini adalah home</h2>";
        }
        ?>
    </div>

    <div class="footer">
        <h1>ini adala footer</h1>
    </div>

    <?php
        foreach ($pages as $key => $value) {
    ?>
        <li><a href="pages/<?= $value?>"><?= $key?></a></li>
    <?php
        }
    ?>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="pages/jursan.php">Jurusan</a></li>
        <li><a href="sejarah.php">Sejarah</a></li>
        <li><a href="contac.php">Contac</a></li>
    </ul>
    <?php
        foreach ($gambars as $key) {
    ?>
        <img src="images/<?=$key?>" alt="">
    <?php        # code...
        }
    ?>
</body>
</html>
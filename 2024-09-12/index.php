<form action="" method="post">
    <input type="number" name="bulan" placeholder="Masukan Bulan">
    <input type="number" name="tanggal" placeholder="Masukkan Tanggal">
    <input type="submit" value= "Kirim" name="tombol">
</form>

<?php
    if (isset($_POST["tombol"])) {
        $bulan = $_POST["bulan"];
        $tanggal = $_POST["tanggal"];

        // echo $bulan;
        // echo $tanggal;

        $keterangan = "salah";
 
        if ($bulan > 0 && $bulan < 13 && $tanggal > 0 && $tanggal < 32) {
            // $keterangan = "benar";
            if ($bulan == 1) {
                if ($tanggal <= 19) {
                    $keterangan = "Capricorn";
                }
                if ($tanggal >= 20 ) {
                    $keterangan = "Aquarius";
                }
            }
            if ($bulan == 2) {
                if ($tanggal <= 18) {
                    $keterangan = "Aquarius";
                }
                if ($tanggal >= 19 && $tanggal < 30) {
                    $keterangan = "Pisces";
                }
            }
            if ($bulan == 3) {
                if ($tanggal <= 20) {
                    $keterangan = "Pisces";
                }
                if ($tanggal >= 21) {
                    $keterangan = "Aries";
                }
            }
            if ($bulan == 4) {
                if ($tanggal <= 19) {
                    $keterangan = "Aries";
                }
                if ($tanggal >= 20) {
                    $keterangan = "Taurus";
                }
            }
            if ($bulan == 5) {
                if ($tanggal <= 20) {
                    $keterangan = "Taurus";
                }
                if ($tanggal >= 21){
                    $keterangan = "Gemini";
                }
            }
            if ($bulan == 6) {
                if ($tanggal <= 20) {
                    $keterangan = "Gemini";
                }
                if ($tanggal >= 21) {
                    $keterangan = "Cancer";
                }
            }
            if ($bulan == 7) {
                if ($tanggal <=22) {
                    $keterangan = "Cancer";
                }
                if ($tanggal >= 23) {
                    $keterangan = "Leo";
                }
            }
            if ($bulan == 8) {
                if ($tanggal <= 22) {
                    $keterangan = "Leo";
                }
                if ($tanggal >= 23) {
                    $keterangan = "Virgo";
                }
            }
            if ($bulan == 9) {
                if ($tanggal <= 22) {
                    $keterangan = "Virgo";
                }
                if ($tanggal >= 23) {
                    $keterangan = "Libra";
                }
            }
            if ($bulan == 10) {
                if ($tanggal <= 22) {
                    $keterangan = "Libra";
                }
                if ($tanggal >= 23) {
                    $keterangan = "Scorpio";
                }
            }
            if ($bulan == 11) {
                if ($tanggal <= 21) {
                    $keterangan = "Scorpio";
                }
                if ($tanggal >= 22) {
                    $keterangan = "Sagitarius";
                }
            }
            if ($bulan == 12) {
                if ($tanggal <= 21) {
                    $keterangan = "Sagitarius";
                }
                if ($tanggal >= 22) {
                    $keterangan = "Capricorn";
                }
            }
        }
        echo $keterangan;
        
    }
?>
<a href="kalkulator.php">kalkulator</a>
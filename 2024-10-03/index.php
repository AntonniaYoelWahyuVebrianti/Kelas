Selesaikan perhitungan ini 7 % 5 + 8 * 4 - 9 / 3 mengunakan fungsi

<?php
    echo "<br>";
    $hasil = tambah(5, kali(3, 7));
    $hasil = bagi($hasil, 4);
    $hasil = kurang($hasil, 9);
    $hasil = modulo($hasil, 8);
    echo $hasil;
    echo "<br>";
    
    $total = modulo(7, 5);
    $total = tambah($total, 8);
    $total = kali($total, 4);
    $total = kurang($total, 9);
    $total = bagi($total, 3);
    echo $total;

    function kali($a, $b) {
        $c= $a * $b;
        return $c;
    }

    echo "<br>";
    echo kali(5, 7)+ 5;
    echo "<br>";

    function tambah($a, $b) {
        $c= $a + $b;
        return $c;
    }

    tambah(5, 5);
    echo "<br>";

    function kurang($a, $b) {
        $c= $a - $b;
        echo $c;
    }

    kurang(10, 5);
    echo "<br>";

    function bagi($a, $b) {
        $c= $a / $b;
        return $c;
    }

    bagi(10, 2);
    echo "<br>";

    function modulo ($a, $b) {
        $c= $a % $b;
        return $c;
    }

    modulo(7, 2);
    echo "<br>";
?>
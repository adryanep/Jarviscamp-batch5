<?php
    function MenampilkanAngkaGenap($angka1, $angka2) {
        echo "Angka 1 = $angka1";
        echo "<br>";
        echo "Angka 2 = $angka2";
        echo "<br>";
        echo "Hasil = ";
        if ($angka1 > $angka2) {
            echo "Angka 1 harus lebih kecil atau sama dengan angka 2";
            return;
        }
        for ($a = $angka1; $a <= $angka2; $a++) {
            if ($a % 2 != 1) {
                echo $a . " ";
            }
        }
    }
    //Isi Angka Dibawah ini
    MenampilkanAngkaGenap(1, 10);
?>
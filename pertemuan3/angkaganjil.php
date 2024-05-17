<?php
    function MenampilkanAngkaGanjil($angka1, $angka2) {
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
            if ($a % 2 != 0) {
                echo $a . " ";
            }
        }
    }
    //Isi Angka Dibawah ini
    MenampilkanAngkaGanjil(1, 10);
?>
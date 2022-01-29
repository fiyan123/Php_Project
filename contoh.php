<?php

        echo "
             <h2>Perulangan Dengan Array</h2>
             <b><p>For</P></b>
        ";

        $barang = ["Buku Tulis","Pensil","Papan Tulis","Spidol","Penggaris"];

        // MENAMPILKAN ISI ARRAY DENGAN FOR
         for($i = 0; $i<count($barang); $i++){ // FUNGSI COUNT UNTUK MENGHITUNG BANYAKNYA ISI ARRAY

             echo "Nama barang : $barang[$i].<br>";  
         }

        echo "<hr>";


        echo "
            <h2>Perulangan Dengan Array</h2>

            <b><p>Foreach</p></b>
        ";

        // membuat array
        $barang = ["Buku Tulis", "Penghapus", "Spidol"];

        // menampilkan isi array dengan perulangan foreach
        foreach($barang as $isi){  // FUNGSI AS SEBGAI JADI BARANG SEBAGAI ISI

            echo "Nama barang : $isi<br>";
        }

        echo "<hr>";

        echo "
            <h2>Perulangan Dengan Array</h2>

            <b><p>Menambahkan Array</p></b>
        ";

        $obat = [
            "Betadine",
            "Antiseptik",
            "Kayu Putih"
        ];

        // MENAMBAH INDEKS KE 3
        $obat[3] = "Bedak Gatal"; 

        // MENAMBAH INDEKS TERAKHIR
        $obat[] = "Pill";

        // CETAK ARRAY PERULANGAN
        foreach($obat as $array){
            echo "Macam-Macam Obat : $array <br>";
        }
?>
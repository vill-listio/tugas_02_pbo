<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        class mobil {
            // Properties
            public $nama;
            public $warna;

            // Methods
            function set_name($nama) {
                $this->nama = $nama;
            }

            function get_name() {
                return $this->nama;
            }

            function set_warna($warna) {
                $this->warna = $warna;
            }

            function get_warna() {
                return $this->warna;
            }
        }

        // Membuat objek dari kelas mobil
        $toyota = new mobil();

        // Mengatur nama
        $toyota->set_name('toyota');
        $toyota->set_warna('Biru Metalik');

        // Menampilkan nama 
        echo "Nama : " . $toyota->get_name();
        echo "<br>";
        echo "Warna : " . $toyota->get_warna();
        ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1>Isi</h1>";

    $a = 13;
    echo "$a <br>";
    echo '$a <br>';

    for ($i = 1; $i < 11; $i++) {
        echo "$i <br>";
    }

    $rand = rand(10, 100);
    echo "$rand" . " " . "$i <br>";

    echo "<hr>";

    // --

    if ($rand % 2 == 0) {
        echo "Genap <br>";
    } else {
        echo "Ganjil <br>";
    }

    // --
    $x = 1;
    while ($x < 10) {
        echo $x . "<br>";
        $x++;
    }
    echo "<br>";
    $x = 10;
    do {
        echo $x . "<br>";
        $x--;
    } while ($x > 0);

    // --
    $arr[0] = 1;
    $arr[1] = 2;
    $arr[2] = 3;
    $arr[3] = "Tiga <br>";
    echo $arr[3];
    for ($i = 0; $i < count($arr); $i++) {
        echo "$arr[$i] <br>";
    }
    $i = [];
    $arrX = array("Satu", 2, 3.5);

    for ($i = 0; $i < count($arrX); $i++) {
        echo "$arrX[$i] <br>";
    }

    // Append
    $arrY = array();
    $arrY[0] = 1;
    $arrY[] = 2;

    for ($i = 0; $i < count($arrY); $i++) {
        echo "$arrY[$i] <br>";
    }

    echo "<hr>";

    $arrZ = [];
    $arrZ["Satu"] = 1;
    $arrZ["Dua"] = 2;
    $arrZ["Tiga"] = 5;

    foreach ($arrZ as $item) {
        echo $item . "<br>";
    }

    $nilai = [
        0 => 1,
        1 => 2,
        2 => 3
    ];

    for ($i = 0; $i < count($nilai); $i++) {
        echo "$nilai[$i] <br>";
    }

    $mhs = [
        "nrp" => "224117122",
        "nama" => "Bryan",
        "ipk" => 5.75
    ];

    $daftarMhs = [];
    $daftarMhs[] = $mhs; // Untuk mengcopy isi arr

    $mhs = [
        "nrp" => "224117144",
        "nama" => "Kaka",
        "ipk" => 3.75
    ];

    $daftarMhs[] = $mhs; // Untuk mengcopy isi arr

    $mhs = [
        "nrp" => "224117143",
        "nama" => "Amir",
        "ipk" => 3.70
    ];

    $daftarMhs[] = $mhs; // Untuk mengcopy isi arr

    for ($i = 0; $i < count($daftarMhs); $i++) {
        echo $daftarMhs[$i]["nrp"] . "<br>";
        echo $daftarMhs[$i]["nama"] . "<br>";
        echo $daftarMhs[$i]["ipk"] . "<br>";
    }

    echo "<hr>";

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nrp</th><th>Nama</th><th>Ipk</th>";
    foreach ($daftarMhs as $item) {
        echo "<tr>";
        echo "<td>" . $item["nrp"] . "</td>";
        echo "<td>" . $item["nama"] . "</td>";
        echo "<td>" . $item["ipk"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $daftarMhs[1] = [];
    // unset($daftarMhs[1]);
    array_splice($daftarMhs, 1, 1);

    echo "<h1>Tanpa Amir</h1>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nrp</th><th>Nama</th><th>Ipk</th>";
    for ($i = 0; $i < count($daftarMhs); $i++) {
        echo "<tr>";
        echo "<td>" . $daftarMhs[$i]["nrp"] . "</td>";
        echo "<td>" . $daftarMhs[$i]["nama"] . "</td>";
        echo "<td>" . $daftarMhs[$i]["ipk"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<hr>";
    // ---
    function tambahkan($a, $b)
    {
        $hasil = $a + $b;
        return $hasil;
    }

    function tampilkan($a, $b)
    {
        $hasil = $a + $b;
        echo $hasil;
    }

    $xyz = tambahkan(5, 7);

    echo $xyz . "<br>";

    tampilkan(7, 8);
    echo "<hr>";

    class MataKuliah
    {
        public $kode;
        public $nama;
        public $sks;

        public static $jumlah = 0;

        function __construct($kode, $nama, $sks)
        {
            $this->kode = $kode;
            $this->nama = $nama;
            $this->sks = $sks;

            self::$jumlah++;
        }

        function cetak()
        {
            echo "Kode: $this->kode <br>";
            echo "Nama: $this->nama <br>";
            echo "Sks: $this->sks <br>";
        }
    }

    $daftarMatkul = [];
    $matkul = new MataKuliah("M001", "Bwp", 3);
    $daftarMatkul[] = $matkul;
    $matkul = new MataKuliah("M002", "Pbo", 2);
    $daftarMatkul[] = $matkul;
    $matkul = new MataKuliah("M003", "Itp", 1);
    $daftarMatkul[] = $matkul;

    echo "<br>";
    $matkul->cetak();

    echo "Jumlah: " . MataKuliah::$jumlah;
    ?>
</body>

</html>
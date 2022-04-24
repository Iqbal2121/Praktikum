<?php
    phpinfo();
?>

<?php
// pendefinisian variabel
    $nama = 'Rosalie Naurah';
    $umur = 13;
    $berat = 22.4;

    echo 'Nama : ' . $nama;
    echo '<br/>Umur : ' . $umur.' Tahun';
    echo '<br/>Berat : '.$berat.' Kg';
    echo "<br/>Hello $nama Apakabar";
?>
<hr/>
<?php
// variabel sistem
    echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
    echo '<br/>Nama File '.$_SERVER["PHP_SELF"];
?>
<hr/>
<?php
// variabel konstanta
    define('PHI',3.14);
    define('DBNAME','inventori');
    define('DBSERVER','localhost');

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
    echo '<br/>Kelilingnya : '.$kll;
    ?>
    <hr/>
    <?php
    echo 'Nama databasenya : '.DBNAME;
    echo '<br/>Lokasi databasenya ada di '.DBSERVER;
?>
<hr/>
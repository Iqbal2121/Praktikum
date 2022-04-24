<?php 
    $head = ["No", "NIM", "UTS", "UAS", "Tugas", "Nilai Akhir"];
    $ns1 = ['id' => 1, 'nim' => '0110121101', 'uts' => 90, 'uas' => 94, 'tugas' => 88];
    $ns2 = ['id' => 2, 'nim' => '0110121102', 'uts' => 80, 'uas' => 80, 'tugas' => 98];
    $ns3 = ['id' => 3, 'nim' => '0110121103', 'uts' => 90, 'uas' => 96, 'tugas' => 80];
    $ns4 = ['id' => 4, 'nim' => '0110121104', 'uts' => 90, 'uas' => 81, 'tugas' => 82];
    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum Web 2</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="table-responsive" id="sailorTableArea">
    <h3 align="center">Daftar Nilai Siswa</h3>
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
        <tr>
            <?php foreach ($head as $s) :?> 
                <th> <?= $s; ?>  </th>
            <?php endforeach; ?> 
        </tr>
        <?php foreach ($ar_nilai as $a) :?>
        <tr>
            <td> <?= $a["id"] ?> </td>
            <td> <?= $a["nim"] ?> </td>
            <td> <?= $a["uts"] ?> </td>
            <td> <?= $a["uas"] ?> </td>
            <td> <?= $a["tugas"] ?> </td>
            <td> <?= number_format((($a["uts"] + $a["uas"] + $a["tugas"]) / 3),2); ?> </td>
        </tr> 
        <?php endforeach;?>
    </table>
    </div>
  </body>
</html>
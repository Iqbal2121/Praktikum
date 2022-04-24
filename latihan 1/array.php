<?php
//pendefinisian array
    $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
    // mencetak buah ke index ke 2
    echo $ar_buah[2];
    // mencetak jumlah buah
    echo '<br/>Jumlah Buah ' . count($ar_buah);
    // mencetak seluruh buah
    echo '<ol>';
    foreach($ar_buah as $buah){
    echo '<li>'. $buah .'</li>';
    }
    echo '</ol>';
    // menambahkan buah
    $ar_buah[]="Durian";
    // menghapus buah index ke 1
    unset($ar_buah[1]);
    // mengubah buah index ke 2 menjadi Manggis
    $ar_buah[2]="Manggis";
    // mencetak seluruh buah dengan index nya
    echo '<ul>';
    foreach($ar_buah as $k => $v){
    echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
    }
    echo '</ul>';
?>

<!DOCTYPE html>
<html>
<body>
<?php
//sort array
    $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
    sort($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
?>
<hr/>
</body>
</html>

<!DOCTYPE html>
<html>
    <body>
        <?php
            //array pop
            $tims = ["Erwin", "Heru", "Ali", "Zaki"];
            array_pop($tims);
            foreach($tims as $person){
                echo $person.'</br>';
            }
        ?>
        <hr/>
        <?php
        //array push
        $tims = ["Erwin", "Heru", "Ali", "Zaki"];
            array_push($tims, "Watiah");
            foreach($tims as $person){
                echo $person.'</br>';
            }    
        ?>
    </body>
</html>
<hr/>
<!DOCTYPE html>
<html>
    <body>
        <?php
            //array pop
            $tims = ["Erwin", "Heru", "Ali", "Zaki"];
            array_shift($tims);
            foreach($tims as $person){
                echo $person.'</br>';
            }
        ?>
        <hr/>
        <?php
        //array push
        $tims = ["Erwin", "Heru", "Ali", "Zaki"];
            array_unshift($tims, "Watiah", "Joko");
            foreach($tims as $person){
                echo $person.'</br>';
            }    
        ?>
    </body>
</html>
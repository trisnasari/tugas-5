<?php
    $a = $_POST['1'];
    $b = $_POST['2'];
    $c = $_POST['3'];

    echo "$a <br>";
    echo "$b <br>";
    for($i=0;$i<$c-2;$i++){
        $beda = $b - $a;
        $hasil = $b + $beda;
        echo "$hasil <br>";
        $a = $b;
        $b = $hasil;
    }

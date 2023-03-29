<?php
    $mhs = array(
        array("Ardika","1212121212","Denpasar"),
        array("Ani","32143212234","Manado"),
        array("Intan","1324123456","Jakarta"),
        array("Reni","1678543213","Malang"),
        array("Jin","2203031355","Busan"),
    );

    foreach($mhs as $idx => $dta){
        echo "Data ke-" .$idx."<br>";
        foreach($dta as $nval){
            echo$nval."<br>";
        }
        echo "<br>";

    
        }
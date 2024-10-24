<?php 
    // for($contador = 0; $contador < 10; $contador++){
    //     echo 'Olá mundo </br>';
    // }


    $counter = 0;
    while($counter < 10){
        echo 'Olá mundo </br>';
        echo $counter;
        echo '</br>';
        $counter++;
    }

    do{
        echo 'Olá mundo </br>';
        echo $counter;
        echo '</br>';
        $counter++;
    } while($counter < 10)
?>
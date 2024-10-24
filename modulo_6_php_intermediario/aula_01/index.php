<?php 

    $arr = ['Henrique', 'Lucas', 'Felipe', 'Eduardo'];

    // foreach($arr as $key => $value){
    //     echo $key.'=>'.$value;
    //     echo '<hr>';
    // }

    // A função count retorna o número total de valores dentro da array
    $total = count($arr);

    for($i=0; $i < $total; $i++){
        echo $arr[$i].'<br>';
    }
?>
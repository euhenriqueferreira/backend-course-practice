<?php 
    $var1 = 'Henrique';
    $var2 = 'Lucas';

    if($var1 == $var2){
?>  
    <div class="box" style="width: 100px; height: 100px; background: red;"></div>
<?php
    } else{
?>

    <p>Não bateu as variáveis</p>
<?php
    }
?>


<?php
    $conta = 10 + 5;
    $conta1 = '10 + 5';

    if($conta == $conta1){
        echo 'verdade';
    } else{
        echo 'falso';
    }
?>
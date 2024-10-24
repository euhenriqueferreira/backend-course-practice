<?php
    function mostrarNome($nome, $idade){
        echo '<h2>Nome é '.$nome.'</h2>';
        echo "Idade: $idade";
    }

    // Passando valor padrão do parâmetro
    function calculadora($numero1 = 10, $numero2 = 5){
        echo '</br>';
        echo $numero1 + $numero2;
    }

    function verdade(){
        return true;
    }
    
    function retornarString(){
        return 'Henrique';
    }
    
    
    $nome = retornarString();
    
    // $variavel = verdade();
    
    // mostrarNome('Henrique', 18);

    // calculadora(20);

    echo $nome;

?>
<?php 
    /* Concatenação */
    $nome = 'Henrique';
    $idade = 20;
    
    define('PROFISSAO', 'Dev');

    // Usando aspas simples, deve-se concatenar com o ponto.
    echo 'Meu nome é '.$nome.', minha idade é '.$idade.' anos e eu trabalho como '.PROFISSAO;

    echo '</br>';

    // Usando aspas duplas, pode-se apenas escrever o nome da var ou const no meio da string que tudo irá funcionar.
    echo "Meu nome é $nome e eu tenho $idade anos";

    // Tomar cuiadado quando for usar aspas duplas com HTML
    echo "<div class=\"$nome\">Meu conteúdo</div>";
?>
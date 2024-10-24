<?php
    /* Arrays são variáveis que podem ter vários valores */
    $nomes = array('Henrique', 'Eduardo', 'Lucas');

    echo $nomes[2];

    echo '</br>';
    
    $livros = ['Quem pensa Enriquece', 'Os Segredos da Mente Milionária', 'O Poder do Hábito'];
    
    echo $livros[1];

    echo '</br>';
    
    $variaveis = ['Henrique', 20, true, 1.75];
    
    echo $variaveis[3];
    
    echo '</br>';
    
    $info['nome'] = 'Henrique';
    $info['idade'] = 20;
    $info['nacao'] = 'Brasil';
    
    echo $info['nome'];
    echo '</br>';
    echo $info['idade'];
    echo '</br>';
    echo $info['nacao'];
?>
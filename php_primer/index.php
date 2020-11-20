<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer Index</title>
    <link rel="stylesheet" href="./EstudoPHP/php_primer/style.css">
</head>

<body>
    <h1>Hello World</h1>
    <br />

    <?php 
        //PRINTANDO HTML
        echo '<h2>Hello PHP</h2>'; //Printing any string
        echo '<br />'; //Syntax of HTML in 
        echo '<h3>Another Text<h3/>';
    ?>

    <?php
        //TRABALHANDO COM VARIÁVEIS
        $nome = 'Marcelo Fortes';
        $idade = '21';

        //EXERCICIO 1
        echo 'Olá, meu nome é ', $nome;
        echo '<h3>Salve! Meu nome é '.$nome.'. Prazer conhecer!<h3/>';
        echo '<br />';
        echo '<br />';
        echo '<br />';
        
        //EXERCICIO 2
        echo 'Olá, meu nome é ', $nome;
        ?>


</body>
</html>
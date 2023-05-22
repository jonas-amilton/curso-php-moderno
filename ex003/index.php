<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    // 0x = hexadecimal
    // 0b = binario
    // 0 = octal

    $num = 300;
    echo "o valor da variavel é ";
    var_dump($num);
    // var_dump() é equivalente ao typeof do JavaScript

    // exemplo de coercao de tipo da variavel
    $outroNum = (int) "950";
    var_dump($outroNum);

    //compostos
    //array e objetos

    //especiais
    //null
    //resources
    //callabe
    //mixed

    ?>

</body>

</html>
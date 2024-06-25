<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $op = $_GET['op'];
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    if($op == 1){
        $cal = $n1 + $n2;
    }
    else if($op == 2){
        $cal = $n1 - $n2;
    }
    else if($op == 3){
        $cal = $n1/$n2;
        if($n1==0 || $n2==0){
            echo "essa divisão não pode ser efetuada";
        }
    }
    else {
        $cal = $n1*$n2;
    
    }
    echo "o resutado do calculo é: $cal";
    ?>
</body>
</html>
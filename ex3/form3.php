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
    $v = floatval($_POST["v"]);
    $d = floatval($_POST["d"]);
    $c = floatval($_POST["c"]);
 
    $ho = number_format($d/$v,2,".","");
    $comb = number_format($d/$c,2,".","");
 
    echo "Total horas: $ho\n";
    echo "Total combustivel: $comb\n";
    ?>
</body>
</html>
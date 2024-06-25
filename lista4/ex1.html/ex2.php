<?php
//$_GET obtem dado do formulário enviado via GET
//$_POST obtem dado do fomeulário enviado via POST
//nome entre '' deve ser igual ao name do input
//definido no formulário html
$text = $_GET['text'];
$area = $_GET['area'];
$op = $_GET['opcao'];
$opt1 = $_GET['opt1'];
$opt2 = $_GET['opt2'];
$opt3 = $_GET['opt3'];
$q = $_GET['quando'];

echo "Nome: $text<br>";
echo "<br>";
echo "Sobre você: $area<br>";
echo "<br>";
echo "Animal: $op<br>";
echo "<br>";
echo "Periodo: <br> $opt1<br> $opt2<br> $opt3<br>";
echo "Periodo: $q<br>";
?>
<!-- codigo html do php-->
<a href='ex2.html'><button>Voltar</button></a>
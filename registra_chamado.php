<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
//abrindo arqquivo
fopen('arquivo.php','a');

$texto=$_POST['titulo'].$_POST['categoria'].$_POST['descricao'];
echo $texto;
?>
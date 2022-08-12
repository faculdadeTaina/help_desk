<?php
session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
//remover indices

//destruir a variável
unset($_SESSION);
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//sesserion_destroy()
session_destroy();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
//forçar um rediricioanento
session_destroy();
header('Location: index.php');
?>

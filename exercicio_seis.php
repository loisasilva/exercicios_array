<?php
echo "o que essa função faz é pegar uma string (variável do tipo caracteres, texto) e separar elas, utilizando um separador.";
$filmes = " <br> a forma da agua ,<br>, o fabuloso destino de Amelie Poulain ,<br>, brilho eterno de uma mente sem lembranças ,<br>, fleabag ,<br>, o babadook"; 

$filmes = explode(",", $filmes, -1); 
print_r($filmes);

?>
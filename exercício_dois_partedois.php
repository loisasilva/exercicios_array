<?php
$lista_animais = ['gato', 'furao', 'peixe', 'cachorro'];
$existe = array_search('Uva', $lista_animais);

if($existe != null){
        echo 'Sim, o valor pesquisado existe no array';
    } else {
        echo 'Não, o valor pesquisado não existe no array';
    }
?>
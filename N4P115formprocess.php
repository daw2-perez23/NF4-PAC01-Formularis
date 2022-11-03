<?php

    function sumar(){
        
        $res = $_POST['uno'] + $_POST['dos'] + $_POST['tres'];
        
        return $res;

    }

echo '<h1>RESULTADO:</h1>';
echo sumar();
?>
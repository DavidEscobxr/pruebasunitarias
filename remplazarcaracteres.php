<?php

function reemplazarCaracteres($cadena, $buscar, $reemplazar) {
    $nuevaCadena = str_replace($buscar, $reemplazar, $cadena);
    return $nuevaCadena;
}

// Ejemplo de uso
$cadenaOriginal = "Hola mundo";
$caracterABuscar = "o";
$caracterAReemplazar = "0";

$nuevaCadena = reemplazarCaracteres($cadenaOriginal, $caracterABuscar, $caracterAReemplazar);
echo "Cadena original: $cadenaOriginal<br>";
echo "Nueva cadena: $nuevaCadena";

?>

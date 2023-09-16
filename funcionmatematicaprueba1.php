<?php

function calcularFactorial($n) {
    if ($n < 0) {
        return "El factorial no está definido para números negativos.";
    } elseif ($n == 0 || $n == 1) {
        return 1; // El factorial de 0 y 1 es 1.
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

// Ejemplo de uso
$numero = 5;
$resultado = calcularFactorial($numero);
echo "El factorial de $numero es $resultado";

?>

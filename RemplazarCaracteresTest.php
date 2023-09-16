<?php
use PHPUnit\Framework\TestCase;

class ReemplazarCaracteresTest extends TestCase {
    public function testReemplazoBasico() {
        $cadenaOriginal = "Hola mundo";
        $caracterABuscar = "o";
        $caracterAReemplazar = "0";

        $nuevaCadena = reemplazarCaracteres($cadenaOriginal, $caracterABuscar, $caracterAReemplazar);

        $this->assertEquals("H0la mund0", $nuevaCadena);
    }

    public function testCadenaVacia() {
        $cadenaOriginal = "";
        $caracterABuscar = "o";
        $caracterAReemplazar = "0";

        $nuevaCadena = reemplazarCaracteres($cadenaOriginal, $caracterABuscar, $caracterAReemplazar);

        $this->assertEquals("", $nuevaCadena);
    }

    public function testCaracterNoPresente() {
        $cadenaOriginal = "Hola mundo";
        $caracterABuscar = "x"; // Carácter que no está en la cadena original
        $caracterAReemplazar = "0";

        $nuevaCadena = reemplazarCaracteres($cadenaOriginal, $caracterABuscar, $caracterAReemplazar);

        $this->assertEquals("Hola mundo", $nuevaCadena);
    }

    public function testReemplazoMultiple() {
        $cadenaOriginal = "Hello world";
        $caracterABuscar = "l";
        $caracterAReemplazar = "x";

        $nuevaCadena = reemplazarCaracteres($cadenaOriginal, $caracterABuscar, $caracterAReemplazar);

        $this->assertEquals("Hexxo word", $nuevaCadena);
    }

    public function testTiposDeDatos() {
        $cadenaOriginal = 123; // No es una cadena válida
        $caracterABuscar = "o";
        $caracterAReemplazar = "0";

        $nuevaCadena = reemplazarCaracteres($cadenaOriginal, $caracterABuscar, $caracterAReemplazar);

        $this->assertEquals("", $nuevaCadena);
    }
}
?>

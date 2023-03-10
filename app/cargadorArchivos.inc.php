<?php
//elimina cache del navegador
$fecha = new DateTime();

$fuentesJavascript = Array(
    "js/debug.js",
    "js/dimensiones.js",
    "js/audio.js",
    "js/EstadoPantallaTitulo.js",
    "js/EstadoPantallaControles.js",
    "js/inventario.js",
    "js/popup.js",
    "js/Rectangulo.js",
    "js/RegistroLocalizacionEntrada.js",
    "js/registroLocalizaciones.js",
    "js/Localizacion.js",
    "js/JugadorMapamundi.js",
    "js/Sprite.js",
    "js/Tile.js",
    "js/CapaMapaTiles.js",
    "js/PaletaSprite.js",
    "js/listadoEstado.js",
    "js/ajax.js",
    "js/EstadoMapamundi.js",
    "js/maquinaEstados.js",
    "js/Punto.js",
    "js/Mapa.js",
    "js/controlesTeclado.js",
    "js/teclado.js",
    "js/mando.js",
    "js/buclePricipal.js",
    "js/index.js"
);

foreach($fuentesJavascript as $fuente){
    echo '<script src="'. $fuente .'?'.  $fecha -> getTimestamp() .'"></script>';
    echo nl2br("\n");
}

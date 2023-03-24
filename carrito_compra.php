<?php
// Declaración de variables globales
$nombre_art = "";
$precio_art = "";
$unidades = "";
$aviso1 = "";
$aviso2 = "";
$aviso3 = "";
$btnAddCarrito = "";
$artEnCarrito = "";
$precio_total = "";
$forma_pago = "";
$acepto_condiciones = "";
$btnImprimir = "";
$btnReset = "";
$valoresAceptados = "/^[0-9]*(\.?)[0-9]+$/";
$mostrarFormuTarjeta = "";
$mostrarFormuEfectivo = "";
$importeEfectivo = "";

// Principal
init();
function init(){
    initVariables();
    initEventos();
    ocultarDatosTarjeta();
    ocultarDatosEfectivo();
    mostrarImporteEfectivo();
}

// Función inicializadora de variables
function initVariables(){
    global $nombre_art, $precio_art, $unidades, $aviso1, $aviso2, $aviso3, $btnAddCarrito, $artEnCarrito, $precio_total, $forma_pago, $acepto_condiciones, $btnImprimir, $btnReset, $valoresAceptados, $mostrarFormuTarjeta, $mostrarFormuEfectivo, $importeEfectivo;
    $nombre_art = $_GET["nombre_articulo"];
    $precio_art = $_GET["precio_articulo"];
    $unidades = $_GET["unidades"];
    $aviso1 = $_GET["aviso1"];
    $aviso2 = $_GET["aviso2"];
    $aviso3 = $_GET["aviso3"];
    $btnAddCarrito = $_GET["btnAddCarrito"];
     }
 ?>
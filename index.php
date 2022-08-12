<?php

require_once 'modelo/prestamo.php';


$p= new Prestamo();
$p->setMontoSolicitado(10000);
$p->setTasaEfectivaMensual(7.6);
$p->setCantidadCuotas(36);
$p->setCostoFinancieroTotal(120);

$p->MostrarDatos();
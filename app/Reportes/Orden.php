<?php
namespace App\Reportes;

use App\Cliente;
use App\Orden as OrdenModel;
use App\Equipo;
use App\DetallesOrden;

class Orden extends ReporteBase {
    protected $nombre = 'Orden';

    function show($id = 1) {
        $orden = OrdenModel::find($id);
        $cliente = Cliente::find($orden->cliente);
        $border = 0;
        // Añadir página
        $this->AddPage();
        // Poner título
        $this->setTitulo('Orden de Reparación');

        // Fecha y Orden de Servicio
        // Color de Relleno
        $this->SetFillColor(140, 140, 140);
        // Fuente Titulo
        $this->setFont('Century Gothic', 'B', 12);
        // Mover Derecha
        $this->Cell(110);
        // Textos
        $this->Cell(50, 6, 'Fecha', 1, 0, 'C', 1);
        // Textos
        $this->Cell(30, 6, 'No. Orden', 1, 0, 'C', 1);
        // Linea
        $this->Ln(); $this->Cell(110);$this->setFont('Century Gothic', '', 12);
        // Fecha
        $this->Cell(50, 7, date_format(date_create($orden->fecha_ingreso), 'd/M/Y H:i:s'), 1, 0, 'C', 0);
        $this->Cell(30, 7, $orden->id, 1, 0, 'C', 0);




        $this->Ln();

        // ID
        // Cambiar fuente
        $this->SetFont('Arial', 'B', 12);
        // Añadir ID
        $this->Cell(8, 8, utf8_decode('ID:'), $border);
        // Fuente no negrita
        $this->SetFont('Arial', '', 12);
        // Mostrar nombre
        $this->Cell(5, 8, utf8_decode($cliente->id), $border);
        
        // Cliente
        // Cambiar fuente
        $this->SetFont('Arial', 'B', 12);
        // Añadir cliente
        $this->Cell(18, 8, utf8_decode('Cliente:'), $border);
        // Fuente no negrita
        $this->SetFont('Arial', '', 12);
        // Mostrar nombre
        $this->Cell(0, 8, utf8_decode($cliente->getFullName()), $border);

        // Domicilio
        // Cambiar fuente
        $this->SetFont('Arial', 'B', 12);
        // Nueva Linea
        $this->Ln();
        // Añadir cliente
        $this->Cell(23, 8, utf8_decode('Domicilio:'), $border);
        // Fuente no negrita
        $this->SetFont('Arial', '', 12);
        // Mostrar nombre
        $this->Cell(0, 8, utf8_decode($cliente->getDomicilio()), $border);

        parent::show();
    }
}

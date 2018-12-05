<?php
namespace App\Reportes;

use App\DetallesOrden;
use App\Orden;
use App\Equipo;
use App\Marca;
use App\Estado;
use App\Empleado;



class ReporteProductividad extends ReporteBase {
    protected $nombre = 'Productividad';

    function Header() {
        parent::Header();
        $this->setTitulo('Productividad');
    }

    function show($detalles = null) {
        $border = 0;
        $this->AddPage();
        $tecnico = Empleado::find($detalles[0]->empleado_repara);
        //$tecnico = DetallesOrden::find();
        
        $this->SetFontSize(12);
        $this->SetFillColor(230, 230, 230);
        $this->setFont('Century Gothic', 'B', 14);
        $this->Cell(65, 7, utf8_decode('Productividad del técnico: '), $border);
        $this->setFont('Century Gothic', '', 14);
        $this->Cell(0, 7, utf8_decode($tecnico->getFullName()), $border);
        $this->Ln();
        $this->Ln();
        $this->Ln();
        //encabezados tablas
        $this->setFont('Century Gothic', 'B', 12);
        $this->Cell(20, 7, 'ID orden', 1, 0, 'C', 1);
        $this->Cell(30, 7, utf8_decode('Categoría'), 1, 0, 'C', 1);
        $this->Cell(30, 7, 'Marca', 1, 0, 'C', 1);
        $this->Cell(35, 7, 'Modelo', 1, 0, 'C', 1);
        $this->Cell(30, 7, 'Estado', 1, 0, 'C', 1);
        $this->Cell(45, 7, utf8_decode('Fecha de reparación'), 1, 0, 'C', 1);
        
        if ($detalles != null) {
            foreach ($detalles as $detalle) {
                $equipo = Equipo::find($detalle->equipo);
                $estado = Estado::find($detalle->estado);
               
                $this->Ln();
                $this->setFont('Century Gothic', '', 12);
               // $this->Cell(0, 10, $detalle, 0, 0, 'C', 0);
                $this->Cell(20, 7,$detalle->id,1, 0, 'C', 0);
                // Textos
                $this->Cell(30, 7, utf8_decode('Laptop'), 1, 0, 'C', 0);
                // Textos
                $this->Cell(30, 7,utf8_decode(Marca::find($equipo->marca)->nombre), 1, 0, 'C', 0);
                // Textos
                $this->Cell(35, 7,utf8_decode($equipo->modelo), 1, 0, 'C', 0);
                $this->Cell(30, 7,utf8_decode($estado->estado), 1, 0, 'C', 0);
                $this->Cell(45, 7, utf8_decode($detalle->fecha_terminado), 1, 0, 'C', 0);
                
            }
            $this->Ln();
            $this->Ln();
            $this->Ln();
            $total = count($detalles);
            $this->setFont('Century Gothic', 'B', 14);
            $this->Cell(130);
            $this->Cell(35, 7,'Total global: ', $border);
            $this->setFont('Century Gothic', '', 14);
            $this->Cell(0, 7,$total, $border);
        }
        
        parent::show();
    }

    
    function Footer() {
        $border = 0;
        // Posición a 1.5cm del final
        $this->setY(-15);
        // Fuente
        $this->SetFont('Century Gothic', 'I', 12);
        // Número de Página
        $this->Cell(0, 10, utf8_decode('Página '.$this->PageNo()).'/{nb}', $border, 0, 'C');
    }
}
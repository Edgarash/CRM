<?php
namespace App\Reportes;

use App\DetallesOrden;
use App\Orden;
use App\Equipo;
use App\Marca;
use App\Estado;
use App\Empleado;


class ReporteEquiposEstados extends ReporteBaseHorizontal {
    protected $nombre = 'Equipos por Estado';
    
    function Header() {
        parent::Header();
       
    }
    function show($detalles = null, $estado = null, $fechaInicio = null, $fechaFinal = null) {
        $border = 0;
        $this->AddPage('L');
        $estado = ($x = Estado::find($estado)) != null ? $x->estado : 'Todos';
        $this->setTitulo('Equipos por estado: '. $estado);
        
        $this->SetFontSize(12);
        $this->SetFillColor(230, 230, 230);
        $this->setFont('Century Gothic', 'B', 14);
        $this->Cell(50, 7, utf8_decode('Desde la fecha: '), $border);
        $this->setFont('Century Gothic', '', 14);
        $this->Cell(0, 7, utf8_decode($fechaInicio), $border);
        //$this->Cell(0, 7, date_format(date_create($fechaInicio),'d/M/Y'), $border);

        $this->setFont('Century Gothic', 'B', 14);
        
        $this->Ln();
        $this->Cell(50, 7, utf8_decode('Hasta la fecha: '), $border);
        $this->setFont('Century Gothic', '', 14);
        $this->Cell(30, 7, utf8_decode($fechaFinal), $border);
        $this->Ln();
        $this->Ln();
        $this->Ln();
        //encabezados tablas
        $this->setFont('Century Gothic', 'B', 12);
        $this->Cell(20, 7, 'ID orden', 1, 0, 'C', 1);
        $this->Cell(40, 7, utf8_decode('Técnico'), 1, 0, 'C', 1);
        $this->Cell(30, 7, utf8_decode('Categoría'), 1, 0, 'C', 1);
        $this->Cell(30, 7, 'Marca', 1, 0, 'C', 1);
        $this->Cell(35, 7, 'Modelo', 1, 0, 'C', 1);
        $this->Cell(35, 7, 'Estado', 1, 0, 'C', 1);
        $this->Cell(42, 7, utf8_decode('Fecha ingreso'), 1, 0, 'C', 1);
        $this->Cell(42, 7, utf8_decode('Fecha terminado'), 1, 0, 'C', 1);
        
        if ($detalles != null) {
            foreach ($detalles as $detalle) {
                $equipo = Equipo::find($detalle->equipo);
                $estado = Estado::find($detalle->estado);
                $empleado_repara = $detalle->getEmpleadoRepara;
                $ingreso = $detalle->getFechaIngresoAttribute();
               
                $this->Ln();
                $this->setFont('Century Gothic', '', 10);
               // $this->Cell(0, 10, $detalle, 0, 0, 'C', 0);
                $this->Cell(20, 7,$detalle->id,1, 0, 'C', 0);
                $this->Cell(40, 7, utf8_decode($empleado_repara != null ? $empleado_repara->getFullName() : ''), 1, 0, 'C', 0);
                // Textos
                $this->Cell(30, 7, utf8_decode($equipo->descripcion), 1, 0, 'C', 0);
                // Textos
                $this->Cell(30, 7,utf8_decode(Marca::find($equipo->marca)->nombre), 1, 0, 'C', 0);
                // Textos
                $this->Cell(35, 7,utf8_decode($equipo->modelo), 1, 0, 'C', 0);
                $this->Cell(35, 7,utf8_decode($estado->estado), 1, 0, 'C', 0);
                $this->Cell(42, 7,$ingreso, 1, 0, 'C', 0);
                $this->Cell(42, 7, utf8_decode($detalle->fecha_terminado), 1, 0, 'C', 0);
                
            }
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

<?php
namespace App\Reportes;

use App\Cliente;
use App\Orden;
use App\Equipo;
use App\DetallesOrden;
use App\Marca;

class ReporteOrden extends ReporteBase {
    protected $nombre = 'Orden';

    function Header() {
        parent::Header();
        $this->setTitulo('Orden de Reparación');
    }

    function show($id = 1) {
        $orden = Orden::find($id);
        $detalles = $orden->detalles;
        $cliente = Cliente::find($orden->cliente);

        $border = 0;
        $numEquipos = 1;
        foreach ($detalles as $detalle) {
        $this->AddPage();
        $empleado_repara = $detalle->getEmpleadoRepara;
        $empleado_entrega = $detalle->getEmpleadoEntrega;
        $equipo = Equipo::find($detalle->equipo);
        // Fecha y Orden de Servicio
        // Color de Relleno
        $this->SetFillColor(230, 230, 230);
        // Fuente Titulo
        $this->setFont('Century Gothic', 'B', 12);
        // Mover Derecha
        $this->Cell(110);

        $this->Ln();
        //recibe
        $this->Cell(30, 6, utf8_decode('Recibe:'), $border);
        $this->setFont('Century Gothic', '', 12);
        $this->Cell(80, 6, utf8_decode($orden->getEmpleadoRecibe->getFullName()), $border);
        // Textos
        $this->setFont('Century Gothic', 'B', 12);
        $this->Cell(50, 6, 'Fecha', 1, 0, 'C', 1);
        // Textos
        $this->Cell(30, 6, 'No. Orden', 1, 0, 'C', 1);
        $this->Ln();
       //Asignado a
        $this->Cell(30, 6, utf8_decode('Asignado a:'), $border);
        $this->setFont('Century Gothic', '', 12);
        $this->Cell(80, 6, utf8_decode($empleado_repara != null ? $empleado_repara->getFullName() : ''), $border);
        // Fecha
        $this->Cell(50, 6, date_format(date_create($orden->fecha_ingreso), 'd/M/Y H:i:s'), 1, 0, 'C', 0);
        $this->Cell(30, 6, $orden->id, 1, 0, 'C', 0);
        $this->Ln();
        $this->setFont('Century Gothic', 'B', 12);
        $this->Cell(30, 6, utf8_decode('Entrega:'), $border);
        $this->setFont('Century Gothic', '', 12);
        $this->Cell(80, 6, utf8_decode($empleado_entrega != null ? $empleado_entrega->getFullName() : ''), $border);

        $this->Line(10,67,200,67);
        $this->Ln();

        $this->SetFont('Century Gothic', 'B', 12);
        $this->Cell(0, 10, utf8_decode('Datos del cliente'), $border, 0,'C');


         // ID
        // Cambiar fuente
        $this->SetFont('Century Gothic', 'B', 12);
        // Añadir ID
        $this->Ln();
        $this->Cell(23, 7, utf8_decode('ID:'), $border);
        // Fuente no negrita
        $this->SetFont('Century Gothic', '', 12);
        // Mostrar nombre

        $this->Cell(23, 7, utf8_decode($cliente->id), $border);
        $this->Ln();
        // Cliente
        // Cambiar fuente
        $this->SetFont('Century Gothic', 'B', 12);
        // Añadir cliente
        $this->Cell(23, 7, utf8_decode('Cliente:'), $border);
        // Fuente no negrita
        $this->SetFont('Century Gothic', '', 12);
        // Mostrar nombre
        $this->Cell(0, 7, utf8_decode($cliente->getFullName()), $border);
        // Domicilio
        // Cambiar fuente
        $this->SetFont('Century Gothic', 'B', 12);
        // Nueva Linea
        $this->Ln();
        // Añadir cliente
        $this->Cell(23, 7, utf8_decode('Domicilio:'), $border);
        // Fuente no negrita
        $this->SetFont('Century Gothic', '', 12);
        // Mostrar nombre
        $this->Cell(0, 7, utf8_decode($cliente->getDomicilio()), $border);
        $this->Ln();
        //RFC
        $this->SetFont('Century Gothic','B','12');
        $this->Cell(23,7,utf8_decode('RFC:'),$border);
        // Fuente no negrita
        $this->SetFont('Century Gothic', '', 12);
        $this->Cell(0,7,utf8_decode($cliente->RFC),$border);

        $this->Ln();
        //telefono
        $this->SetFont('Century Gothic','B','12');
        $this->Cell(23,7,utf8_decode('Teléfono:'),$border);
        // Fuente no negrita
        $this->SetFont('Century Gothic', '', 12);
        $this->Cell(0,7,utf8_decode($cliente->telefono),$border);
        $this->Ln();
        //separacion
        $this->SetFont('Century Gothic', 'B', 12);
        $this->Cell(0, 20, utf8_decode('Datos del equipo y diagnóstico'), $border, 0,'C');
        $this->Line(10,116,200,116);


         // Textos
         $this->Ln();
         $this->Cell(50, 6, 'Equipo', 1, 0, 'C', 1);
         // Textos
         $this->Cell(30, 6, 'Marca', 1, 0, 'C', 1);
         // Textos
         $this->Cell(30, 6, 'Modelo', 1, 0, 'C', 1);
         // Textos
         $this->Cell(0, 6, 'Numero de Serie', 1, 0, 'C', 1);
         $this->Ln();
        // Textos
        $this->SetFont('Century Gothic', '', 12);
        $this->Cell(50, 6, 'LAPTOP', 1, 0, 'C', 0);
        // Textos
        $this->Cell(30, 6, utf8_decode(Marca::find($equipo->marca)->nombre), 1, 0, 'C', 0);
        // Textos
        $this->Cell(30, 6, utf8_decode($equipo->modelo), 1, 0, 'C', 0);
        // Textos
        $this->Cell(0, 6, utf8_decode($equipo->serie), 1, 0, 'C', 0);
        $this->Ln();
        //diagnostico
        $this->Ln();
        $this->SetFont('Century Gothic', 'B', 12);
        $this->Cell(35,8,utf8_decode('Accesorios: '),$border);
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 8, utf8_decode('Trae Cargador'), $border);

        $this->Ln();
        $this->SetFont('Century Gothic', 'B', 12);
        $this->Cell(35,8,utf8_decode('Falla Reportada: '),$border);
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 8, utf8_decode('No Prende'), $border);
        $this->Ln();
        $this->SetFont('Century Gothic', 'B', 12);
        $this->Cell(35,8,utf8_decode('Observaciones: '),$border);
        $this->SetFont('Century Gothic', '', 12);
        $this->Cell(0, 8, utf8_decode('Formateo de disco duro'), $border);
        // Salto de linea
        $this->Ln();
        $this->Ln();
        //separacion
        $this->SetFont('Century Gothic', 'B', 12);
        $this->Cell(0, 20, utf8_decode('Presupuesto'), $border, 0,'C');
        $this->Line(10,185,200,185);
        $this->Ln();
        // Textos
        $this->Cell(25, 7, utf8_decode('Código'), 1, 0, 'C', 1);
        // Textos
        $this->Cell(80, 7, utf8_decode('Descripción'), 1, 0, 'C', 1);
        // Textos
        $this->Cell(50, 7, utf8_decode('Precio Unitario'), 1, 0, 'C', 1);
        // Textos
        $this->Cell(0, 7, utf8_decode('Total'), 1, 0, 'C', 1);
        $this->Ln();
        // Textos
        $this->SetFont('Century Gothic', '', 12);
        $this->Cell(25, 7, '25-001', 1, 0, 'C', 0);
        $this->Cell(80, 7,utf8_decode('Reinstalación de software'), 1, 0, 'C', 0);
        $this->Cell(50, 7, '$ 100.00', 1, 0, 'C', 0);
        $this->Cell(0, 7, '$ 100.00', 1, 0, 'C', 0);
        $this->Ln();
        $this->Cell(105);
        $this->Cell(50, 7, 'SUBTOTAL', 1, 0, 'C', 1);
        $this->Cell(0, 7, '$ 100.00', 1, 0, 'C', 1);
        $this->Ln();
        $this->Cell(105);
        $this->Cell(50, 7, 'IVA', 1, 0, 'C', 0);
        $this->Cell(0, 7, '$  10.00', 1, 0, 'C', 0);
        $this->Ln();
        $this->Cell(105);
        $this->SetFont('Century Gothic', 'B', 12);
        $this->Cell(50, 7, 'TOTAL', 1, 0, 'C', 1);
        $this->Cell(0, 7, '$ 110.00', 1, 0, 'C', 1);
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        //Firma
        $this->SetFont('Century Gothic', 'B', 12);
        $this->Cell(0, 20, utf8_decode('Firma'), $border, 0,'C');
        $this->Line(75,260,125,260);
        $this->Ln();

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
        $this->Cell(0, 10, utf8_decode('Equipo '.$this->PageNo()).'/{nb}', $border, 0, 'C');
    }
}

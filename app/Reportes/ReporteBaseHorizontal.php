<?php
namespace App\Reportes;

use Anouar\Fpdf\Fpdf;
// define('FPDF_FONTPATH','C:\\laragon\\www\\CRM\\public\\assets\\fonts/reportes');
define('FPDF_FONTPATH','assets/fonts/reportes');

class ReporteBaseHorizontal extends Fpdf {
    protected $nombre = 'Reporte';

    function Header()
    {
        $border = 0;
        // Añadir Roboto
        $this->AddFont('Roboto', 'B', 'Roboto-Bold.php');
        $this->AddFont('Century Gothic', '', 'Century Gothic.php');
        $this->AddFont('Century Gothic', 'B', 'GOTHICB.php');
        $this->AddFont('Century Gothic', 'I', 'GOTHICI.php');
        // LOGO
        $this->image('images/logo2.png', 10, 5, 75);
        // Tipo de letra
        $this->SetFont('Arial', '', 12);
        // Salto de línea
        $this->Ln(-2);
        // Mover a la derecha
        $this->Cell(175, 0, '', $border);
        // Nombre de la Empresa
        $this->Cell(0, 0, utf8_decode('Microsistemas Californianos S.A. de C.V.'), $border, 0, 'C');
        // Salto de línea
        $this->Ln(5);
        // Mover a la derecha
        $this->Cell(165, 0, '', $border);
        // Dirección
        $this->Cell(0, 0, utf8_decode('Isabel La Católica, Zona Central, 23000, La Paz, B.C.S.'), $border, 0, 'C');
    }

    function setTitulo($titulo = 'Reporte') {
        $border = 0;
        // Posición inicial
        $this->setY(23);
        // Fuente
        $this->SetFont('Century Gothic', '', 20);
        // Rectangulo sombra
        $this->Rect(11, 24, 277, 12, 'F');
        // Color de Relleno
        $this->SetFillColor(217, 217, 217);
        // Color de Fuente
        $this->SetTextColor(63, 119, 188);
        // Celda contenedora
        $this->Cell(0, 12, utf8_decode($titulo), $border, 0, 'C', 1);
        // Regresar el color de fuente a negro
        $this->SetTextColor(0);
        // Nueva Linea
        $this->Ln(17);
    }

    function Footer() {
        $border = 0;
        // Posición a 1.5cm del final
        $this->setY(-15);
        // Fuente
        $this->SetFont('Arial', 'I', 12);
        // Número de Página
        $this->Cell(0, 10, utf8_decode('Página '.$this->PageNo()).'/{nb}', $border, 0, 'C');
    }


    function show() {
        $this->AliasNbPages();
        $this->SetTitle(utf8_decode($this->nombre));
        $this->Output(utf8_decode($this->nombre).'.pdf', 'I');
        exit;
    }

    // function download() {
    //     $this->AliasNbPages();
    //     $this->Output('Reporte', 'D');
    // }
}

<?php
    $content = "
<page>
    <h1>Ejemplo de conversión</h1>
    <br>
    Salto de linea <b>Uso de etiqueta bold</b>, uso del modulo o extensión <a href='http://html2pdf.fr/'>HTML2PDF</a>.<br>
</page>";

    require_once(dirname(__FILE__).'/modulos/html2pdf/html2pdf.class.php');
	/*
	Constructor Clase HTML2PDF
	http://wiki.spipu.net/doku.php?id=html2pdf:en:v4:accueil#initalizing_the_html2pdf_class
	*/
    $html2pdf = new HTML2PDF('P','LETTER','es');
    $html2pdf->WriteHTML($content);
	/*
	Opción de Salida: 'D', forzar descarga
	http://wiki.spipu.net/doku.php?id=html2pdf:es:v3:salida
	*/
    $html2pdf->Output('ejemplo.pdf','D');
?>
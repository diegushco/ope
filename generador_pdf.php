<?php

/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
    switch ($_REQUEST['p']) {
        case 1:
            $pagina = "comp_cita";
            break;
        case 2:
            $pagina = "comp_cita_inspeccion";
            break;
        case 3:
            $pagina = "comp_ra";
            break;
        case 4:
            $pagina = "comp_censo";
            break;
    }

    // get the HTML
    ob_start();
    include('pdfs/'.$pagina.'.php');
    
    $content = ob_get_clean();
    require_once('assets/html2pdf/html2pdf.class.php');
    try
    {
        // init HTML2PDF
        $html2pdf = new HTML2PDF('P', 'Letter', 'es', true, 'UTF-8');
        
        // display the full pageL
        $html2pdf->pdf->SetDisplayMode('default');

        $html2pdf->pdf->SetAuthor('Maria Elena Reyes');
        
        $html2pdf->pdf->SetTitle('SISTEMA AUTOMATIZADO DE OPERACIONES Y PLANIFICACION - INAPROCET');
        
        $html2pdf->pdf->SetSubject('SAOP - INAPROCET');

        // convert
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));

        // send the PDF
        $html2pdf->Output('SAOP.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
<?php 
    require ("vendor/autoload.php");

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();

    $kodeHTML = '<h1 style="text-align:center;">Halo Semuanya...</h1>';
    $kodeHTML = '<h1 style="text-align:center;">Halo Semuanya...</h1>';
    $kodeHTML = '<h1 style="text-align:center;">Halo Semuanya...</h1>';
    $kodeHTML = '<h1 style="text-align:center;">Halo Semuanya...</h1>';

    $dompdf->loadHtml($kodeHTML);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream();
?>
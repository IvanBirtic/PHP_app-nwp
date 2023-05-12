<?php
error_reporting(0);
$knjiga = 10;
$brod1 = 10000; 
$brod2 = 30000; 

$url = 'https://api.hnb.hr/tecajn-eur/v3?&format=xml';
$xml = simplexml_load_file($url);

$rates = array();
foreach ($xml->item as $item) {
    $valuta = (string) $item->valuta;
    $kupovni_tecaj = str_replace(',', '.', (string) $item->kupovni_tecaj);
    $rates[$valuta] = (float) $kupovni_tecaj;
}

echo '<br/><br/>';
echo '<h1><strong>XML - Cjenik artikala</strong></h1><br/><br/>';
echo '<table>';
echo '<tr><th style="font-size: 18px; font-weight: bold;">Artikal</th><th style="font-size: 18px; font-weight: bold;">EUR</th><th style="font-size: 18px; font-weight: bold;">USD</th><th style="font-size: 18px; font-weight: bold;">PLN</th><th style="font-size: 18px; font-weight: bold;">CHF</th></tr>';


echo '<tr>';
echo '<td style="font-size: 18px; font-weight: bold;">Knjiga</td>';

echo '<td>' . $knjiga . '</td>';
echo '<td>' . round($knjiga * $rates['USD'], 2) . '</td>';
echo '<td>' . round($knjiga * $rates['PLN'], 2) . '</td>';
echo '<td>' . round($knjiga * $rates['CHF'], 2) . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td style="font-size: 18px; font-weight: bold;">Brod 1</td>';

echo '<td>' . $brod1 . '</td>';
echo '<td>' . round($brod1 * $rates['USD'], 2) . '</td>';
echo '<td>' . round($brod1 * $rates['PLN'], 2) . '</td>';
echo '<td>' . round($brod1 * $rates['CHF'], 2) . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td style="font-size: 18px; font-weight: bold;">Brod 2</td>';

echo '<td>' . $brod2 . '</td>';
echo '<td>' . round($brod2 * $rates['USD'], 2) . '</td>';
echo '<td>' . round($brod2 * $rates['PLN'], 2) . '</td>';
echo '<td>' . round($brod2 * $rates['CHF'], 2) . '</td>';
echo '</tr>';

echo '</table>';
?>

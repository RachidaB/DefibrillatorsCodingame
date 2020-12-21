<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * 17/12/2020 
 **/

fscanf(STDIN, "%s", $LON);
fscanf(STDIN, "%s", $LAT);
fscanf(STDIN, "%d", $N);
$LON =  str_replace(",", ".", $LON);
$LAT =  str_replace(",", ".", $LAT);
$tab = [];
for ($i = 0; $i < $N; $i++)
{
    $DEFIB = stream_get_line(STDIN, 256 + 1, "\n");
    $lines = explode("\n", $DEFIB);
    $ral = explode(";", $lines[0]);
    $LOND = floatval(str_replace(",", ".", $ral[4])) ;
    $LATD = floatval(str_replace(",", ".", $ral[5])) ;
// Distance between user and defibrillator
    $x = ($LON - $LOND) *  cos(($LATD + $LAT)/2);
    $y = $LAT - $LATD;
    $D =  (sqrt (pow($x,2) + pow($y,2))) * 6371 ;
// store distance and the name of defibrillator
    $tab[$i][0] = $D;
    $tab[$i][1] = $ral[1];
}
// closest to user
$df = min($tab);
$res = $df[1];

echo("$res\n");
?>

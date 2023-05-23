function calculArieHexagon($latura) {
    $arie = (3 * sqrt(3) * pow($latura, 2)) / 2;
    return $arie;
}
<?php
include 'view1.php'; 
$latura = 5;
$arieHexagon = calculArieHexagon($latura);

?>
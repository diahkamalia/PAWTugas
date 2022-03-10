<?php
function perkalian($num1,$num2)
{
    $a = $num1;
    $b = $num2;
    $axb = $a * $b;
    return $axb;
}
$result1 = perkalian(3,5);
$result2 = perkalian(4,6);
$result3 = perkalian(6,5);

echo "Hasil perkalian a dan b = $result1 </br>";
echo "Hasil perkalian a dan b = $result2 </br>";
echo "Hasil perkalian a dan b = $result3 </br>";
?>

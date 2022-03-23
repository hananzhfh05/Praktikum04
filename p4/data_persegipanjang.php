<?php
require_once "class_persegipanjang.php";

$persegipanjang1 = new persegipanjang(12, 8);
$persegipanjang2 = new persegipanjang(20, 10);

echo "persegi panjang 1 memiliki P = ".$persegipanjang1->panjang. ", L = ".$persegipanjang1->lebar;
echo "<br/> persegi panjang 2 memiliki P = ".$persegipanjang2->panjang. ", L = ".$persegipanjang2->lebar;
echo "<br/> Luas persegi panjang 1 = ".$persegipanjang1->getLuas();
echo "<br/> Luas persegi panjang 2 = ".$persegipanjang2->getLuas();
echo "<br/> keliling persegi panjang 1 = ".$persegipanjang1->getkeliling();
echo "<br/> keliling persegi panjang 2 = ".$persegipanjang2->getkeliling();

?>
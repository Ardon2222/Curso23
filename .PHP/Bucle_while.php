

<?php 
$a=0;
$quince=15;
$cinco=5;
$tres=3;
do
{
  $a++;
  if ($a%$quince==0) {
    echo "Baja del carro<br>";
  } elseif ($a%$cinco==0) {
    echo "Ido no<br>";
  } elseif ($a%$tres==0) {
    echo "Incluso<br>";
  } else {
    echo "$a <br>";
  }
  
} while ($a<100);
?>





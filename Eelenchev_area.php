<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Area triangulo</title>
</head>
<body>
<hr>
 <h1>Introdue las medidas del rectangulo y le diremos su area</h1>
<hr>
<?php

$base = isset($_GET["base"]) ? $_GET["base"] : "";
$altura = isset($_GET["altura"]) ? $_GET["altura"] : "";

if (($base !="" ) and ($altura != "")) {
$tengo_datos = true;
} else {
$tengo_datos = false;
}

?>
<form action="Eelenchev_area.php" method="get">
Lado 1: <input type="number" name="base" 
value="<?php echo $base; ?>" required> cm<br>
Lado 2: <input type="number" name="altura" required
value="<?php echo $altura; ?>"> cm<br>
<input type="submit" value="Enviar">
</form>
<hr>
<?php

$area=(int)$base*(int)$altura;

if($tengo_datos==true) {
echo "Teniendo en cuenta que un lado mide <b>$base</b> cm y otro <b>$altura</b> cm<br>";
echo "El Area es de: <b>$area</b> cm<br>";
} else {
echo "Rellene los campos porfavor<br>";
}

?>
<hr>
<a href="https://www.youtube.com/watch?v=Ot-9ANd0CFQ" target="_black">O aprende a hacerlo por ti mismo</a>
</body>
</html>

# Examen parcial nov-2021

**Nom:** Eduard Elenchev Georgiev

Entrega els exercicis dins dins aquest document
Posa el teu nom al document i guarda-ho amb el teu nom d'usuari.
Els html, codi i demés els has de copiar dins aquest arxiu.


El codi ha de ser clar i que completi el millor possible el que se demana. 
Recordau que no us podeu inventar la sintaxis, així que provau que tot
funcioni.

No us podeu copiar ni consultar entre vosaltres o a un tercer, però podeu consultar el material que necessiteu. Em reservo el dret a demanar que expliqueu la solució.

L'examen és un markdown, l'entrega també ho ha de ser i ha d'estar ben fet.


## 1.  xml (2 p)

Donat el següent xml

```xml
<?xml version="1.0" encoding="UTF-8"?>
<students>
 <student>
   <name>Rick Grimes</name>
   <age>35</age>
   <subject>Maths</subject>
   <gender>Male</gender>
 </student>
 <student>
   <name>Daryl Dixon </name>
   <age>33</age>
   <subject>Science</subject>
   <gender>Male</gender>
 </student>
 <student>
   <name>Maggie</name>
   <age>36</age>
   <subject>Arts</subject>
   <gender>Female</gender>
 </student>
</students>
``` 

1. Quina és l'arrel?
2. Modifica l'xml de manera que l'element `age` passi a ser un atribut de `name`
3. Amb l'XML modificat afegeix un nou estudiant de nom Pere, 25 anys, que fa Maths i gènere Male

### [Respuesta 1](Ex1Ej1.xml)
```xml
<students>
 <student>
   <name age="35">Rick Grimes</name>
   <subject>Maths</subject>
   <gender>Male</gender>
 </student>
 <student>
   <name age="33">Daryl Dixon </name>
   <subject>Science</subject>
   <gender>Male</gender>
 </student>
 <student>
   <name age="36">Maggie</name>
   <subject>Arts</subject>
   <gender>Female</gender>
 </student>
 <student>
   <name age="25">Pere</name>
   <subject>Maths</subject>
   <gender>Male</gender>
 </student>
</students>
``` 

## 2. Crea una taula en html (2p)

Com a capçalera posa el següents títols, que han d'anar amb negreta:

* id, descripció, qtt, preu
* línea1: 3, ordinador de sobretaula, 1, 430.35€
* línea2: 1, ratolí, 1, 30 €
* línea3: 123, impreesora làsser, 1, 350   €

Afegiu una línea final a la pantalla que posi el total amb la suma dels imports

### [Respuesta 2](Ex1Ej2.html)
```html
<table border="6">
            <tr>
                <td align="center"><b>ID</b></td>
                <td align="center"><b>Descripcion</b></td>
                <td align="center"><b>QTT</b></td>
                <td align="center"><b>PRECIO</b></td>
            </tr>
            <tr>
                <td align="center">3</td>
                <td align="center">Ordenador de sobremesa</td>
                <td align="center">1</td>
                <td align="center">430.35€</td>
            </tr>
            <tr>
                <td align="center">1</td>
                <td align="center">Raton</td>
                <td align="center">1</td>
                <td align="center">30€</td>
            </tr>
            <tr>
                <td align="center">123</td>
                <td align="center">Impresora laser</td>
                <td align="center">1</td>
                <td align="center">350€</td>
            </tr>
            
        </table>
``` 

## 3. Programació (2p)

```php
$a = ("poma", "pera", "plàtan", "meló", "coco");
```

Creau un programa en PHP que recorri l'arrai i imprimeixi en pantalla "Has de menjar més " seguit del nom de la fruita.

### [Respuesta 3](Ex1Ej3.php)
```php
$a = array('manzanas', 'peras', "platanos", "melones", "cocos");
foreach ($a as $valor){
  echo "Has de comer mas ".$valor.".<br>";
}
```


## 4. Programació 2 (2p)

Crea un programa PHP que agafi un valor per GET que li passarem mitjançant un formulari el nom i ens retorni la longitud en lletres que té.
Si no es passa el nom ha de demanar que l'hi posis.


### [Respuesta 4](Ex1Ej4.php)
```php
<?php $nombre=isset($_GET['nombre']) ? $_GET['nombre'] : "" ?>
<!DOCTYPE html>
<html>
<body>
  <form action="Ex1Ej4.php" method="get">
    <label for="nombre">Escribe un nombre:</label>
    <input type="text" name="nombre"><br>
    <input type="submit" value="Medir">
  </form>
  <hr>
  <?php if ($nombre != ""){
    echo "La longitud de su palabra es: <strong>".strlen($nombre); 
  } else
  echo "Por favor, introduce un nombre";?>
</body>
</html>
```

## 5. Teoria (2p)

Explica amb exemples quan faries servir GET i quan POST per passar informació a la web.

### Resposta 5

La diferencia principal entre GET y POST es la seguridad, devido a que GET se envia mediante el enlace, cosa la cual POST no hace


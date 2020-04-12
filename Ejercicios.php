<!DOCTYPE html>
<html>
<head>
 <title>Ejercicios php</title>
</head>
<body>
<?php
 echo "<h1>Ej1</h1>";
$var = 'Nacho';
echo "Hola me llamo $var";
?>
<?php
echo "<h1>Ej2</h1>";
$suma = 5+2;
echo "la suma es $suma";
?>
<?php
echo "<h1>Ej3</h1>";
$nombre = "Ignacio";
$apellido = "Viñuela";
$Nombrecompleto = $nombre.$apellido;
echo $Nombrecompleto;
?>
<?php
echo "<h1>Ej4</h1>";

$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
for($i=0; $i<sizeof($meses); $i++)
      {
	  echo "<li>$meses[$i]</li>";
	  echo "<br>";
      }
    
?>
<?php
echo "<h1>Ej5</h1>";
$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
$numero = array('1','2','3','4','5','6','7','8','9','10','11','12');
$dias = array('31','29','30','30','31','30','30','31','30','30','31','31');
for($i=0; $i<sizeof($meses); $i++)
      {
	  echo $meses[$i];
      }
      for($i=0; $i<sizeof($numero); $i++)
      {
	  echo $numero[$i];
      }
      for($i=0; $i<sizeof($dias); $i++)
      {
	  echo $dias[$i];
      }
echo "<table>
  <tr>
    <th>Numero mes</th>
    <th>Nombre mes</th>
    <th>Dias Mes</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Enero</td>
    <td>29</td>
    
  </tr>
</table>"
?>
<?php
  echo "<h1>Ej6</h1>";
  echo '<table>
  <tr>
    <td>1</td>
    <td>2</td> 
    <td>3</td>
	<td>4</td>
  </tr>
  <tr>
    <td>5</td>
    <td>6</td> 
    <td>7</td>
	<td>8</td>
  </tr>
  <tr>
    <td>9</td>
    <td>10</td> 
    <td>11</td>
	<td>12</td>
  </tr>
  <tr>
    <td>13</td>
    <td>14</td> 
    <td>15</td>
	<td>16</td>
  </tr>
</table>';
  ?>
  <?php
  echo "<h1>Ej7</h1>";
  ?>
  <?php
  echo "<h1>Ej8</h1>";
  echo '<table>

  <tr>
    <td>Ratchet&Clank</td>
    <td><img src="https://store.playstation.com/store/api/chihiro/00_09_000/container/ES/es/999/EP9000-NPEA00387_00-RC3REMASTER00100/1579605281000/image?w=240&h=240&bg_color=000000&opacity=100&_version=00_09_000" width="200" height="200"></td> 
  </tr>
  <tr>
    <td>Isaac Clarke</td>
    <td><img src="https://as.com/meristation/imagenes/2019/01/23/noticias/1548272774_249442_1548272812_noticia_normal.jpg" width="400" height="200"></td> 
  </tr>
  <tr>
    <td>Rayman</td>
    <td><img src="https://images-na.ssl-images-amazon.com/images/I/519YXBHQNKL.jpg" width="300" height="400"></td> 
  </tr>
  <tr>
    <td>Niko Bellic</td>
    <td><img src="https://vignette.wikia.nocookie.net/aztecakgames/images/2/21/NikoLiberty.jpg/revision/latest/scale-to-width-down/340?cb=20120415145900&path-prefix=es" width="300" height="300"></td> 
  </tr>
  <tr>
    <td>Lara Croft</td>
    <td><img src="https://lourhodes.com/wp-content/uploads/2016/04/tomb-raider-underworld-650x650.jpg" width="300" height="300"></td> 
  </tr>
</table>';
  ?>
</body>
</html>

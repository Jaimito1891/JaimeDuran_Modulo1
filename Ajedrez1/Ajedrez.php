<!DOCTYPE HTML>
<html>
<head>
    <title>Ajedrez</title>
</head>
<body>
    <img src= "./blanco.jpg" width="50" height="50" alt="blanco"> 
    <?php
        $numero=3;//Grande de tabla
        $filas=$numero/2;
        echo "<table border = 1>";
        for ($a=1; $a <=$filas ; $a++) {//se controla por pares
            echo "<tr>";
            for ($i=1; $i <=$filas ; $i++) { //agraga el primer patron
                echo '<td>';
                echo '<img src="./blanco.jpg" width="50" height="50" alt="blanco">';
                echo '</td>';
                echo '<td>';
                echo '<img src="./negro.jpg" width="50" height="50" alt="blanco">';
                echo '</td>';
            }
            if($numero%2 == 1){
                echo '<td>';
                echo '<img src="./blanco.jpg" width="50" height="50" alt="blanco">';
                echo '</td>';}
            echo "</tr>";
            for ($i=1; $i <=$filas ; $i++) { //agrega l sendo patron
                echo '<td>';
                echo '<img src="./negro.jpg" width="50" height="50" alt="blanco">';
                echo '</td>';
                echo '<td>';
                echo '<img src="./blanco.jpg" width="50" height="50" alt="blanco">';
                echo '</td>';
            }
            if($numero%2 == 1){
                echo '<td>';
                echo '<img src="./negro.jpg" width="50" height="50" alt="blanco">';
                echo '</td>';}
        }
        echo "<tr>";
        if($numero%2 == 1){//si es numero impar agrega la fila faltante
            for ($i=1; $i <=$filas ; $i++) { 
                echo '<td>';
                echo '<img src="./blanco.jpg" width="50" height="50" alt="blanco">';
                echo '</td>';
                echo '<td>';
                echo '<img src="./negro.jpg" width="50" height="50" alt="blanco">';
                echo '</td>';
                }
                if($numero%2 == 1){
                    echo '<td>';
                    echo '<img src="./blanco.jpg" width="50" height="50" alt="blanco">';
                    echo '</td>';}}
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>
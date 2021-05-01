<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Respuestas</title>
</head>
<body>
    <?php
        echo "<table border = 1>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th colspan='4' rowspan='2'>";
                        echo "<br><br><br>";
                        echo "Solicitud de ingreso a la Universidad";
                        echo "<br><br><br>";
                    echo "</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody";
                echo "<tr>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo $_POST["nombre"];
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo $_POST["ApP"];
                    echo "</td>";
                    echo "<td colspan='2' style='text-align:center; vertical-align:middle'>";
                        echo $_POST["ApM"];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo "Nombre";
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo "Apellido Paterno";
                    echo "</td>";
                    echo "<td colspan='2' style='text-align:center; vertical-align:middle'>";
                        echo "Apellido Maternos";
                    echo "</td>";
                echo "</tr>";
                    echo "<tr>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo "Sexo";
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo $_POST["sexo"];
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo "Edad";
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo $_POST["edad"];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan='2' style='text-align:center; vertical-align:middle'>";
                        echo $_POST["Correo"];
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo $_POST["telefono"];
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo $_POST["celular"];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan='2' style='text-align:center; vertical-align:middle'>";
                        echo "Correo Electronico";
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo "Telefono";
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo "Celular";
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo "Escuela de procedencia";
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo $_POST["Procedencia"];
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo "Promedio";
                    echo "</td>";
                    echo "<td style='text-align:center; vertical-align:middle'>";
                        echo $_POST["Promedio"];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan='2' style='text-align:center; vertical-align:middle'>";
                        echo "Primera Opcion";
                    echo "</td>";
                    echo "<td colspan='2' style='text-align:center; vertical-align:middle'>";
                        echo $_POST["primeraO"];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan='2' style='text-align:center; vertical-align:middle'>";
                        echo "Segunda Opcion";
                    echo "</td>";
                    echo "<td colspan='2' style='text-align:center; vertical-align:middle'>";
                        echo $_POST["segundaO"];
                    echo "</td>";
                echo "</tr>";
            echo "</tbody>";
        echo "</table>";
    ?>
</body>
</html>
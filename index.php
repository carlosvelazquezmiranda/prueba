
<?php
// Devuelve el contenido y el número de bytes, 79
$contenido = readfile("cuento.txt");
echo $contenido;


$fila = 1;
if(($fp = fopen("Archivo.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($fp)) !== FALSE) {
        $numero = count($datos);
        echo "$fila:\n";
        $fila++;
        for ($i = 0; $i < $numero; $i++){
            echo $datos[$i] . "\t";
        }
        echo "<br>";
        //echo "\nFrase: el tipo de animal es {$datos[0]} y se llama {$datos[1]} <br>";
    }
    fclose($fp);
}
?>
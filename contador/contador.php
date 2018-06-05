<html lang="es">
    <head>
        <style type="text/css">
            
        </style>
        <title>contador</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $archivo = "visitas.txt";
        $openn = fopen($archivo, "r");
        $totalvisitas = fread($openn, filesize($archivo));
        fclose($openn);
        $openn = fopen($archivo, "w");
        $totalvisitas = $totalvisitas + 1;
        $grabar = fwrite($openn, $totalvisitas);
        fclose($openn);
        echo "<font size='10'>visitas hasta hoy:" .$totalvisitas."</font>";
        ?>
        
    </body>
</html>
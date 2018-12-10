<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Worksheet 7 - Funciones, Ficheros y Formularios</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label>Nombre</label>
        <br>
        <input type="text" name="name">
        <br>
        <label>Apellidos</label>
        <br>
        <input type="text" name="subname">
        <br>
        <label>Telefono</label>
        <br>
        <input type="phone" name="phone">
        <br>
        <label>Mensaje de agradecimiento</label>
        <br>
        <input type="text" name="mensaje">
        <br>
        <input type="submit" name="enviado" value="Enviar">
    </form>
    <?php
        $form = $_POST["enviado"];
        echo($form);
        // EXERCISE 1        
        function writeFile(){
            $name = $_POST["name"];
            $subname = $_POST["subname"];
            $phone = $_POST["phone"];

            $handle = fopen("./file.txt","w");
            fwrite($handle,"Nombre: ".$name."\r\n");
            fwrite($handle,"Apellidos: ".$subname."\r\n");
            fwrite($handle,"Telefono: ".$phone."\r\n");
            fclose($handle);
        }        
        
        writeFile();
        // EXERCISE 2
        function readFiles($url_file){
            $file = $url_file;
            $handle = fopen($file,"r");
            $count = 0;
            while (!feof($handle)){
                $line = fgets($handle);
                echo($line."<br>");
                $count++;
            }
            echo("El fichero tiene: $count lineas<br>");
            echo("El fichero pesa: ".filesize($file)." Bytes<br>");
            fclose($handle);
        }

        if(file_exists("file.txt")){
            readFiles("./file.txt");
        }else{
            echo("No existe archivo de registro aun");
        }

        // EXERCISE 3
        function readDirectory($directory){
            $dir = $directory;
            $count = 1;
            if (is_dir($dir)){
                if ($dh = opendir($dir)){
                    echo("<h3>Ficheros del directorio</h3>");
                    while (($file = readdir($dh)) !== false){
                        echo "Nobre de Archivo $count :". $file ."<br>";
                        $count++;
                    }
                closedir($dh);
                }
            }
        }
        readDirectory("./");

        // EXERCISE 4
        function writeOpinion(){
            $opinion = $_POST["mensaje"];
            $handle = fopen("./log.txt","a+");
            fwrite($handle,"Opinion: ".$opinion."\r\n");
            fclose($handle);
        }
        writeOpinion();
    ?>
</body>
</html>
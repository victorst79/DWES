<?php
    $archivo = $_POST['tipo'];
    
    function calcula_extension($archivo){
        $extension = explode(".",$archivo);
        echo strtoupper($extension[1])."<br>";
    }

    calcula_extension($archivo);

    function tipo_fichero($archivo){
        $extension = explode(".",$archivo);
        $extensionFinal = strtoupper($extension[1]);

        switch($extensionFinal){
            case "PDF":
                echo "Documento Adobe PDF";
                break;
            case "TXT":
                echo "Documento de texto";
                break;
            case "HTML":
                echo "Dcoumento HTML";
                break;
            case "PPT":
                echo "Presentación Microsoft Powerpoint";
                break;
            case "DOC":
                echo "Documento Microsoft Word";
                break;
            case "GIF":
                echo "Imagen GIF";
                break;
            case "JPG":
                echo "Imagen JPG";
                break;
            case "ZIP":
                echo "Archivo comprimido ZIP";
                break;
            default:
                echo "Archivo $extensionFinal";
                break;
        }
    }

    tipo_fichero($archivo);
?>
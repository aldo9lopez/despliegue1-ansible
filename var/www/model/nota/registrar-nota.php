<?php
    if(isset($_POST["publicar"])){
        try{
            $contenido= $_POST["contenido"];
            
            date_default_timezone_set("America/Mexico_City");
            $fecha = date("y-n-j");

            $query="INSERT INTO nota VALUES(0,:personal,:contenido,:fecha)";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":personal",$personal);
            $resultado->bindValue(":contenido",$contenido);
            $resultado->bindValue(":fecha",$fecha);
                
            $resultado->execute();

            echo '<script> window.location.replace("index")</script>';

        }catch(Exception $e){
            $mensaje = $e->getMessage();
            echo '<script type="text/javascript">';
            echo 'window.alert("'. $e->getMessage() .'");';
            echo "</script>";
        }
    }
?>
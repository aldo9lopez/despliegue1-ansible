<?php
    if(isset($_POST["publicar-comentario"])){
        try{
            $comentario= $_POST["comentario"];
            
            date_default_timezone_set("America/Mexico_City");
            $hora = date('G:i:s');
            $fecha = date("y-n-j");

            $query="INSERT INTO comentario VALUES(0,:personal,:nota,:comentario,:fecha,:hora)";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":personal",$personal);
            $resultado->bindValue(":nota",$idnota);
            $resultado->bindValue(":comentario",$comentario);
            $resultado->bindValue(":fecha",$fecha);
            $resultado->bindValue(":hora",$hora);
                
            $resultado->execute();

        }catch(Exception $e){
            $mensaje = $e->getMessage();
            echo '<script type="text/javascript">';
            echo 'window.alert("'. $e->getMessage() .'");';
            echo "</script>";
        }
    }

    if(isset($_POST["publicar-respuesta"])){
        try{
            $comentario= $_POST["comentario"];
            $respuesta= $_POST["respuesta"];
            
            date_default_timezone_set("America/Mexico_City");
            $hora = date('G:i:s');
            $fecha = date("y-n-j");

            $query="INSERT INTO respuesta VALUES(0,:personal,:comentario,:respuesta,:fecha,:hora)";
            $resultado=$base->prepare($query);
            $resultado->bindValue(":personal",$personal);
            $resultado->bindValue(":comentario",$comentario);
            $resultado->bindValue(":respuesta",$respuesta);
            $resultado->bindValue(":fecha",$fecha);
            $resultado->bindValue(":hora",$hora);
                
            $resultado->execute();

        }catch(Exception $e){
            $mensaje = $e->getMessage();
            echo '<script type="text/javascript">';
            echo 'window.alert("'. $e->getMessage() .'");';
            echo "</script>";
        }
    }
?>
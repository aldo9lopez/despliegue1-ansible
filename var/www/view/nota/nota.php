<div class="main">
    <div class="nota">
        <h2>Nota por <?= $nombre_nota?></h2>
        <a href="index">Regresar</a>
        <p><?= $contenido?></p>
        <i>Escrito el <?= $fecha?></i>
    </div>

    <div class="comentarios">
        <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php") . '?id=' . $idnota); ?>" method="post">
            <label for="comentario"><b>Nuevo comentario</b></label>
            <textarea name="comentario" id="comentario" cols="30" rows="4"></textarea>
            <input type="submit" name="publicar-comentario" value="Publicar">
        </form>

        <h4>Comentarios</h4>
        <?php foreach($comentarios as $comentario){ ?>
        <div class="comentario">
            <span class="nombre"><?= $comentario->Nombre?> dijo:</span>
            <p class="comentario-text"><?= $comentario->comentario?></p>
            <i>A las <?= $comentario->hora?> del día <?= $comentario->fecha?></i>
            <input type="button"  id="responder-<?= $comentario->idcomentario?>" onclick="habilitarRespuesta(<?= $comentario->idcomentario?>)" value="Responder">
        </div>
        <div class="respuestas">
            <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php") . '?id=' . $idnota); ?>" method="post" id="form-<?=  $comentario->idcomentario?>" style="display: none;">
                <textarea name="respuesta" id="respuesta" cols="30" rows="4"></textarea>
                <input type="hidden" name="comentario" value="<?= $comentario->idcomentario?>">
                <input type="submit" name="publicar-respuesta" value="Responder">
            </form>

            <?php
                $sql="SELECT A.idrespuesta, A.respuesta, A.fecha, A.hora,
                (SELECT CONCAT(B.nombre,' ',B.apepaterno) FROM personal B WHERE B.idpersonal=A.personal) AS Nombre 
                FROM respuesta A WHERE A.comentario = :comentario ORDER BY A.idrespuesta DESC, A.fecha DESC";
                $resultado=$base->prepare($sql);
                $resultado->bindValue(":comentario",$comentario->idcomentario);
                $resultado->execute();
                $respuestas=$resultado->fetchAll((PDO::FETCH_OBJ));

                foreach($respuestas as $respuesta){
                    ?>
                    <div class="respuesta">
                        <span class="nombre"><?= $respuesta->Nombre?> respondió:</span>
                        <p class="respuesta-text"><?= $respuesta->respuesta?></p>
                        <i>A las <?= $respuesta->hora?> del día <?= $respuesta->fecha?></i>
                    </div>
                    <?php
                }
            ?>
        </div>
        <?php }?>
    </div>
</div>
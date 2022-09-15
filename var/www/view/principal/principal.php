<div class="main">
    <nav> 
        
        <a href="logout">Cerrar Sesión</a>
        <h2>Hola <?= $profilename;?></h2>
    </nav>
    <div class="agregar-nota">
        <?php if($tipo=='Interno'){ ?>
            <a href="agregar-nota">Agregar nota</a>
        <?php }else{?>
            <span><i>Sólo el personal interno puede agregar una nota</i></span>
        <?php }?>
    </div>

    <div class="notas">
        <?php foreach($notas as $nota) { ?>
        <a href="nota?id=<?= $nota->idnota?>">
            <span>Nota por <?= $nota->Nombre?></span> <br>
            <span>Escrita el <?= $nota->fecha?></span>
        </a>
        <?php } ?>
    </div>

</div>
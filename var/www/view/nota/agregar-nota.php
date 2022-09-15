<div class="main">
    <h2>Nueva nota</h2>
    <form action="<?php echo(basename($_SERVER['PHP_SELF'],".php")); ?>" method="post">
        <label for="contenido">Escribe la nota</label>
        <textarea name="contenido" id="contenido" cols="30" rows="10"></textarea>
        <input type="submit" name="publicar" value="Publicar">
    </form>
</div>
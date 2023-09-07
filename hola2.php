<?php
    require_once 'personajeold.php';
    $personajes = Personaje::recuperarTodos();
?>
<html>
<head></head>
<body></body>
    <ul>
    <?php foreach($personajes as $item):?>
    <li><?php echo $item['id'].' - '. $item['nombre'].' - '. $item['apellido']; ?> </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>

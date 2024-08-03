<?php
    session_start();
    #session_destroy();
    require 'conexion.php';

    $consul = "SELECT * FROM usuarios ORDER by id DESC";
    $_SESSION['publicaciones'] = $sql->query($consul);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h2 style="text-align: center">Blog</h2>
    
    <form action="crud.php" method="post" class="text-center">
        <input type="text" value="<?php echo $_SESSION['usuario'];?>" id="usuario" name="usuario">
        <input type="text" placeholder="Mensaje" id="mensaje" name="mensaje">
        <button type="submit" name="enviar" class="btn btn-primary">Publicar</button>
        <a href="index.php" class="btn btn-primary">Refrescar</a>
    </form>

    <div class="border rounded p-3 m-5">
        <h5>Publicaciones</h5>
        <?php
            foreach ($_SESSION['publicaciones'] as $user) {
                echo $user['usuario'].':'.'</br>';
                echo $user['mensaje'].'<hr>';
            } 
        ?>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
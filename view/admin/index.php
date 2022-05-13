<?php 
    $user = $this->d["user"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <?php $opciones = array(
        new BarraGrupo("Peliculas",array(new BarraElemento("cartelera","peliculas"),new BarraElemento("agregar Nueva","pelicula_nueva"))),
        new BarraElemento("Dulceria","dulceria"),
        new BarraElemento("Datos","datos"),
        new BarraElemento("Salir",""))
    ; ?>
    <?php $this->showMessages(); ?>
    <?php include "barra.php";?>
    <?php switch($this->d["actual"]){
        case "datos": include_once "datos.php";
            break;
        case "dulceria": include_once "dulceria.php";
            break;
        case "pelicula_nueva": include_once "pelicula_nueva.php";
            break;
        case "peliculas": include_once "peliculas.php";
            break;
        default: include_once "datos.php";
            break;
    } 
        
    ?>

    <?php include "footer.php"; ?>
</body>
</html>
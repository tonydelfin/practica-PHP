<?php 
    include('GuardarE.php   ');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Juvenil</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="preload" href="css/styles.css" as="style">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    
    <header>
        <h1 class="titulo">Registro de Equipos</h1> 
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="index.html">Inicio</a>
            <a href="TablaEquipos.php">Tabla de Equipos</a>

        </nav>
    </div>

    <section class="hero">
        <div class="contenido-hero">
            <h2>Equipos </h2>   
            <div class="ubicacion">

            </div>
        
    
            </div> <!-- .contenido-hero -->
        </section>
    
        <section>
            <h2>Registra Equipos</h2>

            <form action="GuardarE.php" method="post" class="formulario">
                <fieldset>
                    <legend>Registro </legend>
                    <legend>Para eliminar solo ingrese el Id del equipo</legend>

                    <div class="contenedor-campos">

                        <div class="campo">
                            <label>Id Equipo</label>
                            <input class="input-text" type="number" name ="Id_equipo"  placeholder="Identificador">
                        </div>

                        <div class="campo">
                            <label>Nombre</label>
                            <input class="input-text" type="text" name ="Nombre" placeholder="Nombre">
                        </div>

                        <div class="campo">
                            <label>Categoria </label>
                            <input class="input-text" type="text" name ="categoria" placeholder="Juvenil   1-Varonil   1-Femenil">

                        </div>

                        <div class="campo">
                            <label >Contacto</label>
                            <input class="input-text" type="email" name ="Contacto" placeholder="Correo">
                        </div>
                        
                        <div class="campo">
                            <label>Registro </label>
                            <input class="input-text" type="text" name ="registro" placeholder="¿Registrado?">

                        </div>

                        <div class="campo">
                            <label>Estatus </label>
                            <input class="input-text" type="text" name ="estatus" placeholder="Activo o Inactivo">

                        </div>






                    </div> <!-- .contenedor-campos -->
                    
                    <div class=" flex">
                        <input class="boton w-sm-100" type="submit" name= "guardar" value="Guardar">
                    </div>
                    
                    <div class=" flex">
                        <input class="boton w-sm-100" type="submit" name="eliminar" value="Eliminar">
                    </div>

                    <div class="alinear-derecha flex">
                        <input class="boton w-sm-100" type="submit" value="Cancelar">
                    </div>
                    

                </fieldset>
            </form>

        </section>  
    
</body>
</html>
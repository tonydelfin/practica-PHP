<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h1 class="titulo">Login</h1> 
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="index.html">Inicio</a>

        </nav>
    </div>

    <section class="hero4">
        <div class="contenido-hero4">
    
        </div> <!-- .contenido-hero -->
    </section>
        <section>
            <h2>Registrarse</h2>

            <form action="guardar.php" method= "post" class ="formulario">
            <fieldset>
                    <legend>Ingrese todos los Campos</legend>

                    <div class="contenedor-campos">

                        
                        <div class="campo">
                            <label>Id Registro</label>
                            <input class="input-text" type="number" name = "Id_registro" placeholder="Identificador">
                        </div>

                        <div class="campo">
                            <label>Nombre</label>
                            <input class="input-text" type="text" name ="Nombre" placeholder="Nombre">
                        </div>

                        <div class="campo">
                            <label >Apellidos</label>
                            <input class="input-text" type="text" name ="Apellidos" placeholder="Apellidos">
                        </div>
                        
                        <div class="campo">
                            <label>Correo</label>
                            <input class="input-text" type="text"  name ="Correo" placeholder="Correo">
                        </div>

                        <div class="campo">
                            <label>Contraseña</label>
                            <input class="input-text" type="password"  name ="Clave" placeholder="Contraseña">
                        </div>

                        
                        <div class="campo">
                            <label>Id usuario</label>
                            <input class="input-text" type="number"  name ="Id_usuario" placeholder="Identificador">
                        </div>


                    </div> <!-- .contenedor-campos -->
                    
                    <div class="alinear-derecha flex">
                        <input class="boton w-sm-100" type="submit" value="Registrarse">
                    </div>
                    
                    

                </fieldset>
            </form>
        </section>
    

</body>
</html>
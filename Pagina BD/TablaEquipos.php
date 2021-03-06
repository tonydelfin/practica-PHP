<?php 
    include('GuardarE.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <link rel="preload" href="css/styles.css" as="style">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    
    <header>
        <h1 class="titulo">Equipos</h1> 
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="index.html">Inicio</a>


        </nav>
    </div>

    <section class="hero3">
        <div class="contenido-hero3">
            <h2>Equipos de las categorias </h2>   
            <div class="ubicacion">

            </div>
            
                <p>Primera</p>
                <p>Primera Femenil</p>
                <p>Sub-18</p>
                
    
        </div> <!-- .contenido-hero -->
    </section>
    
    <h2>Tabla de Equipos</h2>

    <div class="datatable-container">

        <div class="header-tools">

            <div class="tools">
                <ul>
                    <li> <span> <input type="checkbox"></span></li>
                    <li>
                        <button>
                            <i class="material-icons">add_circle</i>
                        </button>
                    </li>

                    <li>
                        <button>
                            <i class="material-icons"> edit </i>
                        </button>
                    </li>

                    <li>
                        <button>
                            <i class="material-icons"> delete</i>
                        </button>
                    </li>

                    <li>
                        <button>
                            <i class="material-icons"> share</i>
                        </button>
                    </li>

                </ul>
            </div>

            <div class="search">
                <input type="text " name="" id="" class="search-input">
            </div>

        </div>

        <table class="datatable">
            <thead>
                <tr>

                    <th>Id Equipo</th>
                    <th>Nombre Equipo</th>
        
                    
                </tr>
            </thead>
            <tbody>
                
                    <td class="table-checkbox"> <input type="checkbox" name="" id=""></td>
                    <td><span class="available"></span></td>
                    <?=mostrarDatos($conn); ?>
                

            </tbody>
        </table>

        <div class="footer-tools">
            <div class="list-items">
                Mostrar
                <select name="n-entries" id="n-enties" class="n-entries">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
                Entradas

            </div>

            <div class="pages">
                <ul>
                    <li><span class="active">1</span></li>
                    <li><button>2</button></li>
                    <li><button>3</button></li>
                    <li><button>4</button></li>
                    <li><span>...</span></li>
                    <li><button>9</button></li>
                    <li><button>10</button></li>
                </ul>
            </div>
        </div>

    </div>

    
</body>
</html>
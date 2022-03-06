<?php
include 'conect.php';

diferencia($conn);

function diferencia($conn){
    if(isset($_POST['guardar'])){
        insertar($conn);
    }
    if(isset($_POST['eliminar'])){
        eliminar($conn);
    }
}

function insertar($conn){


    $Id_Equipo = $_POST['Id_equipo'];
    $Nombre=$_POST['Nombre'];
    $Categoria=$_POST['categoria'];
    $Contacto= $_POST['Contacto'];
    $Registro = $_POST['registro'];
    $Estaus = $_POST['estatus'];


    $sql= "INSERT INTO equipo (Id_equipo, Nombre, categoria, Contacto, registro, estatus) VALUES ('$Id_Equipo','$Nombre','$Categoria','$Contacto','$Registro','$Estaus')";
   
    if (mysqli_query($conn, $sql)) {
        echo "Registro ingresado correctamente";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    
}
function eliminar($conn){
    $Id_Equipo = $_POST['Id_equipo'];

    $sql = "DELETE FROM equipo WHERE Id_equipo= '$Id_Equipo'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

function mostrarDatos($conn){
    $sql = "SELECT * FROM equipo";
    $resultado= mysqli_query($conn, $sql);

    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['Id_equipo'];
        echo "<td>".$fila['Nombre'];
        echo "<tr>";
    }  
    mysqli_close($conn);
}



?>



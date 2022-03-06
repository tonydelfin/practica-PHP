<?php
include 'conect.php';


if( isset($_POST['Nombre'])){

    //se obtienen los valor de los campos....
    $Id_Registro = $_POST['Id_registro'];
    $Nombre=$_POST['Nombre'];
    $Apellidos=$_POST['Apellidos'];
    $Correo= $_POST['Correo'];
    $Contraseña = $_POST['Clave'];
    $Id_usuario = $_POST['Id_usuario'];


    $sql= "INSERT INTO registrou (Id_registro, Nombre, Apellidos, Correo, Clave, Id_usuario) VALUES ('$Id_Registro','$Nombre','$Apellidos','$Correo','$Contraseña','$Id_usuario')";
   
    if (mysqli_query($conn, $sql)) {
        echo "Registro ingresado correctamente";
     } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
}
else
echo "Nada que guardar...";



?>
<br />
<br />
<a href="index.html">Regresar</a>
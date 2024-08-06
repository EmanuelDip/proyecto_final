<?php
// Incluir la base de datos
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $nombre = $_POST["nombre"];
    $especialidad = $_POST["especialidad"];
    
    // Procesar la foto_perfil subida
    $foto_perfil = $_FILES['foto_perfil']['name'];
    $foto_perfil_temp = $_FILES['foto_perfil']['tmp_name'];
    $ruta_foto_perfil = 'img/' . $foto_perfil;
    move_uploaded_file($foto_perfil_temp, $ruta_foto_perfil);

    // Conectar a la base de datos
    $con = conectarDB();
    
    // Preparar la consulta SQL
    $sql = "INSERT INTO instructores (nombre, especialidad, foto_perfil) VALUES ('$nombre', '$especialidad', '$foto_perfil')";
    
    if ($con->query($sql) === TRUE) {
        echo "El instructor se ha subido correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    // Cerrar la conexión
    $con->close();
}
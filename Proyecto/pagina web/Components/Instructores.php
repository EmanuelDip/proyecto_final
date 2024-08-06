<?php
// La variable con, contiene la conexion a la base de datos, del archivo db.php
$con = conectarDB();
// la variable SQL, contiene la consulta
$sql = "SELECT id, nombre, especialidad, foto_perfil FROM instructores";
$result = $con->query($sql);

?>

<?php

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {        
        echo '<div class="instructor">';
        echo '<div class="instructor-imagen">';
        echo '<img class="foto-instructor" src="admin/img/' . $row["foto_perfil"] . '" alt="' . $row["nombre"] . '">';
        echo '</div>';
        echo '<div class="instructor-datos">';
        echo '<h3>' . $row["nombre"] . '</h3>';
        echo '<p>' . $row["especialidad"] . '</p>';
        echo '</div>';
        echo '</div>';
    }


} else {
    echo '<h3>No se encontraron instructores</h3>';
}
?>

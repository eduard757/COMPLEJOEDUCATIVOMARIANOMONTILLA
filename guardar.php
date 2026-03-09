<?php
// 1. Conexión a la base de datos que ya tienes activa en XAMPP
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "mariano_montilla";

$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

// 2. Capturar los datos del formulario (deben coincidir con el 'name' de tus inputs)
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$grado  = $_POST['grado'];

// 3. Orden para insertar en la tabla 'alumnos' que ya creaste en tu disco duro
$sql = "INSERT INTO alumnos (cedula, nombre, grado) VALUES ('$cedula', '$nombre', '$grado')";

if(mysqli_query($conexion, $sql)){
    echo "<script>
            alert('¡Alumno $nombre guardado con éxito en el servidor local!');
            window.location.href='índice.html';
          </script>";
} else {
    echo "Error al guardar: " . mysqli_error($conexion);
}

// Cerramos la conexión
mysqli_close($conexion);
?>

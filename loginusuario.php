<?php
include ("conexion.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"];
    $password = md5($_POST["password"]);

    // Consulta SQL para verificar el usuario y contraseña
    $query = "SELECT * FROM regisuser WHERE usuario='$usuario' AND pass='$password'";
    $result = $conexion->query($query);

    if ($result->num_rows > 0) {

        session_start(); //se inicia sesión
        $_SESSION['usuario']= $usuario; //Se utiliza la variable global de PHP para las sesiones
        //if (($nr == 1) && (password_verify($password, $row['pass']))) {




        // Inicio de sesión exitoso
        echo "<script>
                alert('¡Información Correcta!');
                window.location= 'home.php'
                </script>";
    } else {
        // Error en inicio de sesión
        echo "<script>
                alert('¡Información erronea! las credenciales de autenticación son incorrectas');
                window.location= 'index.html'
                </script>";
    }
    
    $conexion->close();
}
?>
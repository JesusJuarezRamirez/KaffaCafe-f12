<?php
include("../bd/conexion.php");

if(isset($_POST['subReg'])){
    $nombre = $_POST['nombre'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $num_tel = $_POST['num_tel'];
    $email = $_POST['email'];
    $contrasenna = $_POST['contrasenna'];

    $query = "INSERT INTO tbl_users
              (nombre, ap, am, num_tel, email, contrasenna, estado)
              VALUES ('$nombre', '$ap', '$am', '$num_tel', '$email', '$contrasenna', '1')";

    $result = mysqli_query($conexion, $query);
    if (!result) {
                  die ("No se realizó el registro.");
              }

              $_SESSION['message'] = 'Registro realizado. Inicia Sesión con tu correo electronico y contraseña.';
              $_SESSION['message_type'] = 'success';
              header("Location: ../index.php");
}
?>
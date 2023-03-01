
<?php



include_once("conexion.php");
session_start();

$email=$_POST['email'];
$name= $_POST['name'];
$phone=$_POST['phone'];
$message=$_POST['message'];


// crear conexion
$con=new Conexion();

//llamar metodo
$con = $con->conectar();
if ($con){

    //script SQL
    $sql="INSERT INTO `contactos`(`correo`,`nombres`,`telefono`,`mensaje`)values('$email','$name','$phone','$message')";
    $consulta=$con->prepare($sql);
    $consulta->execute();
    header('location: ../template/index.php');
}
?>
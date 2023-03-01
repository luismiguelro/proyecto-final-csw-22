
  <?php
  include 'header-reg-ini.php';
  ?>
    <div class="card text-center m-5">
        <div class="card-header">
            Contacto Personal Obras Civiles ERR S.A.S
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                <td>ID</td>
                  <td>Nombres</td>
                  <td>Apellidos</td>
                  <td>Fecha Nacimiento</td>
                  <td>Contacto</td>
                  <td>Correo Electronico</td>
                  <td>EPS</td>
                  <td>ARL</td>
                  <td>Cargo</td>
                <tbody>
                <?php 
                $inc = include("../controlador/con_db.php");
                 if ($inc) {
                    $consulta = "SELECT * FROM personalregistro";
                    $resultado = mysqli_query($conex,$consulta);
                    if ($resultado) {
                        while ($row = $resultado->fetch_array()) {
                        $id = $row['CC'];
                        $nomC=$row['nombre'];
                        $apellidoC=$row['apellidos'];
                        $dateC=$row['fechaNacimiento'];
                        $contactC=$row['contacto'];
                        $emailC=$row['correo'];
                        $epsC=$row['eps'];
                        $arlC=$row['arl'];
                        $cargoC=$row['cargo'];
                        ?>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $nomC; ?></td>
                    <td><?php echo $apellidoC; ?></td>
                    <td><?php echo $dateC; ?></td>
                    <td><?php echo $contactC; ?></td>
                    <td><?php echo $emailC; ?></td>
                    <td><?php echo $epsC; ?></td>
                    <td><?php echo $arlC; ?></td>
                    <td><?php echo $cargoC; ?></td>

                </tbody>
                <?php
	    }
	}
}
?>

        </table>
        
        <div class="text-end">
                <a href="registro.php"><button class="btn btn-danger"><i class="bi bi-person-plus"></i> Ingresar Personal</button></a>
        </div>
        </div>
        <div class="card-footer text-muted">
            Designed by Luis Miguel Rodriguez 2022 &copy;
        </div>
    </div>
    <div class="card text-center m-5">
        <div class="card-header">
            Contacto Pagina Principal
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                <td>Email</td>
                  <td>Nombres</td>
                  <td>Telefono</td>
                  <td>Mensaje</td>
                <tbody>
                <?php 
                $in = include("../controlador/con_db.php");
                 if ($in) {
                    $consult = "SELECT * FROM contactos";
                    $result = mysqli_query($conex,$consult);
                    if ($result) {
                        while ($row = $result->fetch_array()) {
                        $email = $row['correo'];
                        $name=$row['nombres'];
                        $phone=$row['telefono'];
                        $message=$row['mensaje'];
                        ?>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $message; ?></td>
                

                </tbody>
                <?php
	    }
	}
}
?>

        </table>
        </div>
        <div class="card-footer text-muted">
            Designed by Luis Miguel Rodriguez 2022 &copy;
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>

<?php
    if (isset($_REQUEST['login']))
        {
            $email = $_REQUEST['email']??'';        # variables obtencion de email del input html
            $password = $_REQUEST['password']??'';  # variables obtencion de password del input html
            #$con = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,BD);  # se inicializa la conexion
            $sql = "SELECT id FROM registro WHERE correo='".$email."' and contraseña='".$password."' "; # query para obtener la busqueda de los campos por id
            $result = mysqli_query($conn,$sql);   # se obtiene el resultado de la query
            
            if ($result->num_rows > 0)
                {
                    $row = mysqli_fetch_assoc($result);    # registro de la peticion
                    $_SESSION['id']=$row['id'];   # se almacena la sesion en un array
                    echo "<script>alert('login correcto...')</script>";   # se muestra un scrpt de alerta
                    header("Location: correcto.php");
                }
            else
                {
                    ?>
                        <div class="alert alert-danger" role="alert" > Error de login</div>
                    <?php
                }
        }
?>
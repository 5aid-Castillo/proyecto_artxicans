<?php
    include('../global/conexion.php');
    include('templates/cabecera.php');
?>
 <div class="signup-form">
    <?php 
        require('../global/registrar.php');
    ?>
 <form action="" method="POST"  class="registro">
        <div class="form">
            <h1>Registro</h1>
            <div class="grupo">
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Nombre"
                    title="Name only accepts letters and blank spaces"
                    pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$"
                    required
                />
            </div>
            <div class="grupo">
                <input
                    type="email"
                    name="email"
                    id="email"
                    title="Wrong email"
                    placeholder="Ingresa tu correo"
                    required
            />
            </div>
            <div class="grupo">
                <input
                    type="password"
                    name="pass"
                    id="pass"
                    placeholder="Contraseña"
                    required
            />
            </div>

            <button type="submit" class="start" name="reg" id="reg">Registrar</button>
            <hr>
            <h5 class="have">¿Ya tienes una cuenta?</h5>
            <div class='go-login'>
                <a href="login.php" class="have init" >Iniciar sesión</a> 
            </div>
        </div>
    </form> 
    
</div>
<?php
  include('templates/pie.php');
?>


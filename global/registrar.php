<?php
     if(isset($_POST['reg'])){
        
    
            $nombre = $_POST['name'];
            $correo = $_POST['email'];
            $password = $_POST['pass'];
            
        
              $sql = mysqli_query("SELECT * FROM registro WHERE Correo='$correo'");
            $result = mysqli_query($conn,$sql);
            if (!$result->num_rows > 0)
                {
                    $sql = (" INSERT INTO registro VALUES(NULL,'$nombre','$correo','$password')");
                    $result = mysqli_query($conn,$sql);
                    if ($result)
                        {
                            echo '<div class = "succes">Usuario registrado correctamente</div>';
                        }
                    else
                        {
                            echo '<div class = "alerta">Usuario no registrado</div>';
                        }
                }  
     
            }      
   
?>
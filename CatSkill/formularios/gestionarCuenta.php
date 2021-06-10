<?php
$GLOBALS["title"] = "Gestionar Compte";
include("../header_footer/header.php");

?>
<main>
    <?php

include("../bd/con_db.php");
    if(isset($_POST["confirmar"])){
        if(strlen($_POST["email"])<1){
            
            
            echo '<span class="bad">Falten camps per introduir</span>';
            
            
        }else{
            if($dbrow["contra"] == $_POST["contra"]){
                $email = trim($_POST["email"]);
                
                $consulta = "UPDATE USUARIS SET email='$email' WHERE nom_usuari='{$_SESSION['nombre_usuario']}' ";
                $resultado = mysqli_query($conex,$consulta);
                if($resultado){
                    
                    echo '<span class="good">Has actualitzat les dades correctament</span>';

                }
            }else{
                echo '<span class="bad">Contraseña incorreta</span>';
            }
        }
    }


    include("../bd/con_db.php");
    $resultado = mysqli_query($conex,"select * from USUARIS where nom_usuari='{$_SESSION["nombre_usuario"]}' limit 1;");
    $dbrow = mysqli_fetch_array($resultado);
    

    
    ?>
    <h1><?php echo $GLOBALS["title"];?></h1>
    <fieldset>
        <legend>Cambio de datos personales</legend>
        <form method="POST">
            <label for="name">Email: </label>
            <br>
            <input type="text" value="<?php echo $dbrow["email"];?>" name="email" id="name"/>
            <br>
            <label for="contra">Contraseña para confirmar: </label>
            <br>
            <input type="password"  name="contra" id="contra"/>
            <br>
            <input type="submit" value="Actualizar datos" name="confirmar"/>
        </form>
    </fieldset>

</main>
     
<?php

include("../header_footer/footer.php");
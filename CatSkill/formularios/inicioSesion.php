<?php
$GLOBALS["title"] = "Inicio de Sesion";
include("../header_footer/header.php");

?>
<main>
    
    <br>
    <?php
    include("../bd/con_db.php");
    
    if(isset($_POST["inicio"])){
        
        if(strlen($_POST["nom"])<1 || strlen($_POST["contra"])<1){
        
            echo '<p class="bad">Introduce todos los datos porfavor</p>';
        }else{
            $nombre = $_POST["nom"];
            $contra = $_POST["contra"];
            $resultado = mysqli_query($conex,"select * from USUARIS where nom_usuari ='$nombre' and contrasenna = '$contra';");
            $rows= mysqli_num_rows($resultado);//Saber cantidad de arrays que hay
            
            if($rows <1){
                echo '<p class="bad">Usuario o contrasenna incorrectos</p>';
                
            }else{
                $_SESSION['nombre_usuario'] = $nombre;
                header('Location: http://localhost/CatSkill/index.php');
            }
        }
    }
    ?>
    <div class="datos">
        
        <form method = "POST">
            <h1><?php echo $GLOBALS["title"]; ?></h1>
            <p>Nombre de usuario</p>
            <input type="text" name="nom">
            <p>Contrasenna</p>
            <input type="password" pattern=".{6,}" name="contra">
            <br>
            
            <div class="enviar"> 
                <a href="registracion.php">No tens compte?</a>
                <input type="submit" value="Confirmar" name="inicio">
            </div>
            
        </form>
        <img src="http://localhost/CatSkill/img/logo_bcnn.svg" alt="El logo no funciona"/>
    </div>
</main>           
<?php

include("../header_footer/footer.php");

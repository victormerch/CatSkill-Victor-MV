<?php
$GLOBALS["title"] = "Creacio de compte";
include("../header_footer/header.php");
?>

<main>
    <h1><?php echo $GLOBALS["title"]; ?></h1>

    <?php

include("../bd/con_db.php");

    if(isset($_POST["registro"])){
        if(strlen($_POST["nom"])<1 ||
            strlen($_POST["cognoms"])<1 ||
            strlen($_POST["nif"])<1 ||
            strlen($_POST["email"])<1 ||
            strlen($_POST["codi_postal"])<1||
            strlen($_POST["telefon"])<1||
            strlen($_POST["contra"])<1){
            
            if(strlen($_POST["nom"])<1){
                echo '<span class="bad">Falta per introduir el nom</span>';
            }
            elseif(strlen($_POST["cognoms"])<1){
                echo '<span class="bad">Falta per introduir el cognoms</span>';

            }
            elseif(strlen($_POST["nif"])<1){
                echo '<span class="bad">Falta per introduir el nif</span>';

            }
            elseif(strlen($_POST["email"])<1){
                echo '<span class="bad">Falta per introduir el email</span>';

            }
            elseif(strlen($_POST["codi_postal"])<1){
                echo '<span class="bad">Falta per introduir el codi_postal</span>';

            }
            elseif(strlen($_POST["telefon"])<1){
                echo '<span class="bad">Falta per introduir el telefon</span>';

            }
            elseif(strlen($_POST["contra"])<1){
                echo '<span class="bad">Falta per introduir el contrasenya</span>';

            }
        }else{
            $nom = trim($_POST["nom"]);
            $cognoms = trim($_POST["cognoms"]);
            $email = trim($_POST["email"]);
            $nif = trim($_POST["nif"]);
            $codi_postal = trim($_POST["codi_postal"]);
            $telefon = trim($_POST["telefon"]);
            $contra = trim($_POST["contra"]);

            $consulta = "INSERT INTO USUARIS(nom_usuari, cognoms, DNI, email, codi_postal, telefon, contrasenna) 
                        VALUES ('$nom','$cognoms','$nif','$email','$codi_postal','$telefon','$contra')";
            
            $resultado = mysqli_query($conex,$consulta);
            if($resultado){
                echo '<span class="good">Et has registrat correctamente</span>';
            }else{
                echo '<span class="bad">No te has podido registrar</span>';
            }

        }
    }
    ?>

    <form method="POST">
        <div>
            <label for="1">Nom</label> <br>
            <input type="text" id="1" name="nom">
        </div>

        <div>
            <br>
            <label for="2">Cognoms</label><br>
            <input id="2" type="text" name="cognoms"/>
        </div>
        
        <div>
            <br>
            <label for="3">NIF</label><br>
            <input id="3"type="text" name="nif"/>
        </div>
        
        <div>
            <br>
            <label for="4">Email</label><br>
            <input type="email" id="4" name="email"/>
        </div>

        <div>
            <br>
            <label for="5">Codi Postal</label><br>
            <input type="text" id ="5" name="codi_postal">
        </div>

        <div>
            <br>
            <label for="6">Telefon</label><br>
            <input type="text" id ="6" name="telefon">
        </div>

        <div>
            <br>
            <label for="7">Contrasenya</label><br>
            <input type="password" pattern=".{6,}" id ="7" name="contra">
        </div>
    
        
        <div class="enviar">
            <br>
            
            <input type="submit" value="Crear Compte" name="registro">
            <a href="inicioSesion.php">Ya tinc compte</a>
        </div>
    </form>
    
    
</main>
<?php include("../header_footer/footer.php");?> 
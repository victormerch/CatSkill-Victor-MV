<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start(); ?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GLOBALS["title"]; ?></title>
    <link rel="stylesheet" type="text/css" href="http://localhost/CatSkill/style.css">
    <meta name="author" content="Victor Merchan <1Victormerch@gmail.com>" />
    <meta name="copyright" content="Propietario del copyright" />   
</head>
<body class="<?php echo basename($_SERVER['REQUEST_URI'], ".php"); 
              if(empty($_SESSION['nombre_usuario'])){
                  echo " nouserlogged ";
              }else{
                echo " userlogged";
              }?>">
<header>
    

    <div class="flexbox_header">

        <a href="https://www.barcelona.cat/ca/">www.barcelona.cat</a>
        <p><strong>Departament de Esdeveniments</strong></p>
        <img src="http://localhost/CatSkill/img/ajuntament-de-barcelona.png" alt="no rula"/> 

    </div>
    
            
</header>
<nav>
    <ul>
        <li><a href="http://localhost/CatSkill/index.php">Inici</a></li>
        
    
        <?php   
        
            if(empty($_SESSION['nombre_usuario'])){ ?>
            
            <li class="user"><a href="http://localhost/CatSkill/formularios/registracion.php">Registrarse</a></li>
            <li class="user"><a href="http://localhost/CatSkill/formularios/inicioSesion.php">Iniciar Sesio</a></li>
            
        <?php } else { ?>
            <li class="user">Hola <strong><?php echo $_SESSION['nombre_usuario']; ?></strong></li>
            <li class="user"><a href="http://localhost/CatSkill/formularios/cerrarSesion.php">Tanca Sessio</a></li>
            <li class="user"><a href="http://localhost/CatSkill/formularios/gestionarCuenta.php">Gestionar Compte</a></li>
        <?php } ?>
       
    </ul>
</nav>

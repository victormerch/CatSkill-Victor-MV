<?php
session_start();
unset($_SESSION['nombre_usuario']);

header('Location: http://localhost/CatSkill');
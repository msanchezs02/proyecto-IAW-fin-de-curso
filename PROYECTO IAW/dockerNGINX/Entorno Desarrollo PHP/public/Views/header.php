<?php
  session_start();
  if (!isset ($_SESSION['carrito'])) {
    $_SESSION['carrito']=array();
  }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1">
    <title>Pádel Majadas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
      .container {
        background-color:red;
      }

      .container header a span {
        color: #fff;
      }
    </style>
</head>
<body>
<!--
  Página de cabecera estática. Contiene el menú de la aplicación con enlaces que apuntan a la página
  index con el controlador y acción apropiado.
-->
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">PALAS DE PADEL</span>
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><a href="index.php?controller=ProductController&action=getAllProducts" class="nav-link">Productos</a></li>
        <li class="nav-item" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><a href="index.php?controller=UserController&action=MostrarLogin" class="nav-link active">Iniciar Sesión</a></li>
        <li class="nav-item" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><a href="index.php?controller=ProductController&action=mostrarCarrito" class="nav-link active">Carrito</a></li>
       <!-- <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>-->
      </ul>
    </header>
  </div>
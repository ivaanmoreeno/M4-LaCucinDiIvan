<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LaCucinaDiIvanCarta</title>
  
  <!-- Añadiendo enlaces a Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/estilo.css">
  <style>
    body {
      background-image: url('./IMG/ddd.jpg');
      background-size: cover;
      background-position: center;
      background-color: rgba(245, 245, 245, 0.9);
    }
    .menu-restaurante {
      width: 25%;
      margin: 0 10px;
    }
    
  </style>
</head>
<body>
  <h1>Casa Di Ivan</h1>
  <div class="explicacion">
    <p>Los emojis en nuestro menú indican los siguientes platos:</p>
    <ul>
      <li>🐟 - Contiene pescado</li>
      <li>🥩 - Contiene carne</li>
      <li>🥦 - Vegetariano</li>
      <li>❌🥖 - Sin gluten</li>
    </ul>
  </div>
    ...
  <div class="d-flex justify-content-center">
    <div class="menu-restaurante">
      <u><h2>ENTRANTES</h2></u>
      <?php
        /* Enlace al primer XML */
        if (file_exists('./XML/carta.xml')) {
          $platos = simplexml_load_file('./XML/carta.xml');
          foreach ($platos->entrante as $entrante) {
            echo "<strong>" . $entrante['nombre'] . "</strong>";
            echo " " . $entrante['precio'] . "<br>";
            echo " " . $entrante['descripcion'] . "<br>";
            echo "Calorías: " . $entrante['calorias'] . "<br>";
            echo "Tipo:" .$entrante['caracteristicas'] . "<br>";
            foreach ($entrante->ingrediente as $ingrediente) {
              echo "- " . $ingrediente['nombre'] . "<br>";
            }
            echo "<br>";
          }
        } else {
          exit('¡Todavia no han salido de la cocina!.');
        }
      ?>
    </div>
    <div class="menu-restaurante">
      <u><h2>PRIMEROS</h2></u>
      <?php
        /* Enlace al segundo XML */
        if (file_exists('./XML/carta.xml')) {
          $platos = simplexml_load_file('./XML/carta.xml');
          foreach ($platos->primero as $primero) {
            echo "<strong>" . $primero['nombre'] ."</strong>";
            echo " " . $primero['precio'] . "<br>";
            echo " " . $primero['descripcion'] . "<br>";
            echo "Calorías: " . $primero['calorias'] . "<br>";
            echo "Tipo:" .$primero['caracteristicas'] . "<br>";
            foreach ($primero->ingrediente as $ingrediente) {
            echo "- " . $ingrediente['nombre'] . "<br>";
            }
            echo "<br>";
            }
            } else {
            exit('¡Todavia no han salido de la cocina!.');
            }
            ?>
            </div>
            <div class="menu-restaurante">
            <u><h2>SEGUNDOS</h2></u>
            <?php
                 /* Enlace al tercer XML */
                 if (file_exists('./XML/carta.xml')) {
                   $platos = simplexml_load_file('./XML/carta.xml');
                   foreach ($platos->segundo as $segundo) {
                     echo "<strong>" . $segundo['nombre'] . "</strong>";
                     echo " " . $segundo['precio'] . "<br>";
                     echo " " . $segundo['descripcion'] . "<br>";
                     echo "Calorías: " . $segundo['calorias'] . "<br>";
                     echo "Tipo:" .$segundo['caracteristicas'] . "<br>";
                     foreach ($segundo->ingrediente as $ingrediente) {
                       echo "- " . $ingrediente['nombre'] . "<br>";
                     }
                     echo "<br>";
                   }
                 } else {
                   exit('¡Todavia no han salido de la cocina!.');
                 }
               ?>
            </div>
            <div class="menu-restaurante">
            <u><h2>POSTRES</h2></u>
            <?php
                 /* Enlace al cuarto XML */
                 if (file_exists('./XML/carta.xml')) {
                   $platos = simplexml_load_file('./XML/carta.xml');
                   foreach ($platos->postres as $postres) {
                     echo "<strong>" . $postres['nombre'] . "</strong>";
                     echo " " . $postres['precio'] . "<br>";
                     echo " " . $postres['descripcion'] . "<br>";
                     echo "Calorías: " . $postres['calorias'] . "<br>";
                     echo "Tipo:" .$postres['caracteristicas'] . "<br>";
                     foreach ($postres->ingrediente as $ingrediente) {
                       echo "- " . $ingrediente['nombre'] . "<br>";
                     }
                     echo "<br>";
                   }
                 } else {
                   exit('¡Todavia no han salido de la cocina!.');
                 }
               ?>
            </div>
            
              </div>
            </body>
            </html>

<?php
require_once '../private/config/config.php';

use Configuration\Configuration;

$configuration = new Configuration();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="stylesheet" href="<?php echo $configuration->getURLStyle(); ?>">
</head>

<body>
    <form action="./user/datos.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><hr>
        <label for="password">Contraseña</label>
        <input type="password" name="password"><hr>
        <input type="submit" value="Enviar">
    </form>
    <script src="<?php echo $configuration->getURLScript(); ?>"></script>
    <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('./service-worker.js')
          .then(function(registration) {
            console.log('Service Worker registrado con éxito:', registration);
          })
          .catch(function(error) {
            console.log('Error al registrar el Service Worker:', error);
          });
      });
    }
  </script>
</body>

</html>

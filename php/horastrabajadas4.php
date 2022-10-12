<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
        <?php
          $horasTrabajadas  = $_POST['horasTrabajadas'];

          if ($horasTrabajadas  < 40) {
            $sueldoSemanal = 12 * $horasTrabajadas ;
          } else {
            $sueldoSemanal = (40 * 12) + (($horasTrabajadas  - 40) * 16);
          }

          echo "El sueldo es de $sueldoSemanal euros";
        ?>
        <br><br>
        <a href="horastrabajadas4.html">>> Volver</a>
  </body>
</html>

967228906
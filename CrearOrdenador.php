<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>examen</title>
  </head>
  <body>
    <?php
    //aquí voy a incluir la clase
    include "claseOrdenador.php";
    //generamos los objetos
    $ordenador1=new claseOrdenador();
    $ordenador1->setMarca("Apple");
    echo "Marca= ".$ordenador1->getMarca();
    $ordenador1->setRam(8);
    echo "<br>Ram del pc= ".$ordenador1->getRam();

    $ordenador2=new claseOrdenador();
    $ordenador2->setMarca("Asus");
    echo "<br>Marca= ".$ordenador2->getMarca();
    $ordenador2->setRam(16);
    echo "<br>Ram del pc= ".$ordenador2->getRam();



     ?>

  </body>
</html>

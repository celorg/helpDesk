<?php
  session_start();

  //Se o indice do Array da session for diferente de autenticado ou autenticado for diferente de sim
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM' ){
    header('Location: index.php?login=erro2');
  }
?>
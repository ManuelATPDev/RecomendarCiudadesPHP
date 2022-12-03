<?php
#Definimos los parametros de búsqueda
do{
  $validado = false;
  $interesGeneral = readline("Introduzca si desea buscar ciudad por clima, ubicacion o turismo: ");

  switch($interesGeneral){
    case "clima":
    $interesEspecifico = readline("Introduzca si el tipo de clima debe ser frio, caliente o templado: ");
    switch($interesEspecifico){
      case "frio":
      $parametroGeneral = $interesGeneral;
      $parametroEspecifico = $interesEspecifico;
      $validado = true;
      break;

      case "caliente":
      $parametroGeneral = $interesGeneral;
      $parametroEspecifico = $interesEspecifico;
      $validado = true;
      break;

      case "templado":
      $parametroGeneral = $interesGeneral;
      $parametroEspecifico = $interesEspecifico;
      $validado = true;
      break;

      default: print_r("No hay ciudad con ese clima en mi registro");
      echo "<p>";
    }
  break;
  
    case "ubicacion":
    $interesEspecifico = readline("Introduzca si la ubicación debe ser capital, centro o llano: ");
    switch($interesEspecifico){
      case "capital":
      $parametroGeneral = $interesGeneral;
      $parametroEspecifico = $interesEspecifico;
      $validado = true;
      break;

      case "centro":
      $parametroGeneral = $interesGeneral;
      $parametroEspecifico = $interesEspecifico;
      $validado = true;
      break;

      case "llano":
      $parametroGeneral = $interesGeneral;
      $parametroEspecifico = $interesEspecifico;
      $validado = true;
      break;

      default: print_r("No hay ciudad con esa ubicacion en mi registro");
      echo "<p>";
    }
  break;
  
    case "turismo":
    $interesEspecifico = readline("Introduzca si el turismo debe ser playa, selva o desierto: ");
    switch($interesEspecifico){
      case "playa":
      $parametroGeneral = $interesGeneral;
      $parametroEspecifico = $interesEspecifico;
      $validado = true;
      break;

      case "selva":
      $parametroGeneral = $interesGeneral;
      $parametroEspecifico = $interesEspecifico;
      $validado = true;
      break;

      case "desierto":
      $parametroGeneral = $interesGeneral;
      $parametroEspecifico = $interesEspecifico;
      $validado = true;
      break;

      default: print_r("No hay ciudad con ese tipo de turismo en mi registro");
      echo "<p>";
    }
  break;

    default: print_r("Debe seleccionar un interes valido");
    echo "<p>";
  }
  
}while($validado == false);
  
#arreglo de ciudades por clima
$clima = array("Merida" => "frio", "Cojedes" => "caliente", "Caracas" => "templado");

#arreglo de ciudades por ubicacion
$ubicacion = array("Miranda" => "capital", "Aragua" => "centro", "Apure" => "llano");

#arreglo de ciudades por turismo
$turismo = array("Margarita" => "playa", "Amazonas" => "selva", "Falcon" => "desierto");

#evaluar cada parametro general
 switch($parametroGeneral){

   case "clima":
   #recorre el array y guarda la llave en $ciudad y el valor en $valor 
   foreach ($clima as $ciudad => $valor) {
    if($valor == $parametroEspecifico){
      echo "$ciudad";
      echo "<p>";
    }
  }
   break;

   case "ubicacion":
   foreach ($ubicacion as $ciudad => $valor) {
    if($valor == $parametroEspecifico){
      echo "$ciudad";
      echo "<p>";
    }
  }
   break;

   case "turismo":
   foreach ($turismo as $ciudad => $valor) {
    if($valor == $parametroEspecifico){
      echo "$ciudad";
      echo "<p>";
    }
  }
   break;
}

?>
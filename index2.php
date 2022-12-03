<?php
// Se crean los diferentes array.
$weather = array("Bogota" => "Frio", "Monteria" => "Calido", "Medellin" => "Templado" );
$ubication = array ("Guajira"=> "Norte", "Leticia"=>"Sur", "Santander"=>"Este", 
"Antioquia"=>"Oeste");
$tourism = array("Santa Marta"=>"Mar", "Villavicencio"=>"Llano", "Rioacha"=>"Desierto", 
"Quindio"=>"Valle" );

// A traves de la función readline se escribes en consola las opciones de interes correspondientes a los 3 array construidos con anterioridad, el valor ingresado por el usuario en consola se guarda en la variable $search.
$search = readline("Seleccione la opción de su interes:   1.Clima 2.Ubicación 3.Turismo  ");
// Se genera la estructura switch evaluando la variable $search y dependiendo de la opcion elegida se generan otras estructuras switch anidadas y se remiten a los valores "llave o clave " dentro del array correspondiente y de acuerdo al "valor" como parametro de busqueda.
switch($search){
  case 1:
  $clima = readline("Seleccione el clima favorito:   
  1.Frío 2.Cálido 3.Templado");
  switch($clima){
    case 1:
    $clave = array_search('Frio', $weather); 
    echo "La ciudad recomendada es ", $clave;
    break;
    case 2:
    $clave = array_search('Calido', $weather);
    echo "La ciudad recomendada es ", $clave;
    break;
    case 3:
    $clave = array_search('Templado', $weather);
    echo "La ciudad recomendada es ", $clave;
    break;           
  }
  break;

  case 2:
  $ubicacion = readline("Seleccione la ubicación 
  favorita: 1.Norte 2.Sur 3.Este 4.Oeste ");
  switch($ubicacion){
    case 1:
    $clave = array_search('Norte', $ubication); 
    echo "La ciudad recomendada es ", $clave;
    break;
    case 2:
    $clave = array_search('Sur', $ubication);
    echo "La ciudad recomendada es ", $clave;
    break;
    case 3:
    $clave = array_search('Este', $ubication);
    echo "La ciudad recomendada es ", $clave;
    break; 
    case 4:
    $clave = array_search('Oeste', $ubication);
    echo "La ciudad recomendada es ", $clave;
    break; 
  }
  break;
  
  case 3:
  $turismo = readline("Seleccione el turismo 
  favorito: 1.Mar 2.Llano 3.Desierto 4.Valle ");
  switch($turismo){
    case 1:
    $clave = array_search('Mar', $tourism); 
    echo "La ciudad recomendada es ", $clave;
    break;
    case 2:
    $clave = array_search('Llano', $tourism);
    echo "La ciudad recomendada es ", $clave;
    break;
    case 3:
    $clave = array_search('Desierto', $tourism);
    echo "La ciudad recomendada es ", $clave;
    break; 
    case 4:
    $clave = array_search('Valle', $tourism);
    echo "La ciudad recomendada es ", $clave;
    break; 
  }
  break;
}

?> 
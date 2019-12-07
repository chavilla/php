<?php

//Función encargada de hacer los autoload
function autoCargar($clase)
{
    require_once 'clases/' .$clase. '.php';
}

// Función que ejecuta la autocarga
spl_autoload_register('autoCargar');
 
?>

// Luego llamamos el autoload así:

<?php

//Para usar mis clase en este archivo
require_once 'autoload.php';

$usuario=new Usuario();
$categoria=new Categoria();
echo $usuario->nombre;
echo $usuario->email;
echo $categoria->descripcion;

?>

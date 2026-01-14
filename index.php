<?php
require_once 'config/config.php';
/* TODO: llamar las funciones */
require_once 'helpter/funciones.php';
/* TODO: Verificar si existe la ruta admin */
$isAdmin = strpos($_SERVER['REQUEST_URI'],'/'.ADMIN) !== false;
/* TODO: Comprobar si existe GET para crear urls amigable */
$ruta = empty($_GET['url']) ? 'principal/index':$_GET['url'];
/* TODO: Crear un array a partir de la ruta */
$array =explode('/', $ruta);
/* TODO: Validar si nos encontramos en la ruta */
if($isAdmin && (count($array) == 1
    || (count($array) == 2 && empty($array[1])))
    && $array[0] == ADMIN){
    /* TODO: Crear Controlador */
    $controller = 'Admin';
    $metodo = 'login';
}else{
    $indiceUrl = ($isAdmin) ? 1 : 0 ;
    $controller = ucfirst($array[$indiceUrl]);
    $metodo = 'index';
}
/* TODO: validar metodos */
$metodoIndice = ($isAdmin) ? 2 : 1;
if (!empty($array[$metodoIndice]) && $array[$metodoIndice] != '') {
    $metodo = $array[$metodoIndice];
}
/* TODO: validar parametros */
$parametro = '';
$parametroIndice = ($isAdmin) ? 3 : 2;
if (!empty($array[$parametroIndice]) && $array[$parametroIndice] != '') {
    for ($i = $parametroIndice ; $i < count($array); $i++) {
        $parametro .= $array[$i]. ',';
    }
    $parametro = trim($parametro, ',');
}
/* TODO: llamar autoload */
require_once 'config/app/Autoload.php';
/* TODO: validar directorio de controladores */
$dirControllers = ($isAdmin) ? 'controllers/admin/'. $controller . '.php': 'controllers/principal/'. $controller . '.php';
 if (file_exists($dirControllers)) {
    require_once($dirControllers);
    $controller = new $controller();
    if (method_exists($controller,$metodo)) {
        $controller->$metodo($parametro);
    }else {
        echo 'metodo no existe';
    }
}else {
    echo $metodo;
    echo $metodoIndice;
    echo 'controlador no existe';
    }
?>
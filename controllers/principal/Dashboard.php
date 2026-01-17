<?php
class Dashboard extends Controller{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index(){
        $data['title'] = 'Perfil cliente';
        $this->views->getViews('principal/clientes/index',$data);
    }
    public function salir(){
        session_destroy();
        reditect(RUTA_PRINCIPAL . 'login');
    }

}
?>


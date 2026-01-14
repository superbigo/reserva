<?php
class Servicio extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Servicios';
        $data['subtitle'] = 'Nuestros servicios';
        $this->views->getViews('principal/servicios/index',$data);
    }

}
?>


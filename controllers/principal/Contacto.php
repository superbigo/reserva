<?php
class Contacto extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Contacto';
        $data['subtitle'] = 'Contactenos';
        $this->views->getViews('principal/contactos/index',$data);
    }

}
?>


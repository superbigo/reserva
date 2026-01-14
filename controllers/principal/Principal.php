<?php
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Página principal';
        /* TODO: Traer sliders */
        $data['sliders'] = $this->model->getSliders();
        /* TODO: Traer habitaciones */
        $data['habitaciones'] = $this->model->getHabitaciones();
        $this->views->getViews('index', $data);
    }


}

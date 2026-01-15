<?php
class principalModel extends Query{

    public function __construct() {
        parent::__construct();

    }
    /* TODO: Recuperar los slider */
    public function getSliders(){
        return $this->selectAll("SELECT * FROM sliders ");
    }
    /* TODO: Recuperar las habitaciones */
    public function getHabitaciones(){
        return $this->selectAll("SELECT * FROM habitaciones WHERE estado = 1");
    }


}
?>
<?php
class principalModel extends Query{

    public function __construct() {
        parent::__construct();

    }
    public function getSliders(){
        return $this->selectAll("SELECT * FROM sliders WHERE estado = 1");
    }

    public function getHabitaciones(){
        return $this->selectAll("SELECT * FROM habitaciones");
    }


}
?>
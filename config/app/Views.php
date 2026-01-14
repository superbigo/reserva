<?php
class Views{
    public function getViews($vista, $data=""){
        require 'views/' . $vista . '.php';
    }
}

?>
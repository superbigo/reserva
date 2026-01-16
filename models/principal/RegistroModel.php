<?php
class RegistroModel extends Query{

    public function __construct() {
        parent::__construct();
    }

    public function registrarse($nombre, $apellido, $usuario, $correo, $hash, $rol) {
        $sql = 'INSERT INTO usuarios (nombre, apellido, usuario, correo, clave, rol) values (?,?,?,?,?,?)';
       return $this->insert($sql, [$nombre, $apellido, $usuario, $correo, $hash, $rol]);
    }

    /*TODO: validar registros unicos */
    public function ValidarUnique($item, $valor, $id_usuario)  {
        if ($id_usuario == 0) {
            $sql = "SELECT * FROM usuarios WHERE $item = '$valor'";
        }else {
            $sql = "SELECT * FROM usuarios WHERE $item = '$valor' AND id != $id_usuario";
        }
        return $this->select($sql);
    }
}
?>
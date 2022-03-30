<?php

    class Venta extends Conectar
    {
        public function nueva_venta($IDCLIENTE,$IDMATERIAL)
        {

        }

        public function get_cliente_x_id($IDCLIENTE){
            $conectar = parent::Conexion();
            parent::set_names();

            $sql = "SELECT * FROM t_clientes WHERE IDCLIENTE = ? ";//TODO: Seleccion segun id. -bindValue: buscar parametro
            $sql = $conectar->prepare($sql); //TODO: conectar y preparar query para ejecucion.
            $sql->bindValue(1,$IDCLIENTE); //TODO:  numeros de parametros a buscar (1),valor($IDCLIENTE)
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        
        public function get_producto_x_id($IDMATERIAL){
            $conectar = parent::Conexion();
            parent::set_names();

            $sql = "SELECT * FROM t_productos WHERE IDMATERIAL = ? ";//TODO: Seleccion segun id. -bindValue: buscar parametro
            $sql = $conectar->prepare($sql); //TODO: conectar y preparar query para ejecucion.
            $sql->bindValue(1,$IDMATERIAL); //TODO:  numeros de parametros a buscar (1),valor($IDMATERIAL)
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }

?>
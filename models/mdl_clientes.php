<?php
    class Cliente extends Conectar
    {
        public function get_cliente(){
            $conectar = parent::Conexion();
            parent::set_names();

            $sql = "SELECT * FROM t_clientes";//TODO: Seleccionar clientes.
            $sql = $conectar->prepare($sql); //TODO: conectar y preparar query para ejecucion.
            $sql->execute();
            return $resultado=$sql->fetchAll();
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

        public function delete_cliente_x_id($IDCLIENTE){
            $conectar = parent::Conexion();
            parent::set_names();

            $sql = "DELETE FROM t_clientes WHERE IDCLIENTE = ? ";
            $sql = $conectar->prepare($sql); 
            $sql->bindValue(1,$IDCLIENTE); 
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_cliente($RAZON_SOCIAL,$RFC){
            $conectar = parent::Conexion();
            parent::set_names();

            $sql = "INSERT INTO t_clientes (IDCLIENTE,RAZON_SOCIAL,RFC)
                    VALUES (NULL,?,?) ";
            $sql = $conectar->prepare($sql); 
            $sql->bindValue(1,$RAZON_SOCIAL);
            $sql->bindValue(2,$RFC);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_cliente($IDCLIENTE,$RAZON_SOCIAL,$RFC){
            $conectar = parent::Conexion();
            parent::set_names();
            

            $sql = "UPDATE t_clientes SET RAZON_SOCIAL=?, RFC=? WHERE IDCLIENTE = ? ";
            $sql = $conectar->prepare($sql); 
            $sql->bindValue(1,$RAZON_SOCIAL);
            $sql->bindValue(2,$RFC);
            $sql->bindValue(3,$IDCLIENTE);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>
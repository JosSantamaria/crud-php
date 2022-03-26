<?php
    class Producto extends Conectar
    {
        public function get_producto(){
            $conectar = parent::Conexion();
            parent::set_names();

            $sql = "SELECT * FROM t_productos";//TODO: Seleccionar productos.
            $sql = $conectar->prepare($sql); //TODO: conectar y preparar query para ejecucion.
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

        public function delete_producto_x_id($IDMATERIAL){
            $conectar = parent::Conexion();
            parent::set_names();

            $sql = "DELETE FROM t_productos WHERE IDMATERIAL = ? ";
            $sql = $conectar->prepare($sql); 
            $sql->bindValue(1,$IDMATERIAL); 
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function insert_producto($DESCRIPCION,$UNIDADMEDIDA,$PRECIO1){
            $conectar = parent::Conexion();
            parent::set_names();

            $sql = "INSERT INTO t_productos (IDMATERIAL,DESCRIPCION,UNIDADMEDIDA,PRECIO1)
                    VALUES (NULL,?,?,?) ";
            $sql = $conectar->prepare($sql); 
            $sql->bindValue(1,$DESCRIPCION);
            $sql->bindValue(2,$UNIDADMEDIDA);
            $sql->bindValue(3,$PRECIO1); 
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_producto($IDMATERIAL,$DESCRIPCION,$UNIDADMEDIDA,$PRECIO1){
            $conectar = parent::Conexion();
            parent::set_names();
            

            $sql = "UPDATE t_productos SET DESCRIPCION=?, UNIDADMEDIDA=?, PRECIO1=? WHERE IDMATERIAL = ? ";
            $sql = $conectar->prepare($sql); 
            $sql->bindValue(1,$DESCRIPCION);
            $sql->bindValue(2,$UNIDADMEDIDA);
            $sql->bindValue(3,$PRECIO1);
            $sql->bindValue(4,$IDMATERIAL);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>
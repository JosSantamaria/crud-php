<?php

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=empresa","root","sistemas");
                return $conectar;
            }
            catch(Exception $e){
                print "Error en la Base de Datos!! ".$e->getMessage()."</br>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf-8' ");
        }

    }

?>
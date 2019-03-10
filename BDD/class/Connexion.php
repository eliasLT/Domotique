<?php
    class Connexion{
        private static $mysql = NULL;
        private static $mongo = NULL;
        
        public static function getMySQLConnexion(){
            if($mysql == NULL){
                $mysql = new PDO('mysql:host=localhost;dbname=domotique', 'root', '');
            }

            return $mysql;
        }

        public static function getMongoConnexion(){
            if($mongo == NULL){
                $m = new  MongoClient();
                $mongo = $m->Domotique->conso;
            }
            return $mongo;
        }

    }


?>
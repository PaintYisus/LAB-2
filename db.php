<?php
        function getDB(){
            $db = new PDO ('mysql:host=localhost;dbname=dblab#2;charset=utf8', 'root', '');
            return $db;
        }

        function getMaterias(){
            $db = getDB();
            $sentencia = $db->prepare("select * from materia");
            $sentencia->execute();
            $materias = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $materias;
        }

        function search($buscado){
            $db = getDb();
            $sentencia = $db->prepare("select * from materia where nombre like ?");
            $sentencia->execute(['%' . $buscado . '%']);
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }





























?>
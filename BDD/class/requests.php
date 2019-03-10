<?php

    $getUser_SQL = "SELECT id,mdp FROM users WHERE username=?";

    function getUser($conn, $username){
        $conn->prepare($getUser_SQL);
        $conn->execute(array($username));
        $donnees = $req->fetch();
        return $donnees;
    }

    $getConnexion_SQL = "SELECT * FROM connexion WHERE iduser=?";

    function getConnexion($conne,$id ,$mdp){
    $conne->prepare($getConnexion_SQL);
    $conne->execute(array($id,$mdp))
    $donnees = $req->fetch();
    return $donnees;


    }

?>
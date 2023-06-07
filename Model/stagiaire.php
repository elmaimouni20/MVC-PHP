<?php
function database_connecxion()
{
  return new PDO ('mysql:dbname=dbmvc;host=localhost','root','');
}
function liste_stagiaire()
{
    $pdo=database_connecxion();
    $stagiaires= $pdo->query('SELECT * FROM  stagiaire')->fetchAll(PDO::FETCH_OBJ);
    return $stagiaires;
}

function create()
{
    extract($_POST);
    $pdo=database_connecxion();
    $sqlstate=$pdo->prepare("INSERT INTO `stagiaire` VALUES(null,?,?,?,?,?)");
    $sqlstate->execute([$nom,$prenom,$age,$login,$password]);
}
function destroy($id)
{
    $pdo=database_connecxion();
    $sqlstate=$pdo->prepare("DELETE FROM `stagiaire` WHERE id = ?");
    $sqlstate->execute([$id]);

}
function View($id)
{
    $pdo=database_connecxion();
    $sqlstate=$pdo->prepare("SELECT * FROM `stagiaire` WHERE id = ?");
    $sqlstate->execute([$id]);
    return $sqlstate->fetch(PDO::FETCH_OBJ);

}
// function edit($id, $nom, $prenom, $age, $login, $password)
// {
//     $pdo = database_connecxion();
//     $sqlState = $pdo->prepare("UPDATE stagiaire
//                                     SET nom = ? ,
//                                         prenom = ? , 
//                                         age = ? , 
//                                         login = ? , 
//                                         password = ?
//                                     WHERE id = ?");
//     return $sqlState->execute([$nom, $prenom, $age, $login, $password, $id]);
// }
function edit($id, $nom, $prenom, $age, $login, $password)
{
    $pdo=database_connecxion();
    $sqlState=$pdo->prepare("UPDATE stagiaire
     SET nom = ? ,prenom = ? ,age = ? ,login = ? ,password = ? WHERE id = ?");
  return $sqlState->execute([$nom, $prenom, $age, $login, $password, $id]);

}
// ?>
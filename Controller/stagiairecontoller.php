<?php
 require_once 'Model/stagiaire.php';
function index()
{
  $stagiaires=liste_stagiaire();
   require_once('View/listestagiaire.php');
}
function createAction()
{
    require_once('View/create.php');
}
function storeAction()
{
  create();
  header('location:index.php?action=list');
}
function destroyAction()
{
    $id=$_GET['id'];
    destroy($id);
        header('location:index.php?action=list');
}
function deleteAction()
{
    $id=$_GET['id'];
    require_once('View/delete.php');

}
function editAction()
{
    $id = $_GET['id'];
    $stagiaire = view($id);
    require_once 'View/edit.php';
}
function updateAction()
{
    extract($_POST);
    edit($id, $nom, $prenom, $age, $login, $password);
    header('location:index.php?action=list');
}

?>
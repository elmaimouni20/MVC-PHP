<?php
$title="Liste des stagiaire";
ob_start(); 
?>
<a href="index.php?action=create" class="btn btn-primary">Ajouter</a>
<table class="table table-striped">
    <thead> 
    <tr>
    <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>AGE</th>
        <th>LOGIN</th>
        <th>Action</th>
      </tr>
        
    </thead>
    <tbody>
  
    </tbody>
    <?php
foreach($stagiaires as $stagiaire):?>



<tr>
    <td><?php echo  $stagiaire->id ?></td>
    <td><?php echo $stagiaire->nom ?></td>
    <td><?php echo $stagiaire->prenom ?></td>
    <td><?php echo $stagiaire->age ?></td>
    <td><?php echo $stagiaire->login ?></td>
    <td>
    <a href="index.php?action=edit&id=<?php echo  $stagiaire->id ?>" class="btn btn-success  btn-sm">Modifier</a>
    <a href="index.php?action=delete&id=<?php echo  $stagiaire->id ?>" class="btn btn-danger btn-sm">Supprimer</a>

</td>
</tr>
<?php endforeach ;?>
</table>
<?php $content=ob_get_clean()?>
<?php include_once'View/layout.php'?>
</body>
</html>

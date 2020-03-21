<h1>Détail d'un étudiant</h1>
<hr /><br /><br />

<?php  foreach ($etudiant as $row) { ?>
    Code:      <?= $row[0] ?><br>
    Nom:       <?= $row[1] ?><br>
    Prenom:    <?= $row[2] ?><br>
    Filiere:   <?= $row[3] ?><br>
<?php }?>
<hr />
<input type="submit" name="return" value="return" onclick="location.href='index.php'" class="titre">
<!--
<input type="submit" name="modifier" value="modifier" onclick="location.href='index.php'" class="titre">
<input type="submit" name="supprimer" value="supprimer" onclick="location.href='index.php'" class="titre">
-->


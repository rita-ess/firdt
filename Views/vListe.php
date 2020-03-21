<h1>Liste des étudiants </h1>
<hr /><br /><br />

<select>
	<?php  foreach ($etudiants as $row) { ?>  
		<tr>
			<option onclick="location.href='index.php?action=Detail&code=<?= $row[0] ?>'"><?= $row[1].' '.$row[2] ?></option>
		</tr>    
	<?php }?>
</select> 






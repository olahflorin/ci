

<form action="" method="post" style="width:350px;margin-left:30px;">
	<?php
		if($salvat) {
			echo 'Produs adaugat cu succes';
		}
	?>

	<label>Nume</label>
	<input type="text" name="nume" placeholder="Nume" />
	<br/><br/>
	<label>Descriere</label>
	<textarea name="descriere"></textarea>
	
	<input type="hidden" name="id_categorie" value="1" />
	<br/><br/>
	<label>Producator</label>
	<select name="id_producator">
		<?php
		foreach($producatori as $producator) {
			$id = $producator['id_producator'];
			$nume = $producator['nume'];
			echo "<option value=$id>$nume</option>";
		}
		?>
	</select>
	<br/><br/>
	<label>Pret</label>
	<input type="text" name="pret" />
	<br/><br/>
	<input type="submit" value="Adauga" />
	
</form>

<br/>
<div style="clear:both;"></div>
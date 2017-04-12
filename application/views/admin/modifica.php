<form enctype="multipart/form-data" action="" method="post" style="width:350px;margin-left:30px;">
	<?php
		if($salvat) {
			echo 'Produs modificat cu succes';
		}
	?>

	<label>Nume</label>
	<input type="text" name="nume" value="<?=$produs['nume']?>" />
	<br/><br/>
	<label>Descriere</label>
	<textarea name="descriere"><?=$produs['descriere']?></textarea>
	
	<input type="hidden" name="id_categorie" value="1" />
	<br/><br/>
	<label>Producator</label>
	<select name="id_producator">
		<?php
		foreach($producatori as $producator) {
			$id = $producator['id_producator'];
			$nume = $producator['nume'];
			$selected = '';
			if($id == $produs['id_producator']) {
				$selected = 'selected';
			}
			echo "<option $selected value=$id>$nume</option>";
		}
		?>
	</select>
	<br/><br/>
	<label>Pret</label>
	<input type="text" name="pret" value="<?=$produs['pret']?>" />
	<br/><br/>
	<?php 
		if(!empty($produs['imagine'])) {
			$imagine = $produs['imagine'];
			echo "<img src='$imagine' width='150' />";
		}
	?>
	<input type="file" name="fisier" />
	<br/><br/>
	<input type="submit" value="Modifica" />
	
</form>

<br/>
<div style="clear:both;"></div>
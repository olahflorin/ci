

<br/><br/>

<a href="<?=base_url();?>admin/adauga" class="btn btn-default">Adauga produs</a>

<br/><br/><br/><br/>
<form action="" method="post">
	<select name="id_produs">
		<?php 
		foreach($produse as $produs) {
			$id = $produs['id'];
			$nume = $produs['nume'];
			echo "<option value=$id>$nume</option>";
		}
		?>
	</select>
	<input type="submit" value="Modifica produs" class="btn btn-error" />
</form>

<br/><br/>
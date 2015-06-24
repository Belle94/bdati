<?php include 'header.php'; ?>
<div class="conteiner">
	<?php include 'menu.php'; ?>
    <div class="main">
		<?php 	include 'opendb.php'; ?>
		<form action="controllore.php" method="get">
			<h1>Ordine Cliente: Quantit&agrave</h1>
			<input type="text" name="mod_qnt_ordine_c_1" placeholder="Codice Ordine" required="required" />
			<input type="text" name="mod_qnt_ordine_c_2" placeholder="Codice Articolo" required="required" />
			<input type="text" name="mod_qnt_ordine_c_3" placeholder="Quantit&agrave" required="required" />
			<button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
		</form>
		<form action="controllore.php" method="get">
			<h1>Ordine Operatore: Quantit&agrave materiale</h1>
		    <input type="text" name="mod_qnt_ordine_o_1" placeholder="Codice Ordine" required="required" />
			<input type="text" name="mod_qnt_ordine_o_2" placeholder="Codice Fornitore" required="required" />
		    <input type="text" name="mod_qnt_ordine_o_3" placeholder="Quantit&agrave" required="required" />
		    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
		</form>
		<form action="controllore.php" method="get">
			<h1>Ordine Cliente: Stato</h1>
		    <input type="text" name="mod_stato_ordine_c_1" placeholder="Codice Ordine Cliente" required="required" />
			<div class="likeainput"> 
				Stato: <br><br>
				<input type="radio" name="mod_stato_ordine_c_2" value="1"/> Accettato 
			    <input type="radio" name="mod_stato_ordine_c_2" value="2"/> In Esecuzione
			    <input type="radio" name="mod_stato_ordine_c_2" value="3"/> Terminato
			</div>
		    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
		</form>
		<form action="controllore.php" method="get">
			<h1>Utensile: Tempo Preparazione</h1>
		    <input type="text" name="mod_tmp_prp_utensile_1" placeholder="Codice Utensile" required="required" />
		    <input type="text" name="mod_tmp_prp_utensile_2" placeholder="Tempo Preparazione Utensile" required="required" />
		   	<button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
		</form>
		<?php 	include 'closedb.php';	?>
	</div>
</div>
<?php include 'footer.php'; ?>
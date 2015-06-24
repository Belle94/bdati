<?php include 'header.php'; ?>
<div class="conteiner">
	<?php include 'menu.php'; ?>
    <div class="main">
		<?php 	include 'opendb.php'; ?>
		<div class="left">			
			<form action="controllore.php" method="get">
			    <h1>Materia Prima</h1>
			    <input type="text" name="elimina_materia_prima" placeholder="Codice Materia Prima" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Fornitore</h1>
			    <input type="text" name="elimina_fornitore" placeholder="Codice Fornitore" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Ordine Cliente</h1>
			    <input type="text" name="elimina_ordine_cliente" placeholder="Codice Ordine Cliente" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Operaio</h1>
			    <input type="text" name="elimina_operaio" placeholder="Codice Operaio" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Manutenzione</h1>
			    <input type="text" name="elimina_manutenzione" placeholder="Codice Manutenzione" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Utensile</h1>
			    <input type="text" name="elimina_utensili" placeholder="Codice Utensili" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
		</div>
		<div class="right">			
			<form action="controllore.php" method="get">
			    <h1>Articolo</h1>
			    <input type="text" name="elimina_articolo" placeholder="Codice Articolo" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Cliente</h1>
			    <input type="text" name="elimina_cliente" placeholder="Codice Cliente" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Ordine Operatore</h1>
			    <input type="text" name="elimina_ordine_operatore" placeholder="Codice Ordine Operatore" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Macchina</h1>
			    <input type="text" name="elimina_macchina" placeholder="Codice Macchina" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Operatore</h1>
			    <input type="text" name="elimina_operatore" placeholder="Codice Operatore" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Operazione</h1>
			    <input type="text" name="elimina_operazione" placeholder="Codice Operazione" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
		</div>
		<?php 	include 'closedb.php';	?>
	</div>
</div>
<?php include 'footer.php'; ?>
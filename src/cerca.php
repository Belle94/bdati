<?php include 'header.php'; ?>
<div class="conteiner">
	<?php include 'menu.php'; ?>
    <div class="main">
	    <?php 	include 'opendb.php'; ?>
	    <div class="left">
		    <form action="controllore.php" method="get">
				<h1>Materie Prime</h1>
		        <input type="text" name="cerca_materia_prima_1" placeholder="Codice Materia Prima"/>
				<input type="text" name="cerca_materia_prima_2" placeholder="Materiale">
				<button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
		    <form action="controllore.php" method="get">
				<h1>Articolo con Materia prima</h1>
		        <input type="text" name="cerca_materia_articolo_1" placeholder="Codice Articolo"/>
		        <input type="text" name="cerca_materia_articolo_2" placeholder="Codice Materia Prima"/>
				<button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
		   	<form action="controllore.php" method="get">
		        <h1>Articolo</h1>
		        <input type="text" name="cerca_articolo_1" placeholder="Codice articolo"/>
				<button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Fornitori</h1>
			    <input type="text" name="cerca_fornitore_1" placeholder="Codice Fornitore" />
			    <input type="text" name="cerca_fornitore_2" placeholder="Codice Materia Prima" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Clienti</h1>
			    <input type="text" name="cerca_cliente_1" placeholder="Codice Cliente" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Macchine</h1>
			    <input type="text" name="cerca_macchina" placeholder="Codice Macchina" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Operai</h1>
			    <input type="text" name="cerca_operaio_1" placeholder="codice"/>
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
		</div>
		<div class="right">
			<form action="controllore.php" method="get">
			    <h1>Utensili</h1>
			    <input type="text" name="cerca_utensile_1" placeholder="Codice" />
			    <input type="text" name="cerca_utensile_2" placeholder="Codice ciclo" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Manutenzioni</h1>
			    <input type="text" name="cerca_manutenzione_1" placeholder="Codice" />
			    <input type="text" name="cerca_manutenzione_2" placeholder="Codice Macchina" />
			    <div class="likeainput"> 
			    <input type="radio" name="cerca_manutenzione_3" value="interna"/> Interna
			    <input type="radio" name="cerca_manutenzione_3" value="esterna" /> Esterna
			    <input type="radio" name="cerca_manutenzione_3" value="entrambi"/> Entrambe
			    </div>
			    <input type="text" name="cerca_manutenzione_4" placeholder="Codice Operatore *solo se interna"/>
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Ordini Clienti</h1>
			    <input type="text" name="cerca_ordine_cliente_1" placeholder="Codice" />
			    <input type="text" name="cerca_ordine_cliente_2" placeholder="Codice Cliente"/>
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
			    <h1>Ordini Operatori</h1>
			    <input type="text" name="cerca_ordine_operatore_1" placeholder="Codice" />
			    <input type="text" name="cerca_ordine_operatore_2" placeholder="Codice Operatore" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
		</div>
	    <?php 	include 'closedb.php';	?>
    </div>
</div>
<?php include 'footer.php'; ?>

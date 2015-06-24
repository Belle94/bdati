<?php include 'header.php'; ?>
<div class="conteiner">
	<?php include 'menu.php'; ?>
    <div class="main">
		<?php 	include 'opendb.php'; ?>
		<div class="left">
			<form action="controllore.php" method="get">
				<h1>Materia Prima</h1>
			    <input type="text" name="inserisci_materia_prima_1" placeholder="Codice Materia Prima" required="required" />
				<input type="text" name="inserisci_materia_prima_2" placeholder="Descrizione" />
				<input type="text" name="inserisci_materia_prima_3" placeholder="Materiale" required="required" />
				<input type="text" name="inserisci_materia_prima_4" placeholder="Categoria" required="required" />
				<input type="text" name="inserisci_materia_prima_5" placeholder="Stato (es trafilato, laminato , ...)" />
				<input type="text" name="inserisci_materia_prima_6" placeholder="Unita' (Kg, m, lt)" required="required" />
				<input type="text" name="inserisci_materia_prima_7" placeholder="Quantita' presente" required="required" />
				<input type="text" name="inserisci_materia_prima_8" placeholder='Soglia (0 se non a "magazzino")' required="required" />
				<input type="text" name="inserisci_materia_prima_9" placeholder="Codice fiscale del fornitore" required="required" />
				<input type="text" name="inserisci_materia_prima_10" placeholder="Nome Fornitore" />
				<input type="text" name="inserisci_materia_prima_11" placeholder="Cognome Fornitore" />
				<input type="text" name="inserisci_materia_prima_12" placeholder='Prezzo Materia prima' required="required" />
				<input type="text" name="inserisci_materia_prima_13" placeholder='Tempo di consegna (in giorni)(int)' required="required" />
   			    <textarea name="inserisci_materia_prima_14" placeholder="Descrizione Fornitore"></textarea>
   			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Ordine Cliente</h1>
			    <input type="text" name="inserisci_ordine_cliente_1" placeholder="Codice Ordine" required="required" />
			    <input type="text" name="inserisci_ordine_cliente_2" placeholder="Codice Cliente" required="required" />
			    <input type="text" name="inserisci_ordine_cliente_3" placeholder="Codice articolo richiesto" required="required" />
   			    <input type="text" name="inserisci_ordine_cliente_6" placeholder="Quantit&agrave; dell'articolo" required="required" />
				<input type="text" name="inserisci_ordine_cliente_4" placeholder="Data Ordine" required="required"/>
			    <input type="text" name="inserisci_ordine_cliente_5" placeholder="Descrizione"/>
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Ordine Operatore</h1>
			    <input type="text" name="inserisci_ordine_operatore_1" placeholder="Codice Ordine" required="required" />
			    <input type="text" name="inserisci_ordine_operatore_2" placeholder="Codice Operatore" required="required" />
			    <input type="text" name="inserisci_ordine_operatore_3" placeholder="Data Ordine"/>
   			    <input type="text" name="inserisci_ordine_operatore_4" placeholder="Codice Fornitore" required="required" />
   			    <input type="text" name="inserisci_ordine_operatore_5" placeholder="Quantit&agrave;" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Operazione</h1>
			    <input type="text" name="inserisci_operazione_1" placeholder="Codice Operazione" required="required" />
			    <input type="text" name="inserisci_operazione_2" placeholder="Descrizione" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Macchina</h1>
			    <input type="text" name="inserisci_macchina_1" placeholder="Codice Macchina" required="required" />
			    <input type="text" name="inserisci_macchina_2" placeholder="Codice Operazione" required="required" />
			    <input type="text" name="inserisci_macchina_3" placeholder="Descrizione" />
			    <div class="likeainput"> In Uso:	<input type="checkbox"  name="inserisci_macchina_4"> </div>
			    <input type="text" name="inserisci_macchina_5" placeholder="Durata" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Utensili</h1>
			    <input type="text" name="inserisci_utensile_1" placeholder="Codice Utensile" required="required" />
			    <input type="text" name="inserisci_utensile_2" placeholder="Codice ciclo"/>
			    <input type="text" name="inserisci_utensile_3" placeholder="Nome Utensile"/>
   			    <input type="text" name="inserisci_utensile_4" placeholder="Tempo preparazione"/>
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Aggiungi: Articolo</h1>
			    <input type="text" name="inserisci_articolo_1" placeholder="Codice Articolo" required="required" />
			    <input type="text" name="inserisci_articolo_2" placeholder="Descrizione Articolo" required="required" />
			    <input type="text" name="inserisci_articolo_3" placeholder="costo produzione" required="required" />
			    <input type="text" name="inserisci_articolo_4" placeholder="prezzo di vendita" required="required" />
			    <input type="text" name="inserisci_articolo_5" placeholder="Codice ciclo" required="required" />
			    <input type="text" name="inserisci_articolo_6" placeholder="tempo pulizia ciclo" required="required" />
			    <input type="text" name="inserisci_articolo_7" placeholder="Codice materia prima" required="required" />
			    <input type="text" name="inserisci_articolo_8" placeholder="Quantit&agrave;" required="required" />
			    <input type="text" name="inserisci_articolo_9" placeholder="Codice utensile" required="required" />
			    <input type="text" name="inserisci_articolo_10" placeholder="Nome utensile" required="required" />
			    <input type="text" name="inserisci_articolo_11" placeholder="tempo preparazione utensile" required="required" />
			    <input type="text" name="inserisci_articolo_12" placeholder="Codice Operazione" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
		</div>
		<div class="right">
			<form action="controllore.php" method="get">
				<h1>Operatore</h1>
			    <input type="text" name="inserisci_operatore_1" placeholder="Codice Fiscale Operatore" required="required" />
			    <input type="text" name="inserisci_operatore_2" placeholder="Nome" required="required" />
			    <input type="text" name="inserisci_operatore_3" placeholder="Cognome" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Operaio</h1>
			    <input type="text" name="inserisci_operio_1" placeholder="Codice Fiscale Operaio" required="required" />
			    <input type="text" name="inserisci_operio_2" placeholder="Nome" required="required" />
			    <input type="text" name="inserisci_operio_3" placeholder="Cognome" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Cliente</h1>
			    <input type="text" name="inserisci_cliente_1" placeholder="Codice Fiscale Cliente" required="required" />
			    <input type="text" name="inserisci_cliente_2" placeholder="Nome" required="required" />
			    <input type="text" name="inserisci_cliente_3" placeholder="Cognome" required="required" />
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Fornitore</h1>
			    <input type="text" name="inserisci_fornitore_1" placeholder="Codice Fiscale Fornitore" required="required" />
			    <input type="text" name="inserisci_fornitore_2" placeholder="Codice Materia Prima che fornisce" required="required"/>
			    <input type="text" name="inserisci_fornitore_3" placeholder="Nome" required="required" />
			    <input type="text" name="inserisci_fornitore_4" placeholder="Cognome" required="required" />
			    <input type="text" name="inserisci_fornitore_5" placeholder="Descrizione"/>
			    <input type="text" name="inserisci_fornitore_6" placeholder="Costo Materia prima (int)" required="required"/>
			    <input type="text" name="inserisci_fornitore_7" placeholder="Tempo di consegna (int)"/>
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Manutenzione Interna</h1>
						    <input type="text" name="inserisci_manutenzione_interna_1" placeholder="Codice Manutenzione" required="required" />
			    <input type="text" name="inserisci_manutenzione_interna_2" placeholder="Codice Macchina"/>
			    <input type="text" name="inserisci_manutenzione_interna_3" placeholder="Codice Operaio"/>
   			    <input type="text" name="inserisci_manutenzione_interna_4" placeholder="Data Manutenzione"/>
   			    <textarea name="inserisci_manutenzione_interna_5" placeholder="Descrizione"></textarea>
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Manutenzione Esterna</h1>
			    <input type="text" name="inserisci_manutenzione_esterna_1" placeholder="Codice Manutenzione" required="required" />
			    <input type="text" name="inserisci_manutenzione_esterna_2" placeholder="Codice Macchina"/>
			    <input type="text" name="inserisci_manutenzione_esterna_3" placeholder="ditta"/>
				<input type="text" name="inserisci_manutenzione_esterna_4" placeholder="pezzo di ricambio"/>
   			    <input type="text" name="inserisci_manutenzione_esterna_5" placeholder="Data Manutenzione"/>
   			    <textarea name="inserisci_manutenzione_interna_6" placeholder="Descrizione"></textarea>
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Aggiungi: Articolo ad Ordine Cliente</h1>
			    <input type="text" name="inserisci_articolo_ordine_c_1" placeholder="Codice Ordine" required="required" />
			    <input type="text" name="inserisci_articolo_ordine_c_2" placeholder="Codice Articolo"/>
			    <input type="text" name="inserisci_articolo_ordine_c_3" placeholder="Quantit&agrave;"/>
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
			<form action="controllore.php" method="get">
				<h1>Aggiungi: Articolo ad Materia Prima</h1>
			    <input type="text" name="inserisci_art_mat_1" placeholder="Codice Materia Prima" required="required" />
			    <input type="text" name="inserisci_art_mat_2" placeholder="Codice Articolo"/>
			    <input type="text" name="inserisci_art_mat_3" placeholder="Quantit&agrave;"/>
			    <button type="submit" class="btn btn-primary btn-block btn-large">Esegui</button>
			</form>
		</div>
		<?php 	include 'closedb.php';	?>
	</div>
</div>
<?php include 'footer.php'; ?>

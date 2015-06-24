<?php include 'header.php'; ?>
<div class="conteiner">
	<?php include 'menu.php'; ?>
    <div class="main"> 
		<?php 	include 'opendb.php';
			// VISUALIZZA, RICERCA
			if(isset($_GET["cerca_materia_prima_1"])){
				$sql = "CALL visualizza_materia_prima('".$_GET["cerca_materia_prima_1"]."','".$_GET["cerca_materia_prima_2"]."');";
			}elseif(isset($_GET["cerca_articolo_1"])){
				$sql = "CALL visualizza_articolo_ciclo('".$_GET["cerca_articolo_1"]."');";
			}elseif(isset($_GET["cerca_fornitore_1"])){
            	$sql = "CALL visualizza_fornitore('".$_GET["cerca_fornitore_1"]."','".$_GET["cerca_fornitore_2"]."');";
            }elseif(isset($_GET["cerca_cliente_1"])){
                $sql = "CALL visualizza_cliente('".$_GET["cerca_cliente_1"]."');";
            }elseif(isset($_GET["cerca_macchina"])){
                $sql = "CALL visualizza_mac('".$_GET["cerca_macchina"]."');";
            }elseif(isset($_GET["cerca_operaio_1"])){
                $sql = "CALL visualizza_operaio('".$_GET["cerca_operaio_1"]."');";
            }elseif(isset($_GET["cerca_utensile_1"])){
                $sql = "CALL visualizza_utensile('".$_GET["cerca_utensile_1"]."','".$_GET["cerca_utensile_2"]."');";
            }elseif(isset($_GET["cerca_ordine_cliente_1"])){
                $sql = "CALL visualizza_ordine_c('".$_GET["cerca_ordine_cliente_1"]."','".$_GET["cerca_ordine_cliente_2"]."');";
            }elseif(isset($_GET["cerca_ordine_operatore_1"])){
                $sql = "CALL visualizza_ordine_o('".$_GET["cerca_ordine_operatore_1"]."','".$_GET["cerca_ordine_operatore_2"]."');";
            }elseif(isset($_GET["cerca_materia_articolo_1"])){
            	$sql = "CALL visualizza_materia_articolo('".$_GET["cerca_materia_articolo_1"]."','".$_GET["cerca_materia_articolo_2"]."');";
            }elseif(isset($_GET["cerca_manutenzione_1"])){
            	if ($_GET["cerca_manutenzione_3"] == "interna")
            		$sql = "CALL visualizza_manutenzione('".$_GET["cerca_manutenzione_1"]."','".$_GET["cerca_manutenzione_2"]."','Interna','".$_GET["cerca_manutenzione_4"]."');";
            	elseif ($_GET["cerca_manutenzione_3"] == "esterna")
            		$sql = "CALL visualizza_manutenzione('".$_GET["cerca_manutenzione_1"]."','".$_GET["cerca_manutenzione_2"]."','Esterna','".$_GET["cerca_manutenzione_4"]."');";
            	else 
            		$sql = "CALL visualizza_manutenzione('".$_GET["cerca_manutenzione_1"]."','".$_GET["cerca_manutenzione_2"]."','Entrambe','".$_GET["cerca_manutenzione_4"]."');";
			// INSERISCI
			}elseif(isset($_GET["inserisci_cliente_1"])){
                $sql = "SELECT aggiungi_cliente('".$_GET["inserisci_cliente_1"]."','".$_GET["inserisci_cliente_2"]."','".$_GET["inserisci_cliente_3"]."') AS aggiungi_cliente;";
            }elseif(isset($_GET["inserisci_fornitore_1"])){
                $sql = "SELECT aggiungi_fornitore('".$_GET["inserisci_fornitore_1"]."','".$_GET["inserisci_fornitore_2"]."','".$_GET["inserisci_fornitore_3"]."
				','".$_GET["inserisci_fornitore_4"]."','".$_GET["inserisci_fornitore_5"]."',".$_GET["inserisci_fornitore_6"].",".$_GET["inserisci_fornitore_7"].") AS aggiungi_fornitore;";
            }elseif(isset($_GET["inserisci_macchina_1"])){
				if ($_GET["inserisci_macchina_4"] == true)
                	$sql = "SELECT aggiungi_macchina('".$_GET["inserisci_macchina_1"]."','".$_GET["inserisci_macchina_3"]."','Si','".$_GET["inserisci_macchina_2"]."','".$_GET["inserisci_macchina_5"]."') AS aggiungi_macchina;";
				else 
                	$sql = "SELECT aggiungi_macchina('".$_GET["inserisci_macchina_1"]."','".$_GET["inserisci_macchina_3"]."','No','".$_GET["inserisci_macchina_2"]."','".$_GET["inserisci_macchina_5"]."') AS aggiungi_macchina;";
			}elseif(isset($_GET["inserisci_materia_prima_1"])){
                $sql = "SELECT aggiungi_materia_prima('".$_GET["inserisci_materia_prima_1"]."','".$_GET["inserisci_materia_prima_2"]."','".$_GET["inserisci_materia_prima_3"]."
				','".$_GET["inserisci_materia_prima_4"]."','".$_GET["inserisci_materia_prima_5"]."','".$_GET["inserisci_materia_prima_6"]."',".$_GET["inserisci_materia_prima_7"]."
				,'".$_GET["inserisci_materia_prima_9"]."','".$_GET["inserisci_materia_prima_10"]."','".$_GET["inserisci_materia_prima_11"]."','".$_GET["inserisci_materia_prima_14"]."
				',".$_GET["inserisci_materia_prima_12"].",'".$_GET["inserisci_materia_prima_13"]."',".$_GET["inserisci_materia_prima_8"].") AS aggiungi_materia_prima;";
			}elseif(isset($_GET["inserisci_operatore_1"])){
                $sql = "SELECT aggiungi_operatore('".$_GET["inserisci_operatore_1"]."','".$_GET["inserisci_operatore_2"]."','".$_GET["inserisci_operatore_3"]."') AS aggiungi_operatore;";
			}elseif(isset($_GET["inserisci_operaio_1"])){
                $sql = "SELECT aggiungi_operaio('".$_GET["inserisci_operaio_1"]."','".$_GET["inserisci_operaio_2"]."','".$_GET["inserisci_operaio_3"]."') AS aggiungi_operaio;";
			}elseif(isset($_GET["inserisci_ordine_cliente_1"])){
                $sql = "SELECT aggiungi_ordine_cliente('".$_GET["inserisci_ordine_cliente_1"]."','".$_GET["inserisci_ordine_cliente_2"]."','".$_GET["inserisci_ordine_cliente_4"]."','".$_GET["inserisci_ordine_cliente_5"]."
           	 	','".$_GET["inserisci_ordine_cliente_3"]."','".$_GET["inserisci_ordine_cliente_6"]."') AS aggiungi_ordine_cliente;";
			}elseif(isset($_GET["inserisci_ordine_operatore_1"])){
				$sql = "SELECT aggiungi_ordine_operatore('".$_GET["inserisci_ordine_operatore_1"]."','".$_GET["inserisci_ordine_operatore_2"]."','".$_GET["inserisci_ordine_operatore_3"]."','".$_GET["inserisci_ordine_operatore_4"]."',".$_GET["inserisci_ordine_operatore_5"].") AS inserisci_ordine_operatore;";
			}elseif(isset($_GET["inserisci_operazione_1"])){
					$sql = "SELECT aggiungi_operazione('".$_GET["inserisci_operazione_1"]."','".$_GET["inserisci_operazione_2"]."') AS inserisci_operazione;";
			}elseif(isset($_GET["inserisci_manutenzione_interna_1"])){
                $sql = "SELECT aggiungi_manutenzione_interna('".$_GET["inserisci_manutenzione_interna_1"]."','".$_GET["inserisci_manutenzione_interna_2"]."','".$_GET["inserisci_manutenzione_interna_3"]."','".$_GET["inserisci_manutenzione_interna_4"]."
           	 	','".$_GET["inserisci_manutenzione_interna_5"]."') AS aggiungi_manutenzione_interna;";
			}elseif(isset($_GET["inserisci_manutenzione_esterna_1"])){
                $sql = "SELECT aggiungi_manutenzione_esterna('".$_GET["inserisci_manutenzione_esterna_1"]."','".$_GET["inserisci_manutenzione_esterna_2"]."','".$_GET["inserisci_manutenzione_esterna_5"]."','".$_GET["inserisci_manutenzione_esterna_6"]."
           	 	','".$_GET["inserisci_manutenzione_esterna_3"]."','".$_GET["inserisci_manutenzione_esterna_4"]."') AS aggiungi_manutenzione_esterna;";
			}elseif(isset($_GET["inserisci_utensile_1"])){
                $sql = "SELECT aggiungi_utensile('".$_GET["inserisci_utensile_1"]."','".$_GET["inserisci_utensile_2"]."','".$_GET["inserisci_utensile_3"]."','".$_GET["inserisci_utensile_4"]."') as aggiungi_utensile;";
			}elseif(isset($_GET["inserisci_articolo_ordine_c_1"])){
                $sql = "SELECT aggiungi_articolo_ad_ordine_c('".$_GET["inserisci_articolo_ordine_c_1"]."','".$_GET["inserisci_articolo_ordine_c_2"]."','".$_GET["inserisci_articolo_ordine_c_3"]."') as aggiungi_articolo_ordine_cliente;";
			}elseif(isset($_GET["inserisci_articolo_1"])){
                $sql = "SELECT aggiungi_articolo('".$_GET["inserisci_articolo_1"]."','".$_GET["inserisci_articolo_2"]."',".$_GET["inserisci_articolo_3"].",".$_GET["inserisci_articolo_4"]."
                		,'".$_GET["inserisci_articolo_5"]."','".$_GET["inserisci_articolo_6"]."','".$_GET["inserisci_articolo_7"]."',".$_GET["inserisci_articolo_8"]."
                		,'".$_GET["inserisci_articolo_9"]."','".$_GET["inserisci_articolo_10"]."','".$_GET["inserisci_articolo_11"]."','".$_GET["inserisci_articolo_12"]."') as inserisci_articolo;";
            }elseif(isset($_GET["inserisci_articolo_ordine_c_1"])){
              	$sql = "SELECT  aggiungi_articolo_mat_prime('".$_GET["inserisci_art_mat_1"]."','".$_GET["inserisci_art_mat_2"]."',".$_GET["inserisci_art_mat_3"].") as inserisci_articolo_materia_prima;";     		
                										
			// ELIMINA
			}elseif(isset($_GET["elimina_materia_prima"])){
            	$sql = "SELECT elimina_materia_prima('".$_GET["elimina_materia_prima"]."') AS elimina_materia_prima;";
			}elseif(isset($_GET["elimina_articolo"])){
            	$sql = "SELECT elimina_articolo('".$_GET["elimina_articolo"]."') AS elimina_articolo;";
			}elseif(isset($_GET["elimina_cliente"])){
            	$sql = "SELECT elimina_cliente('".$_GET["elimina_cliente"]."') AS elimina_cliente;";
			}elseif(isset($_GET["elimina_fornitore"])){
            	$sql = "SELECT elimina_fornitore('".$_GET["elimina_fornitore"]."') AS elimina_fornitore;";
			}elseif(isset($_GET["elimina_ordine_cliente"])){
            	$sql = "SELECT elimina_ordine_cliente('".$_GET["elimina_ordine_cliente"]."') AS elimina_ordine_cliente;";
			}elseif(isset($_GET["elimina_ordine_operatore"])){
            	$sql = "SELECT elimina_ordine_operatore('".$_GET["elimina_ordine_operatore"]."') AS elimina_ordine_operatore;";
			}elseif(isset($_GET["elimina_operaio"])){
            	$sql = "SELECT elimina_operaio('".$_GET["elimina_operaio"]."') AS elimina_operaio;";
			}elseif(isset($_GET["elimina_macchina"])){
            	$sql = "SELECT elimina_macchina('".$_GET["elimina_macchina"]."') AS elimina_macchina;";			
			}elseif(isset($_GET["elimina_manutenzione"])){
            	$sql = "SELECT elimina_manutenzione('".$_GET["elimina_manutenzione"]."') AS elimina_manutenzione;";
			}elseif(isset($_GET["elimina_operatore"])){
            	$sql = "SELECT elimina_operatore('".$_GET["elimina_operatore"]."') AS elimina_operatore;";
			}elseif(isset($_GET["elimina_utensile"])){
            	$sql = "SELECT elimina_utensile('".$_GET["elimina_utensile"]."') AS elimina_utensile;";
			}elseif(isset($_GET["elimina_operazione"])){			
            	$sql = "SELECT elimina_operazione('".$_GET["elimina_operazione"]."') AS elimina_operazione;";
           	
           	//MODIFICA
			}elseif(isset($_GET["mod_qnt_ordine_c_1"])){
            	$sql = "SELECT  modifica_qnt_articolo_ordine_c('".$_GET["mod_qnt_ordine_c_1"]."','".$_GET["mod_qnt_ordine_c_2"]."',".$_GET["mod_qnt_ordine_c_3"].") AS modifica_ordine_cliente;";
			}elseif(isset($_GET["mod_qnt_ordine_o_1"])){
            	$sql = "SELECT  modifica_qnt_materie_ordine_o('".$_GET["mod_qnt_ordine_o_1"]."','".$_GET["mod_qnt_ordine_o_2"]."',".$_GET["mod_qnt_ordine_o_3"].") AS modifica_ordine_operatore;";
			}elseif(isset($_GET["mod_stato_ordine_c_1"])){
					$sql = "SELECT  modifica_stato_ordine_cliente('".$_GET["mod_stato_ordine_c_1"]."',".$_GET["mod_stato_ordine_c_2"].") AS modifica_ordine_cliente;";
			}elseif(isset($_GET["mod_tmp_prp_utensile_1"])){
            	$sql = "SELECT  modifica_tmp_prep_utensile ('".$_GET["mod_tmp_prp_utensile_1"]."','".$_GET["mod_tmp_prp_utensile_2"]."') AS modifica_utensile;";
			}else
				$sql = "";
			
			echo "<p>query inviata:</p>";
			echo "<p>".$sql."</p>";
			if($result = mysqli_query($conn,$sql)){
				echo "<table> <thead> <tr>";
				$field_cnt = mysqli_num_fields($result);
				for ($i=0; $i < $field_cnt; $i++){
					$finfo = $result->fetch_field_direct($i);
					printf("<th> %s </th>", $finfo->name);
				}
				echo "</tr> </thead>";
				echo "<tbody>";
				while($row = $result->fetch_array(MYSQLI_NUM)){
					echo "<tr>";
					for ($i=0; $i < $field_cnt; $i++){
						if ($i == 0)
							printf("<td><strong>%s</strong></td>",$row[$i]);
						else
							printf("<td>%s</td>",$row[$i]);
					}
					echo "</tr>";
				}
			}
			else{
				echo "<h2> Error: ". mysqli_error($conn)."</h2>";
			}
			echo "</tbody> </table>";
		include 'closedb.php';    ?>
    </div>
</div>
<?php include 'footer.php'; ?>

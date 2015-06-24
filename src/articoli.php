<?php include 'header.php'; ?>
<div class="conteiner">
	<?php include 'menu.php'; ?>

    <div class="main">
	<table>
		<thead>
			<tr>
				<th>Codice</th>
				<th>Descrizione</th>
				<th>Costo Produzione</th>
				<th>Prezzo Vendita</th>
				<th>Tempo Produzione</th>
				<th>Codice Ciclo</th>
				<th>Tempo Preparazione</th>
				<th>Tempo Pulizia</th>
			</tr>
		</thead>
		<tbody>
			<?php include 'opendb.php';?>
			<?php
				$sql = "CALL visualizza_articolo_ciclo('')";

				if($result = mysqli_query($conn, $sql)){
					while($row = $result->fetch_assoc()){
						echo "<tr>";
						printf("<td><strong>%s</strong></td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>", $row["codice"], $row["descrizione"], $row["costo_prd"], $row["prezzo_vnd"], $row["tempo_prd"], $row["codice_ciclo"], $row["tempo_prp"], $row["tempo_plz"]);
						echo "</tr>";
					}
				}
				else{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			?>
		</tbody>
	</table>
	<?php include 'closedb.php'; ?>
    </div>
</div>
<?php include 'footer.php'; ?>

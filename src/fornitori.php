<?php include 'header.php'; ?>
<div class="conteiner">
	<?php include 'menu.php'; ?>

    <div class="main">
	<table>
		<thead>
			<tr>
				<th>Codice Fiscale</th>
				<th>Codice Materia</th>
				<th>Nome</th>
				<th>Cognome</th>
				<th>Descrizione</th>
				<th>Prezzo</th>
				<th>Tempo Consegna</th>
			</tr>
		</thead>
		<tbody>
			<?php include 'opendb.php'; ?>
			<?php
				$sql = "CALL visualizza_fornitore('','')";

				if($result = mysqli_query($conn, $sql)){
					while($row = $result->fetch_assoc()){
						echo"<tr>";
						printf("<td><strong>%s</strong></td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>",
 						$row["codice_fiscale"], $row["codice_mat"], $row["nome"], $row["cognome"],
						$row["descrizione"], $row["prezzo"], $row["tempo_cng"]);
						echo"</tr>";
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

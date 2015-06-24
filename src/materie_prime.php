<?php include 'header.php'; ?>
<div class="conteiner">
	<?php include 'menu.php'; ?>

    <div class="main">
    	<table>
    	  <thead>
		    <tr>
		      <th>Codice</th>
 			  <th>Materiale</th>
			  <th>Descrizione</th>
 			  <th>Categoria</th>
 			  <th>Stato</th>
 			  <th>Unità</th>
			  <th>Qnt</th>
			  <th>Qnt occupata</th>
			  <th>Soglia</th>
			</tr>
		   </thead>
		   <tbody>
        <?php 	include 'opendb.php';    ?>
        <?php 
        $sql = " CALL visualizza_materia_prima('','') ";

        if ($result = mysqli_query($conn, $sql)) {
        while ($row = $result->fetch_assoc()) {
        	echo "<tr>";
        	printf ("<td><strong>%s</strong></td> <td>%s</td> <td>%s</td> <td>%s</td>
						<td>%s</td>	<td>%s</td>	<td>%s</td>	<td>%s</td>	<td>%s</td>", 
				$row["codice"], $row["materiale"], $row["descrizione"], $row["categoria"], 
				$row["stato"], $row["unità"], $row["qnt"], $row["qnt_occ"], $row["soglia"]);
        	echo "</tr>";
        }
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		?>
		</tbody>
		</table>
        <?php 	include 'closedb.php';    ?>
    </div>
</div>
<?php include 'footer.php'; ?>

<?php include 'header.php'; ?>
<div class="conteiner">
	<?php include 'menu.php'; ?>
	
   
    <div class="main">
      <table>
    	<thead>
		  <tr>
		   <th>Codice Fiscale</th>
		   <th>Nome</th>
		   <th>Cognome</th>
		  </tr>
		 </thead>
	  <tbody>
        <?php 	include 'opendb.php';    ?>
        <?php 
        $sql = " CALL visualizza_cliente('') ";
        
        if ($result = mysqli_query($conn, $sql)) {
        while ($row = $result->fetch_assoc()) {
        	echo "<tr>";
        	printf ("<td><strong>%s</strong></td> <td>%s</td> <td>%s</td>", $row["codice_fiscale"], $row["nome"], $row["cognome"]);
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
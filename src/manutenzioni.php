<?php include 'header.php'; ?>
<div class="conteiner">
	<?php include 'menu.php'; ?>
	
   
    <div class="main">
      <table>
    	<thead>
		  <tr>
		   <th>Codice</th>
		   <th>Codice Macchina</th>
		   <th>Data</th>
		   <th>Descrizione</th>
		  </tr>
		 </thead>
	  <tbody>
        <?php 	include 'opendb.php';    ?>
        <?php 
        $sql = " CALL visualizza_manutenzione('','',3,'') ";
        
        if ($result = mysqli_query($conn, $sql)) {
        while ($row = $result->fetch_assoc()) {
        	echo "<tr>";
        	printf ("<td><strong>%s</strong></td> <td>%s</td> <td>%s</td> <td>%s</td>", $row["codice"], $row["codice_mac"], $row["data"],$row["descrizione"]);
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

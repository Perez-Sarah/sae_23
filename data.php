<?php
		include("connexion_bd.php");/*used the connexion_bd.php*/
		$sql= "SELECT valeur FROM Mesure ORDER BY id_message DESC LIMIT 1";/*call of the measurement table in the database*/

$connect_value = mysqli_query($conn, $sql);

if ($connect_value) {

  // output data of each row
  while($row_value = mysqli_fetch_assoc($connect_value)) {
    echo "valeur: " .  $row_value["valeur"]. " <br>";/*displays the value*/

  }

} else {
  echo "0 results";/*display no result*/
}
	?>

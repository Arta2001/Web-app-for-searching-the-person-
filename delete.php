<?php
include_once 'config.php';
$sql = "DELETE FROM perdoruesi WHERE ID_Perdoruesi='" . $_GET["ID_Perdoruesi"] . "'";
if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
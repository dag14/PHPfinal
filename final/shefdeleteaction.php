<?php
include('connection.php');
$sql = "DELETE FROM shefreg WHERE Id='" . $_GET["Id"] . "'";
mysqli_select_db($conn,'receipe');
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
     header('location:sheffetch.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

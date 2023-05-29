<?php
include('connection.php');
$sql = "DELETE FROM reg WHERE email='" . $_GET["email"] . "'";
mysqli_select_db($conn,'receipe');
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header('location:fetch.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

<?php
include 'config2.php';
$sql = "DELETE FROM contact WHERE sno='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location: basic_table.php");
?>
<?php

$id = $_GET['id'];

$conn = mysqli_connect("localhost", "ipia", "ipia123", "ipia");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM users WHERE user_id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: admin'); //returning to user mgmt page
    exit;
} else {
    echo "Error deleting record";
}
?>
<?php

include 'config.php';

header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');

$sql    = "SELECT * FROM employee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array(
        'message' => 'No Record Found',
        'status' => false
    ));
}

?>
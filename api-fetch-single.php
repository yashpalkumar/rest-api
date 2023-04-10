<?php

include 'config.php';

header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"),true);
$emp_id = $data['emp_id'];

$sql    = "SELECT * FROM employee where empid = {$emp_id}";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array(
        'message' => 'Sorry, No Record Found',
        'status' => false
    ));
}

?>
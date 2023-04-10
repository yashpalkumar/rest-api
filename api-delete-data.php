<?php

include 'config.php';

header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,
Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
 

$data = json_decode(file_get_contents("php://input"),true);
$emp_id = $data['emp_id'];

$sql = "DELETE FROM employee where empid = {$emp_id}";

if ($result = $conn->query($sql)) {
    echo json_encode(array(
        'message' => 'Record deleted successfully.',
        'status' => false
    ));
} else {
    echo json_encode(array(
        'message' => 'Sorry, Record not deleted..',
        'status' => false
    ));
}

?>

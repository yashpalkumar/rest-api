<?php

include 'config.php';

header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,
Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
 

$data = json_decode(file_get_contents("php://input"),true);

$emp_id = $data['emp_id'];
$emp_name = $data['name'];
$emp_dob = $data['dob'];
$emp_email = $data['email'];
$emp_mobile = $data['mobile'];
$emp_salary = $data['salary'];

$sql = "UPDATE employee SET  
		name = '{$emp_name}',
		dob = '{$emp_dob}',
		email = '{$emp_email}',
		mobile = '{$emp_mobile}',
		salary = '{$emp_salary}'
		WHERE empid = '{$emp_id}'";

if ($result = $conn->query($sql)) {
    echo json_encode(array(
        'message' => 'Data Updated',
        'status' => true
    ));
} else {
    echo json_encode(array(
        'message' => 'Sorry, Data Not Updated',
        'status' => false
    ));
}

?>
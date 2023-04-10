<?php

include 'config.php';

header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,
Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
 

$data = json_decode(file_get_contents("php://input"),true);
$emp_name = $data['name'];
$emp_dob = $data['dob'];
$emp_email = $data['email'];
$emp_mobile = $data['mobile'];
$emp_salary = $data['salary'];

$sql = "INSERT INTO employee(name, dob, email, mobile, salary) VALUES ('{$emp_name}','{$emp_dob}','{$emp_email}','{$emp_mobile}','{$emp_salary}')";


if ($result = $conn->query($sql)) {
    echo json_encode(array(
        'message' => 'Data Inserted',
        'status' => true
    ));
} else {
    echo json_encode(array(
        'message' => 'Data Not Inserted',
        'status' => false
    ));
}

?>
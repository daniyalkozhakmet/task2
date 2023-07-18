<?php
include('db.php');
include('test.php');
if (isset($_POST)) {
    $data = stripslashes(file_get_contents("php://input"));
    $my_data = json_decode($data, true);
    if (isset($my_data['id'])) {
        $test = new Test();
        $new_test = $test->change($my_data['id']);
        $response = [
            "data" => $new_test
        ];
        print_r(json_encode($response));
    }
}

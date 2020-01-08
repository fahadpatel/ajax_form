<?php
if (!empty($_POST['phone_no'])) {
    $res['status']  = 404;
    $res['message'] = "Name is empty";
    echo json_encode($res);
    exit;
} else {
    $res['status']  = 1;
    $res['message'] = "Successfull";
    echo json_encode($res);
    exit;
}
?>

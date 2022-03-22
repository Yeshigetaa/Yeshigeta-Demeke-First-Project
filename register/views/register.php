<?php
require_once 'DbConnection.php';
$txtName = $_POST['txtName'];
$txtPhone = $_POST['txtPhone'];
$college = new College();
$college->setName($txtName);
$college->setPhone($txtPhone);
$is_success = $college->registerr($college);
if ($is_success == true) {
    echo "Record saved successfully.";
} else {
 echo "Sorry, Something went wrong. Try again.";
}
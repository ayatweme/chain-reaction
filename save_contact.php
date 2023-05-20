<?php
define("Root", "http://localhost/assignment/");
define("PROJECT_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/assignment/");
define("server", "localhost");
define("username", "root");
define("password", "");
define("db_name", "assignment");

session_start();
$conn = mysqli_connect(server, username, password, db_name);

mysqli_set_charset($conn, "utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];

$extractName=explode(" ",$name);

$phone = $_POST['phone'];
$createdDate = date('Y-m-d H:i:s');
function insert_query($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return mysqli_insert_id($conn);
    } else {
        error();
        return 0;
    }
}

function error()
{
    global $conn;
    echo 'Error happened while contacting database..';

    die();
}
$add = "INSERT INTO `contact_information`
    (`firstName`,`lastName`, `phone`,`createdDate`)
    VALUES ('$extractName[0]','$extractName[1]', '$phone', '$createdDate')";

if($add){
    insert_query($add);


    $_SESSION['success']=1;
}

else {
$_SESSION['error']=1;
}

header("Location: contact_form.php");
exit();

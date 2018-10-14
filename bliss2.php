<?php

$db_hostname = "127.0.0.1";
$db_database = "lab1";
$db_username = "root";
$db_password = "";

$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error($db_server));
mysqli_select_db($db_server, $db_database)
    or die("Unable to select database: " . mysqli_error($db_server));
$query = "INSERT INTO lab VALUES ('tuvshee','tuvshee')";
$result = mysqli_query($db_server, $query);
if (!$result)
    die("Database access failed : " . mysqli_error($db_server));

if (isset($_POST['title']) && isset($_POST['director'])) {
    $title = $_POST['title'];
    $director = $_POST['director'];
} else {
    echo "baihgu";
}
?>

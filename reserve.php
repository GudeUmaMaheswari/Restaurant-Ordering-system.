<?php
$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if ($conn) {
    echo "yahoo";
}
else{
    echo "Connection error";
}

$name = $_POST["name"];
$email = $_POST["email"];
$date = $_POST["date"];
$time = $_POST["time"];
$message = $_POST["message"];

$conn->query("use message_db");
echo "super";

$query1 = "insert into message values(\"$name\",\"$email\",\"$date\",\"$time\",\"$message\");";
if ($conn->query($query1)){
    echo "values entered";
}
else{
    echo "error";
}

echo "Record saved";

?>

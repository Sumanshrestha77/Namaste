<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
if (!empty($username)){
if (!empty($email)){
$host = "sql103.epizy.com";
$dbusername = "epiz_27040581";
$dbpassword = "L8PtlQNDC044jt";
$dbname = "epiz_27040581_signup";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
    
$sql = "INSERT INTO account (username, email)
values ('$username','$email')";
if ($conn->query($sql)){
echo "Thank you for signing up with us!";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "email should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
?>
<?php
include_once('connection.php');
// Defining variables in php
$varname = $varemail = $varuser = $varpwd = ""; // set variables to empty

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $varname = test_input($_POST["name"]);
    $varemail =  test_input($_POST["email"]);
    $varuser =  test_input($_POST["user"]);
    $varpwd = md5(test_input($_POST["password"])); // md5 is for encryption. For more info:https://md5hashing.net/hash
}

// data (pre)processing
function test_input($data){
$data = trim($data); // Strip whitespace (or other characters)
$data = stripslashes($data); // Return a string with backslashes stripped off and un-quote the quoted string
$data = htmlspecialchars($data); // Convert special characters to html entity
return $data;
}



// Create a connection
$conn = mysqli_connect('localhost', 'root', 'Shakil@1989', 'account');

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}else{
    //echo "Connected to the database!";
}

// Create the query
$sql = "INSERT INTO logon(name, email, username, password) VALUES ('$varname','$varemail', '$varuser', '$varpwd' )";
$result = mysqli_query($conn, $sql);

if($result){
    echo "<mark><strong> New record successfully added </strong></mark><br>";
}else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
    header("refresh:5, url=formlogin_index.php"); // redirect to form.php after 5 seconds
}

mysqli_close($conn);
header("refresh:5, url=formlogin_index.php");

?>


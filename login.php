<?php
// Start the session
session_start();
// import the configurations
include_once('connection.php');

// Defining variables in php
$varuser = $varpwd = ""; // set variables to empty

if($_SERVER["REQUEST_METHOD"]=="POST"){   
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
$sql = "SELECT email FROM logon WHERE username = '$varuser' AND password = '$varpwd'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count==1){
    // initialize session variable
    $_SESSION['user_name'] = $varuser;
    echo "<h3 style='text-align:center; color:red'> Welcome ".$varuser." <br> You will be redireted after 5 seconds </h3>";
    header("refresh:5, url=Layout/home.php");
}else{
    echo "The username or password is not valid";
    header("refresh:5, url=formlogin_index.php");
}
mysqli_close($conn);

?>
<?php
// start a session
session_start(); // Function

// manipulate session variables
// get a session id
echo session_id() .'<br/>';
// access session variables
echo $_SESSION['logged_in_user_id'].'<br/>';
echo $_SESSION['logged_in_user_name'].'<br/>';

if(isset($_SESSION['school'])){
    echo $_SESSION['school'].'<br/>';
}
else{
    echo 'The variable school is unset <br/>';
}


// modify session variables

if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 1;
}
else{
    ++$_SESSION['count'];
}
echo 'You have visited this page <mark>' .$_SESSION['count']. ' </mark> times'; 

?>
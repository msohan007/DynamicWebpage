<?php
// start a session
session_start(); // Function

// manipulate session variables
// get a session id
echo session_id() .'<br/>';

// Create session variables
//initialize session variables
$_SESSION['logged_in_user_id'] = '1';
$_SESSION['logged_in_user_name'] = 'Charbel';
$_SESSION['school'] = 'vanier';

// access session variables

echo $_SESSION['logged_in_user_id'].'<br/>';
echo $_SESSION['logged_in_user_name'].'<br/>';
echo $_SESSION['school'].'<br/>';


// modify session variables

if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 1;
}
else{
    ++$_SESSION['count'];
}
echo 'You have visited this page <mark>' .$_SESSION['count']. ' </mark> times'; 

?>
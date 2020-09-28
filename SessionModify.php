<?php
// start a session
session_start(); // Function

echo $_SESSION['school'].'<br>'; 
// unset a session variable
unset($_SESSION['school']);
echo 'variable school unset';
?>
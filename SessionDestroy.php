<?php
// start a session
session_start(); // Function

// remove all session variables
session_unset();
// destroy the entire session
session_destroy();

echo 'The session is destroyed!'; 

?>
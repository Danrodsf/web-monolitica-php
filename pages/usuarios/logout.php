<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: https://drs-monolithic-php-web.herokuapp.com/');
?>

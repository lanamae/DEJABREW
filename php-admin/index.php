<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 
session_start();

$GLOBALS['sample'] = 'Testing';

echo $_SESSION['username'];
echo $sample;   



?>

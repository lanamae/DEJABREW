<?php

session_start();

$GLOBALS['sample'] = 'Testing';

echo $_SESSION['username'];
echo $sample;   



?>

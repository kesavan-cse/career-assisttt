<?php 

$command = escapeshellcmd('C:\wamp64\www\prediction.py');
$output = shell_exec($command);
echo $output;

?>
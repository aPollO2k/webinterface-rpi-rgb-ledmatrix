<?php
$string = $_GET['string'];
$request = '/usr/bin/sudo /usr/bin/python rpi-rgb-led-matrix/message.py ' .  escapeshellarg($string);
shell_exec($request);
?>  

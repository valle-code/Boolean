<?php
session_start();
session_destroy();
header("Location: ../Usuario/index.php");
?>
<?php

session_start();
session_destroy();

header('Location : a.php');
?>
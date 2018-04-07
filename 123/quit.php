<?php

session_start();
$_SESSION = [];
session_commit();
session_destroy();

header('Location: index.php');
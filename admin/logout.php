<?php
session_start();

if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}

session_start();
unset($_SESSION['id_admin']);

header("Location: ./index.php");

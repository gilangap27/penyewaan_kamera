<?php
session_start();

if (!isset($_SESSION['id_admin'])) {
    header("Location: ./index.php");
}

session_start();
session_destroy();

header("Location: ./index.php");

<?php
session_start();
// session_destroy();
$visit = $_SESSION['visit'];
foreach ($_SESSION as $key => $value) {
    if ($key !== 'visit') {
        unset($_SESSION[$key]);
    }
}
session_regenerate_id();
$_SESSION['visit'] = $visit;
header('location:./');
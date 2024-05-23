<?php
session_start();
// first initialize session
if (!isset($_SESSION["visit"])) {
    $_SESSION["visit"] = generateRandomString();
}
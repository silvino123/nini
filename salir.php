<?php

if (!isset($_SESSION)) {
    header("location:login.html");
} else {
    session_unset();
    session_destroy();
    header("location:login.html");
}
?>
<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['user'])) {
    $_SESSION['user'] = null;
    session_unset();
    session_destroy();
}

echo ("<script language='javascript'>window.alert('Successfully Logout'); window.location.href='home.html';</script>");
exit();
?>
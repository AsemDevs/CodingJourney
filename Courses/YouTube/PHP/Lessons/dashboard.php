<?php
    session_start();
    if (isset($_SESSION['Username'])) {
        include 'init.php'; // Redirect to Dashboard
        include $tpl . 'footer.php';

    } else {
        header('Location: index.php');
        exit();
    }
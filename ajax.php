<?php
    session_start();
    include "db.php";
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'am':
                am();
                break;
            case 'en':
                en();
                break;
        }
    }

    function am() {
        $_SESSION['lang'] = 'am';
        echo "<h1>AM</h1>";
    }
    function insert() {
        $_SESSION['lang'] = 'en';
        echo "<h1>EN</h1>";
    }
?>
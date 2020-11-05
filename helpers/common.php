<?php
    session_start();
    header('Cache-control: private'); // IE 6 FIX

    if(isSet($_GET['lang'])){
        $lang = $_GET['lang'];

        // register the session and set the cookie
        $_SESSION['lang'] = $lang;

        setcookie("lang", $lang, time() + (3600 * 24 * 30));
    }else if(isSet($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    }else if(isSet($_COOKIE['lang'])){
        $lang = $_COOKIE['lang'];
    }else{
        $lang = 'pl';
    }

    switch ($lang) {
        case 'en':
        $lang_file = 'langEN.php';
        break;

        case 'de':
        $lang_file = 'langDE.php';
        break;

        case 'pl':
        $lang_file = 'langPL.php';
        break;

        case 'ru':
        $lang_file = "langRU.php";
        break;

        default:
        $lang_file = 'langPL.php';

    }

    include 'languages/'.$lang_file;
?>
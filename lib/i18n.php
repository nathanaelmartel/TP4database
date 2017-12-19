<?php

function get_lang()
{
    $langs_available = array('fr', 'en');
    if (isset($_GET['lang']) && in_array($_GET['lang'], $langs_available)) {
        return $_GET['lang'];
    }

    return 'fr';
}

function load_translation()
{
    global $pdo;

    $translations = array();

    $sth = $pdo->prepare('SELECT * FROM setting WHERE lang=?');
    $sth->execute(array(get_lang()));

    foreach ($sth->fetchAll() as $setting) {
        $translations[$setting['name']] = $setting['value'];
    }

    return $translations;
}

$settings = load_translation();

function __($message)
{
    global $settings;

    if (isset($settings[$message])) {
        return $settings[$message];
    }

    return $message;
}

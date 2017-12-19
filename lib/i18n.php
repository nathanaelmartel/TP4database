<?php

function __($message)
{
    global $lang, $pdo;

    $sth = $pdo->prepare('SELECT * FROM setting WHERE name=? AND lang=?');
    $sth->execute(array($message, $lang));
    $text = $sth->fetch();
    
    if ($text) {
        return $text['value'];
    }

    return $message;
}

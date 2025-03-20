<?php

require_once __DIR__ . '/session/session_fucntions.php';

use JetBrains\PhpStorm\NoReturn;

session_start();

function isGetRequest(): bool
{
    return strtoupper($_SERVER['REQUEST_METHOD']) === 'GET';
}

function isPostRequest(): bool
{
    return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
}

#[NoReturn] function redirect(string $path): void
{
    $location = trim(trim($path), '/');
    header('Location: /' . $location);
    exit;
}




/**
 * Dumps the variable
 * @param $var
 * @return void
 */
function d($var): void
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
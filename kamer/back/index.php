<?php
require_once __DIR__ . '/../../functions.php';

if (isGetRequest()) {
    if (getCurrentRoomId()) {
        resetCurrentRoom();
    }
    redirect('/kamer');

}
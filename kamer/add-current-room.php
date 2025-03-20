<?php
require_once __DIR__ . '/../functions.php';

if (isPostRequest()) {
    if (isset($_POST['room_id'])){
        $_SESSION['player']['current_room'] = (int)$_POST['room_id'];
    }
}

redirect('kamer');

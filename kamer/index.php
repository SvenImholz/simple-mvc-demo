<?php
require_once __DIR__ . '/../functions.php';
require_once 'Room.php';

$rooms = [
        new Room(1, 'Badkamer'),
        new Room(2, 'Slaapkamer'),
        new Room(3, 'Woonkamer')
];

if (isPostRequest()) {
    if (isset($_POST['room_id'])){
        d($_POST['room_id']);
        $_SESSION['player']['current_room'] = (int)$_POST['room_id'];
    }
}



if (getCurrentRoomId()){
    $room = array_values(array_filter($rooms, function ($room){
        return $room->id === getCurrentRoomId();
    }))[0];
    include 'kamer.view.php';
} else {
    include 'kamers.view.php';
}


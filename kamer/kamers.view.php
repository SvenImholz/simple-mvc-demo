<?php
require_once 'Room.php';
/**
 * @var $rooms [Room]
 */
?>

<h1>Kamers</h1>

<ul>
    <?php foreach ($rooms as $room) {
        require __DIR__ . '/kamer-form.view.php';
    }
    ?>
</ul>
<?php
require_once 'Room.php';
/**
 * @var $rooms [Room]
 */
?>

<h1>Kamers</h1>

<ul>
    <?php foreach ($rooms as $room): ?>
        <li>
            <form method="post" action="index.php">
                <input type="hidden" name="room_id" value="<?= $room->id ?>">
                <input type="submit" value="<?= $room->name ?>">
            </form>
        </li>
    <?php endforeach; ?>
</ul>
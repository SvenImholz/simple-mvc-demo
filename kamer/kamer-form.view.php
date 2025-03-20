<?php
/**
 * @var $room Room
 */
?>

<li>
    <form method="post" action="add-current-room.php">
        <input type="hidden" name="room_id" value="<?= $room->id ?>">
        <input type="submit" value="<?= $room->name ?>">
    </form>
</li>
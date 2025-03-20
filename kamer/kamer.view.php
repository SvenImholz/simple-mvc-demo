<?php
require_once 'Room.php';
/**
 * @var $room Room
 */

?>

<h1><?= $room->prettyPrint() ?></h1>

<div>
    <ul>
        <?php foreach ($_SESSION['player']['inventory'] as $item) : ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<a href="/kamer/back">back</a>

<a href="add?item=Stoel">Voeg stoel toe</a>
<?php
function getCurrentRoomId(): ?int
{
    return isset($_SESSION['player']['current_room']) ? (int)$_SESSION['player']['current_room'] : null;
}

function resetCurrentRoom(): void
{
    $_SESSION['player']['current_room'] = null;
}

function addItemToInventory($item): void
{
    if (!isset($_SESSION['player']['inventory'])) {
        $_SESSION['player']['inventory'] = [];
    }
    $_SESSION['player']['inventory'][] = $item;
}
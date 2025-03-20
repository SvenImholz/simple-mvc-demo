<?php
require_once __DIR__ . '/../../functions.php';

addItemToInventory($_GET['item']);

redirect('kamer');
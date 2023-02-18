<?php

$_SESSION['name'] = 'Jeffrey';

view("index.view.php", [
    'heading' => 'Home',
]);
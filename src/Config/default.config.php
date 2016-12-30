<?php

$options = [
    'DB_URL'
];

foreach ($options as $name) {
    $val = getenv($name);
    $app["config.$name"] = $val ?: null;
}
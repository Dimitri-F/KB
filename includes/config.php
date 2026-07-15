<?php

$isLocal = ($_SERVER['HTTP_HOST'] === 'localhost');

define('BASE_URL', $isLocal ? '/KB' : '');

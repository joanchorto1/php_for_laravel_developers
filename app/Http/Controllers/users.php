<?php

use framework\App;

$users= App::get('database')->selectAll('users');

require '../resources/views/users.blade.php'; // VISTA

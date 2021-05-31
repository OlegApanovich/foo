<?php 

echo '<h1> here </h1>';

$bar = shell_exec('git pull 2>&1');


var_dump($bar);

<?php 

echo '<h1> here </h1>';
$foo = shell_exec('git status -s ');
$bar = shell_exec('git pull ');

var_dump($foo);

var_dump($bar);

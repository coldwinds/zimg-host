<?php
include 'bootstrap.php';

$name = htmlentities($_GET['name']);
$error = htmlentities($_GET['error']);

include sprintf('tpl/%s/%s.html', $conf['tpl'], pathinfo(__FILE__, PATHINFO_FILENAME));
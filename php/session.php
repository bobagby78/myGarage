<?php
// session_set_cookie_params(0, '/', '', true, true);
session_start();
$_SESSION['test'] = 'test value';
var_dump($_SESSION);

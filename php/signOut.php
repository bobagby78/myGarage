<?php
$_SESSION['userid'] = null;
session_start();
session_destroy();
error_log("session destroyed");

header("Location: /public");

<?php

session_id('asg1npafeh06nja7u2h954k448');

session_start();

echo session_id();

session_regenerate_id();

var_dump($_SESSION);

?>
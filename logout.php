<?php

session_start();
unset ($SESSION['username']);
session_destroy();

header('Location: https://midomicilio.000webhostapp.com/a/loguin/index.html');

?>
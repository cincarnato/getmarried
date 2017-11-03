<?php

$setting = array_merge_recursive(
include "basic.config.php",
include "controller.config.php",
include "language.config.php"
);

return $setting;

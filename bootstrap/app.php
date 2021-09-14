<?php

use Latus\Helpers\Paths;
use Latus\Laravel\Bootstrapper;

$bootstrapper = new Bootstrapper(Paths::basePath());

$bootstrapper->build();

return $bootstrapper->finish();

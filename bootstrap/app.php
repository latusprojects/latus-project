<?php

use Latus\Helpers\Paths;
use Latus\Installer\Providers\InstallerServiceProvider;
use Latus\Laravel\Bootstrapper;
use Latus\Latus\Providers\LatusServiceProvider;
use Latus\Settings\Providers\SettingsServiceProvider;
use Latus\UI\Providers\UIServiceProvider;

$bootstrapper = new Bootstrapper(Paths::basePath());

$bootstrapper->addBaseProviders([
    SettingsServiceProvider::class,
    UIServiceProvider::class,
    LatusServiceProvider::class,
    InstallerServiceProvider::class
]);

$bootstrapper->build();

return $bootstrapper->finish();

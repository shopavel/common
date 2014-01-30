<?php namespace Shopavel\Support;

use ReflectionClass;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

abstract class ServiceProvider extends IlluminateServiceProvider {

    // /**
    //  * {@inheritDoc}
    //  */
    // public function package($package, $namespace = null, $path = null)
    // {
    //     $path = $path ?: $this->guessPackagePath();

    //     parent::package($package, $namespace, $path);

    //     // Extend illuminate service provider with additional check for package
    //     // seeders, since these are not available by default.
    //     $seeds = $path.'/seeds';

    //     if ($this->app['files']->isDirectory($seeds))
    //     {
    //         $this->app['seeders']->addDirectory($seeds);
    //     }
    // }

    // /**
    //  * {@inheritDoc}
    //  */
    // public function guessPackagePath()
    // {
    //     $path = with(new ReflectionClass($this))->getFileName();

    //     return realpath(dirname($path).'/../../');
    // }

}
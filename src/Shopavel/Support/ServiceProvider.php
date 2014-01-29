<?php namespace Shopavel\Support;

use ReflectionClass;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

abstract class ServiceProvider extends IlluminateServiceProvider {

    /**
     * {@inheritDoc}
     */
    public function package($package, $namespace = null, $path = null)
    {
        $path = $path ?: $this->guessPackagePath();

        parent::package($package, $namespace, $path);

        // Extend illuminate service provider with additional check for package
        // seeders, since these are not available by default.
        $seeds = $path.'/seeds';

        if ($this->app['files']->isDirectory($seeds))
        {
            $this->app['seeders']->addDirectory($seeds);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function guessPackagePath()
    {
        $reflect = new ReflectionClass($this);

        // We want to get the class that is closest to this base class in the chain of
        // classes extending it. That should be the original service provider given
        // by the package and should allow us to guess the location of resources.
        $chain = $this->getClassChain($reflect);

        $path = $chain[count($chain) - 3]->getFileName();

        return realpath(dirname($path).'/../../');
    }

}
<?php namespace Shopavel\Database;

use Illuminate\Container\Container;

class SeedResolver {

    /**
     * The application container.
     *
     * @var Container
     */
    protected $app;

    /**
     * All of the namespace hints.
     *
     * @var array
     */
    protected $seeders = array();

    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    /**
     * Add a path to list of seeder paths.
     *
     * @param  string  $path
     * @return void
     */
    public function addDirectory($directory)
    {
        $seeders = $this->app['files']->glob($directory.'/*Seeder.php');

        foreach ($seeders as $path)
        {
            $seeder = pathinfo($path, PATHINFO_FILENAME);
            $this->app[$seeder] = function() use ($path, $seeder)
            {
                require_once $path;
                return new $seeder;
            };
            $this->seeders[] = $seeder;
        }
    }

    public function getSeeders()
    {
        foreach ($this->seeders as $seeder)
        {
            yield $seeder;
        }
    }

}
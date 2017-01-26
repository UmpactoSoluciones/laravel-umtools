<?php
namespace UmpactoSoluciones\Tools;

use Illuminate\Support\ServiceProvider;

class ToolsServiceProvider extends ServiceProvider
{

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
      $this->registerCommands();
    }

    protected function registerCommands()
    {
      $this->registerRepositoryMakeCommand();
    }

    /**
    * Register the 'make:repository' command.
    *
    * @return void
    */
    protected function registerRepositoryMakeCommand()
    {
      $this->app->singleton('command.umpactotools.make.repository', function($app) {

           return new InstallCommand();
       });
    }
}

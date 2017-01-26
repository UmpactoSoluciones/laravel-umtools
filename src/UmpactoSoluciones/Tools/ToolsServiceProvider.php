<?php
namespace Umpacto\Tools;

use Umpacto\Console\Commands\RepositoryMakeCommand;
use Illuminate\Support\ServiceProvider;

class ToolsServiceProvider extends ServiceProvider
{
    protected $commands = [
      RepositoryMakeCommand::class
    ];

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
      $this->commands($this->commands);
    }


}

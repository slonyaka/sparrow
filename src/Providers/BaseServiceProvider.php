<?php

namespace Slonyaka\Sparrow\Providers;

use Illuminate\Support\ServiceProvider;
use Slonyaka\Sparrow\Commands\EchoCommand;

class BaseServiceProvider extends ServiceProvider {

  private $commands = [
  ];

  public function register() {
    $this->commands($this->commands);
  }

}
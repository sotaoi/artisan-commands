<?php namespace Sotaoi\ArtisanCommands;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ArtisanCommandsServiceProvider extends ServiceProvider {
  public function boot(): void {
    if ($this->app->runningInConsole()) {
      $this->commands([RoutesCommand::class]);
    }
  }

  public function register(): void {
    //
  }

  public static function setRoute(string $routeUri): void {
    Route::get($routeUri, '\Sotaoi\ArtisanCommands\RoutesController@getRoutes');
  }
}

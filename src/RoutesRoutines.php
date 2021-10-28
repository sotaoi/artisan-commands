<?php namespace Sotaoi\ArtisanCommands;

use Illuminate\Support\Facades\Route;

class RoutesRoutines {
  public static function getRoutes(): array {
    $uris = [];
    foreach (Route::getRoutes() as $route) {
        $uris[] = '/' . $route->uri();
    }
    return $uris;
  }
}

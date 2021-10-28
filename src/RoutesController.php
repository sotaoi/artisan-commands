<?php namespace Sotaoi\ArtisanCommands;

use Illuminate\Routing\Controller;

class RoutesController extends Controller {
  public function getRoutes() {
    return response()->json(['uris' => RoutesRoutines::getRoutes()]);
  }
}
